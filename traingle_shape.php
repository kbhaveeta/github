<?php
  echo"<h2> Star Triangular Shape </h2>";
   for($i=1; $i<=5; $i++)
    {
     for($j=1; $j<=$i; $j++)
      {
        echo"*";
      }
     echo"<br>";
    }
   echo"<hr>";
   
  echo"<h2> Alphabate Triangular Shape</h2>";
   for($i="a"; $i<="e"; $i++)
    {
     for($j="a"; $j<=$i; $j++)
      {
         echo"$j";
      }
     echo"<br>";
    }
   echo"<hr>";

   echo"<h2> Number Triangular Shape</h2>";
    for($i=1; $i<=5; $i++)
     {
      for($j=1; $j<=$i; $j++)
       {
        echo"$j";
       }
      echo"<br>";
     }
    echo"<hr>";

  echo"<h2> Numeric Triangular Shape And Its Multiplication</h2>";
  $output = "";
   $triangular = 0;

   $result = 1;
    for ($i = 1; $i <= 5; $i++) {
     $result *= $i;

     $triangular = $triangular * 10 + $i;
     $output .= $triangular . " = " . $result . "<br>";
 }

  echo $output;





?>