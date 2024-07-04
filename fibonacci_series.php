<?php
  echo"<h1>fibonacci series</h1>";
 $limit=10;
 $num1 = 0;
 $num2 = 1;
 $count = 0;
   do
     {
	echo $num1."&nbsp";
        $tem = $num1 + $num2;
        $num1 = $num2;
        $num2 = $tem;

        $count++;
     }
  while($count <= $limit);
?>