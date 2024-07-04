<?php
 echo"Tables Upto A Given Number";
 echo"<br>";
 $limit = 4;
  for($i=1; $i<=$limit; $i++)
    {
     echo "Table of " .$i. ":";
     echo"<br>";
     for($j=1; $j<=10; $j++)
      {
       echo $i. "*" .$j. "=" .($i*$j). "<br> ";
      }
       echo"<br>";
    }

?>