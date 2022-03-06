<?php
 
$time1=time();
$t=$time1; 
$random= rand(0,999999999);
$a= $t+$random;
printf(" Random number =%d",$a);
echo "<br>";
$un= uniqid();
$conct = $a.$un;
//its also refer a unique id
printf("Random number =%d<br>",$conct);
$ud = md5($conct.$un);
echo "But its more accurate=";
echo $ud;
 
?>
