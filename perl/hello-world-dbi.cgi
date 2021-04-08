#!/usr/bin/perl

use strict;
use warnings;
use DBI;
use Apache2::RequestRec ();
use Apache2::RequestUtil ();


my $r = Apache2::RequestUtil->request;

#my %headers_in = $r->headers_in;

print "The referer in your HTTP-Header is: ", $ENV{'HTTP_REFERER'}, "\n";
#for (sort keys %ENV){ $r->print("$_ => $ENV{$_}\n"); }

my $dbh = DBI->connect('DBI:mysql:mylike', 'mylike', 'mylike1'
	           ) || die "Could not connect to database: $DBI::errstr";

print "<br>\n";

my $results = $dbh->selectall_hashref('SELECT * FROM mylike', 'id');
foreach my $id (keys %$results) {
  print "Value of ID $id is $results->{$id}->{'referer'}\n";
}

$dbh->disconnect();

