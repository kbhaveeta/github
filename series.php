<?php
  echo "<h1>Series</h1>" ;
  $n = 2;
  $result = 0;
  for($i=1; $i<=5; $i++){
  echo $i*$i." ";
}
 while($n<=6){
 $result = $n*($n+1);
 echo $result." ";
 $n++;
}
 
?>