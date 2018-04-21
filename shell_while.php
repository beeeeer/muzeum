<?php
$i =0;
while(true){
print_r($i++);
system('i2cdetect -y 1', $retval);
sleep(3);
//system();



}




?>
