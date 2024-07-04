<?php
  echo"<h2> Generate Any Number Table Upto Any Number</h2>";
  $table = 5;
  $start = 5;
  $ending = 15;
  
   for($i = $start; $i <=$ending ; $i++){
    $result = $table*$i;
    echo " $table x $i = $result" ;
    echo"<br/>";  
}


?>