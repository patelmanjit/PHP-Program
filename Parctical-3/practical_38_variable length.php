<?php
    function concat()
    {
        echo func_num_args()." argument passed";
        $arg=func_get_args();
        foreach ($arg as $item)
        $message=$message.$item;
        return $message;
    }
    $message= concat("hello", " I", " am", " Manjit." );
    echo $message."</br>";
?>