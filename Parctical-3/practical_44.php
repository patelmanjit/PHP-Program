<?php
    $a1="COLEGE";
    $a2="college";
    echo strcasecmp($a1,$a2)."<br>";
    //
    $s1 = "HELLO WORLD";
    $s2 = "hello world";
    $s3 = "";
    echo strcmp($s1, $s2)."<br>";
    echo strcmp($s2, $s3)."<br>";
    echo strcmp($s3, $s1)."<br>";
    //
    $v1 = "Hello how are you?";
    $v2 = "how";
    $v3="HOW";
    echo strpos($v1, $v2,0)."</br>" ;
    echo strstr($v1, $v2) ."</br>" ;
    echo stristr($v1, $v3);
?>