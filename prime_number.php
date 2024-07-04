<?php
 echo"<h1>Prime Number Series</h1>";
 $number=20;
 
 for($i=2; $i<=$number; $i++){
  $prime = true;
   for($j=2; $j<($i/2); $j++)
    {
     if($i%2==0){
      $prime = false;
       break;
     }
    }
   if($prime==true){
     echo $i. " ";
    }
  }
// nscdsnefiocmoedjmiodmiod
  //bsxuabnknIKXNOL
?>