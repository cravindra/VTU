#!/usr/bin/perl
use CGI ':standard';
print header;
$cnt="/var/www/html/count.txt";
print "Welcome to the Home Page!","<br/>","<p>Number of Visitors :";
if(open(FILE, "<" .$cnt))
{
	$acc_count=<FILE>;
	close(FILE);
	if(open(DATA, ">" .$cnt))
	{
		$acc_count++;
		print DATA $acc_count;
		close(DATA);
		print $acc_count,"</p>";
	}
	else
	{
		print "<p>Error! Cannot write to file...<p>";
	}
}
else
{
	print "<p>Error! Cannot read from file...<p>";
}

