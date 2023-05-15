<?php
    $file = fopen("DEMO.txt", "r");
    if ($file)
       echo "file opened successfully"."</br>";
    else
        echo "file not opened successfully";

        $cont=fread($file, 5);
        echo $cont;
    fclose($file);
?>