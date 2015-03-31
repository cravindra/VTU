#!/usr/bin/perl
use CGI':standard';
print "Content-type: text/html\n\n";
print "<html><body><table border=1>";
foreach $key(keys % ENV) {
$val=$ENV{$key};
print "<tr><td>$key</td><td>$val</td></tr>";
}
print "</table></body></html>";
