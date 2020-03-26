#!/usr/bin/perl 

print "Content-type: text/html\n\n"; 
use CGI qw(:standard -debug);


#no undeclared variables
use strict;

#declaring variables
my ($mts, $wks, $dys, $hrs, $min);

$mts = param('Months');
$wks = param('Weeks');
$dys = param('Days');
$hrs = param('Hours');


$min = (((($mts * 4) + $wks) * 7) + $dys) * 1440 + ($hrs * 60);


print "<!DOCTYPE html>\n";
print "<title>How Long Have You Been Job-Hunting?</title>\n";
print "<h1>You Have Been Job-Hunting For</h1>";

print "<table>\n";
printf "<tr><td>Months:</td><td style=text-align:right>%.1f</td></tr>", $mts;
printf "<tr><td>Weeks:</td><td style=text-align:right>%.1f</td></tr>", $wks;
printf "<tr><td>Days:</td><td style=text-align:right>%.1f</td></tr>", $dys;
printf "<tr><td>Hours:</td><td style=text-align:right>%.1f</td></tr>", $hrs;
printf "<tr><td>Minutes:</td><td style=text-align:right>%.0f</td></tr>", $min;
print "</table>";
print "</body>\n";
print "</html>\n";
