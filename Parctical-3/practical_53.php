<?php
    $handle1= fopen("file1.txt", "r");
    $handle2= fopen("file2.txt", "r");
    $handle3= fopen("file3.txt", "w+");
    while (!FEOF($handle1))
    { 
        $h=fread($handle1,1);
        fwrite($handle3,$h);
    }
    fclose($handle1);
    while (!FEOF($handle2))
    { 
        $h=fread($handle2,1);
        fwrite($handle3,$h);    
    }
    fclose($handle2);
    fclose($handle3);
?>