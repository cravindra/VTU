#!/usr/bin/perl
use CGI':standard';
print "Content-type: text/html\n\n";
($sec,$min,$hr)=localtime();
print "<html>";
print "<meta http-equiv=\"refresh\"content=1>";
print "<body><center><h3>Digital Clock</h3>";
print "$hr:$min:$sec";
print "</h1></center></body></html>";
