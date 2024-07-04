<?php
 echo"<h2>Factorial Of A Number</h2>";
 $num = 5;
 $factorial = 1;
  for($i = $num; $i >= 1; $i-- ) 
   {
   $factorial = $factorial * $i;
//dweded
   }
 echo"THE FACTORIAL OF A NUMBER $num = $factorial ";
?>