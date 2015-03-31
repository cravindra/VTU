#!/usr/bin/perl
use CGI':standard';
print "Content-type: text/html\n\n";
$uname=param("uname");
@arr=("Welcome to perl world","Hello","Good morning", "Good Evening");
$n=int(rand(4));
print $arr[$n],$uname;
