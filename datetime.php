<?php
date_default_timezone_set("Africa/Nairobi");
print date("y.m.d")."<br>";
print date("l")."<br>";

echo date("H-h-i-s");

print "<br>";
$timestamp = mktime(17,56,34,8,23,2014);
echo date("Y-m-d H:i:s", $timestamp);

print "<br>";
$tomorrow = strtotime("tomorrow");//you can pass next saturday, +3 months.. and php will just go ahead and translate your code.
echo date("y-m-d",$tomorrow);
?>