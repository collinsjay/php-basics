<?php
//functions
$number = 25;
$root = sqrt($number);
echo $root;
echo"<br>";
echo sqrt(1000);
echo "<br>";
echo pow(2, 5);//arguments
echo "<br>";
echo max(34, 567, 57, 67, 4577, 655 );
echo "<br>";
echo min(34, 65, 465, 65, 89, 3576, 56);

$x = 63.74849;
echo "<hr>";
echo round($x);
echo"<hr>";
echo round($x, 3);
echo "<hr>";
echo floor($x);
echo "<hr>";
echo ceil($x);

$sentence="The quick brown fox jumped over the lazy dog";
echo"<hr>";
echo strtoupper($sentence);
echo"<hr>";
echo strtolower($sentence);
echo"<hr>";
echo ucwords($sentence);
echo"<hr>";
echo str_word_count($sentence);
echo"<hr>";
echo strlen($sentence);//number of letters
echo"<hr>";

$password= "p@55w0rd";
echo"<hr>";
echo md5($password);

echo"<hr>";
echo sha1($password);
//
echo"<hr>";
echo crypt($password, "sdfghjkl;lkjhytretyuifghjkg");

//date
//files
//db
//email