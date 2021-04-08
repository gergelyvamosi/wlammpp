#!/usr/bin/perl

use strict;
use warnings;

print "Content-type: text/html\n\n";

my $a = 0;
&number($a);

sub number {
    my($a) = @_;
    $a++;
    print "number \$a = $a";
}
