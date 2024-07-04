<?php
  echo"<h2>Calculator Using Switch Case</h2>";
  $number1 = 30;
  $number2 = 3;
  $operation= "Division";
//$operation= "Addition";
//$operation= "Subtraction";
//$operation= "Multiplication";
  switch($operation)
  {
     case "Addition":
      $result =$number1+$number2;
      echo "<p>Addition:</p>";
      echo "<br />";
      break;
     case "Subtraction":
      $result =$number1-$number2;
      echo "<p>Subtraction:</p>";
      echo "<br />";
      break;
     case "Multiplication":
      $result =$number1*$number2;
      echo "<p>Multiplication:</p>";
      echo "<br />";
      break;
     case "Division":
      $result =$number1/$number2;
      echo "<p>Division:</p>";
      echo "<br />";
      break;
     defult:
      $result ="Invalid operation";
}
   echo"The Result Is :" .$result;
?>