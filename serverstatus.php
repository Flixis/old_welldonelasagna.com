<?php
$host = '193.33.186.70'; 
$port = 80; 
$waitTimeoutInSeconds = 1; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
   // It worked 
} else {
   // It didn't work 
} 
fclose($fp);
?>