<?php
    echo date("l,d-M-Y")."</br>";
    echo date("D,d/M/Y,h:i:s A")."</br>";
    echo date("c")."</br>";
    echo date("r")."</br>";
    //

    echo time()."</br>";
    print_r(getdate());
    //

    var_dump(checkdate(12, 31, 2000));
    echo "</br>";
    if (checkdate(2, 4, 2004))
    echo " valid date";
    else
    echo "not valid date";
    //

    echo mktime(0,0,0,1,1,1970)."</br>";
    echo mktime(0,1,0,1,1,1970)."</br>";
    echo date("M-d-Y", mktime(0, 0, 0,12, 32,2019))."</br>";
    echo date("M-d-Y", mktime(0, 0, 0,13, 1,2019))."</br>";
    echo date("M-d-Y", mktime(0, 0, 0,1, 1,2020))."</br>";
    echo date("M-d-Y", mktime(0, 0, 0,1, 1,20));

?>
