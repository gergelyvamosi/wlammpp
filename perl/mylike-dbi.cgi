#!/usr/bin/perl

use strict;
use warnings;
use DBI;
use Apache2::RequestRec ();
use Apache2::RequestUtil ();
use CGI;
use CGI::Cookie;
use URI::Encode;


my $r = Apache2::RequestUtil->request;

my $req = CGI->new($r);
my $like = $req->param('like');
#print $like;
my $http_referer = $ENV{'HTTP_REFERER'};

my $dbh = DBI->connect('DBI:mysql:mylike', 'mylike', 'mylike1'
	           ) || die "Could not connect to database: $DBI::errstr";

if ($http_referer) {

 my $cookie = $r->headers_in->get('Cookie');
 my $uri = URI::Encode->new( { encode_reserved => 1 } );
 my $uri_encoded_referer = $uri->encode($http_referer);
 #print $uri_encoded_referer;
 my $wasliked = $cookie ne '' && $cookie =~ /$uri_encoded_referer/;
 if ($like && ! $wasliked ) {
  # increment counter
  my $sthupd = $dbh->prepare('UPDATE mylike SET counter = counter + 1 WHERE approved = 1 and referer = ?');
  $sthupd->execute($http_referer);
  $sthupd->finish();

  my $cookie = CGI::Cookie->new(-name  => 'mylike'.$http_referer,
                                -value => 'SET');
  $r->headers_out->set('Set-Cookie' => $cookie);
  $wasliked = 1;

  # !! TEST ONLY !! temporary turn off cookie-mechanism !! COMMMENT OUT FOLLOWING TWO LINES FOR USE !!
  $r->headers_out->set('Set-Cookie' => '');
  $wasliked = 0;
 }

 #print $cookie;

 my $sth = $dbh->prepare('SELECT id FROM mylike WHERE approved = 1 and referer = ?');
 $sth->execute($http_referer);
 my @result = $sth->fetchrow_array();
 my $len = @result;
 #print "numof result $len\n";
 $sth->finish();

 if ($len == 0) {
  # insert data into the links table
  my $sql = "INSERT INTO mylike (referer) VALUES(?)";

  my $stmt = $dbh->prepare($sql);

  # execute the query
  if($stmt->execute($http_referer)) {
   # ok
   #print "Mylike $http_referer inserted successfully";
  }

  $stmt->finish();
 }

 $sth = $dbh->prepare('SELECT counter FROM mylike WHERE approved = 1 and referer = ?');
 $sth->execute($http_referer);
 @result = $sth->fetchrow_array();

 print "$result[0] like(s)<br>\n";

 print "<input type=\"button\" onclick=\"\$('#mylike').load('http://localhost/perl/mylike-dbi.cgi?like=1');\" value=\"like\" ".($wasliked?'disabled ':'')."/>\n";

 $sth->finish();
 
} else {
 # test

 my $results = $dbh->selectall_hashref('SELECT * FROM mylike', 'id');
 foreach my $id (keys %$results) {
  print "!!TEST!! ID $id: referer is $results->{$id}->{'referer'}, counter is $results->{$id}->{'counter'}\n";
 }

}

$dbh->disconnect();
