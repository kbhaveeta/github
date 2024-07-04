<?php
 echo"<h2>Sum Of 10 Natural Numbers</h2>";
 $num = 1;
 $sum = 0;

 while($num <=10):
  echo "$num ";
  if($num!=10){
   echo"+";
}
 $sum += $num;
 $equation = $num; 
    if($num!=10){
     $equation ="+";
}
 $num++;
endwhile;
 echo"=$sum";
  
?>
