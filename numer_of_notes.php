<?php
 $amount = 10630;
 $note5000 = 0;
 $note1000 = 0;
 $note500 = 0;
 $note100 = 0;
 $note50 = 0;
 $note20 = 0;
 $note10 = 0;
 if($amount>=5000){
    \\500//400//567
 $note5000 =(int)($amount/5000);
 $amount%=5000;
}
 if($amount>=1000){
 $note1000 =(int)($amount/1000);
 $amount%=1000;
}
 if($amount>=500){
 $note500 =(int)($amount/500);
 $amount%=500;
}
 if($amount>=100){
 $note100 =(int)($amount/100);
 $amount%=100;
}
 if($amount>=50){
 $note50 =(int)($amount/50);
 $amount%=50;
}
if($amount>=20){
 $note20 =(int)($amount/20);
 $amount%=20;
}
if($amount>=10){
 $note10 =(int)($amount/10);
 $amount%=10;
}
 echo"Number of 5000:" .$note5000 ;
 echo"<hr>";
 echo"Number of 1000:" .$note1000 ;
 echo"<hr>";
 echo"Number of 500:" .$note500 ;
 echo"<hr>";
 echo"Number of 100:" .$note100 ;
 echo"<hr>";
 echo"Number of 50:" .$note50 ;
 echo"<hr>";
 echo"Number of 20:" .$note20 ;
 echo"<hr>";
 echo"Number of 10:" .$note10 ;
?>