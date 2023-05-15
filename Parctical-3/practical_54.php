<?php
  
$fptr = fopen("myfile.txt", "a");

fwrite($fptr, ' this is additional text ');

fwrite($fptr, 'appending data data data data ');
  
fclose($fptr);

echo "File appended successfully"; 

?>
