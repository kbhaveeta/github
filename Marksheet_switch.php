<?php
 echo"<h2>Marksheet Using Switch Case</h2>";
 $marks =40 ;
 $grade="";
 switch(true){
  case($marks >= 90 && $marks <= 100):
   $grade= "A+";

   break;
  case($marks >= 80 && $marks <=90 ):
   echo"Your Marks Is" .$marks;
   echo"<br/>";
   $grade= "A";
   echo"Your Grade Is"   .$grade;
   break;
  case($marks >= 70 && $marks <= 80):
   echo"Your Marks Is "   .$marks;
   echo"<br/>";
   $grade= "B";
   echo"Your Grade Is "   .$grade;
   break;
  case($marks >= 60 && $marks <= 70):
   echo"Your Marks Is "   .$marks;
   echo"<br/>";
   $grade= "C";
   echo"Your Grade Is "   .$grade;
   break;
  case($marks >= 50 && $marks <= 60):
   echo"Your Marks Is "   .$marks;
   echo"<br/>";
   $grade= "D";
   echo"Your Grade Is "   .$grade;
   break;
  case($marks > 40 && $marks <= 50):
   echo"Your Marks Is "   .$marks;
   echo"<br/>";
   $grade= "E";
   echo"Your Grade Is "   .$grade;
   break;
  case($marks <= 40 ):
   echo"Your Marks Is "   .$marks;
   echo"<br/>";
   $grade= "F";
   echo"Your Grade is  "  .$grade;
   echo"<br/>";
   echo" Sorry You Are Fail" ;
   break;
}
 
?>