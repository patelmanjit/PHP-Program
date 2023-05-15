<?php
$a = "32"; 
settype($a, "integer");
echo var_dump($a)."<br>";
//
$b = "Hello";
echo gettype($b) . "<br>";
//
$x = 0;
if (isset($x))
{
  echo "Variable 'x' is set.<br>";
}
$y = null;
if (isset($y)) 
{
  echo "Variable 'y' is set.";
}
//
$n=1234;
unset($n);
if (isset($n))
echo "variable has been set";
else
echo "variable has not been set";

?>