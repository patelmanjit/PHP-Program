<?php
$num = 1121;
$x = 0;
$n = $num;
while (floor($num))
{
    $temp = $num%10;
    $x = $x*10 + $temp;
    $num = $num/10;
}
if($n == $x)
{
    echo "$n is a palindrome number";
}
else
{
    echo "$n is not a palindrome number";
}
?>