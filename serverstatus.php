<?php
print("this page functions");
echo"<br>";
echo"<br>";

$host = '172.217.168.206'; 
$port = 80; 
$waitTimeoutInSeconds = 1;
if(isset($_POST['servercheck'])){
   if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
      // It worked
      print("it worked");
   } else {
      // It didn't work 
      print("it didn't work");
   } 
}
fclose($fp);

?>