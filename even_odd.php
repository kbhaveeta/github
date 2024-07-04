<?php
  echo "<h2>Even & Odd Numbers </h2>";
  
  for($a = 1; $a <= 100; $a++)
   {
     //echo $a. "<hr/>";
     if ($a % 2 == 0)
     {
       echo $a."_even";
       echo "<hr/>";
     }
      else{
        //echo ",";
        echo $a."_odd " ;
  }
}
 
?>