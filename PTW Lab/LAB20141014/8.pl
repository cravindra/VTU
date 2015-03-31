#!/usr/bin/perl
use CGI ':standard';
use DBI;


print header;
print "<html><body><table><tr><th>Name</th><th>Age</th></tr>";

my $n=param('uname');
my $a=param('uage');
my $dbh=DBI->connect('DBI:mysql:test','root') or die "Cant Connect!".DBI->errstr();
my $sth=$dbh->prepare("insert into t1 values ('$n','$a');") or die "Cant Prepare!";
if($sth->execute())
{
	print "Record Inserted!";
}
else
{
	print "\nFailure!\n";
}
$sth->finish();
my $sth=$dbh->prepare("SELECT * FROM t1;");
$sth->execute();
my ($name,$age);

while(($name,$age)=$sth->fetchrow())
{
	print "<tr><td>$name</td><td>$age</td></tr>";
}
$sth->finish();
$dbh->disconnect();

print "</table></body></html>";
exit 0;

