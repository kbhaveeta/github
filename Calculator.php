<?php
 $a = 20;
 $b = 0;
   $oper
   ation ="division";
//RYERTSETRWE3W35W
 if( $operation == "addition"){
 $result= $a + $b;
 echo"The sum is " .$result;
}
 else if( $operation == "subtraction"){
 $result= $a - $b;
 echo"The difference is " .$result;
 
}
 else if( $operation == "multiplication"){
 $result= $a * $b;
 echo"The product is " .$result;
 
}
 else if( $operation == "division"){
   if($b!=0){
   $result= $a / $b;
   echo"The division is " .$result;
 }
  else{
  echo"cannot divide by zero!";
}
}
 else{
   echo "invalid";
}

?>