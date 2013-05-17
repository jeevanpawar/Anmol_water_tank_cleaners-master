<?php
error_reporting(0);

$q_s1=12;

$reminder_interval = 12/$q_s1;
$a = $reminder_interval * 30;

for($i=0; $i<$q_s1; $i++)
{
   $c = $c + $a;
   $NewDate=date('d-m-Y', strtotime("+$c days"));
   
echo"<br>";	
echo $NewDate;
}

echo "<br>";

?>



