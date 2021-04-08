#!/usr/bin/perl

use strict;
use warnings;

print "Content-type: text/html\n\n";

my $a = 0;
&number();

sub number {
  $a++;
  print "number \$a = $a\n";
}

