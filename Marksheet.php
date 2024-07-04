<?php
 $a = 50;
 
 if($a >= 90){
  $grade = "A+";
} 
 else if($a >= 80){
  $grade = "A";
} 
  else if($a >= 70){
   $grade = "B";
}
   else if($a >= 60){
   $grade = "C";
}
   else if($a >= 50){
   $grade = "D";
}
   else if($a > 40){
   $grade = "E";
}
  else{
   $grade ="FAIL";
}
 echo "Marks:" .$a ; 
 echo "Grade:" .$grade;

 ?>