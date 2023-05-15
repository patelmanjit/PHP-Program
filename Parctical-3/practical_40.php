<?php
$a = "1234.56789";
echo floatval($a) . "<br>";
$b = "1234.56789Hello";
echo floatval($b) . "<br>";
//floatval

$x = 32;
echo intval($x) . "<br>";
$y = 3.2;
echo intval($y) . "<br>";
//intval

$n=1234;
$n=strval($n);
echo $n."<br>";
echo gettype($n);
//strval

?>