<?php
//arrays
$names = ["Issa","Mary","Musa","Mike","Moha","Hope","Oju","Alma","Zack","Nelly"];

$ages = [19,23,16,24,22,18,20,21,25,26];

echo $names[4];
echo "<hr>";
echo $ages[0];

foreach ($names as $jina)
{
  echo "$jina <br>";
}

echo "<hr>";
echo sizeof($names);//count the # of the names
echo "<hr>";
array_push($names , "Bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
echo "<hr>";
rsort($ages);

foreach($ages as $miaka)
{
    echo "$miaka<br>";
}
echo "<hr>";

echo array_sum($ages);

echo "<hr>";
$person =[ "names"=>"Moha Musa", "age"=>25, "color"=>"black"];

echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];
