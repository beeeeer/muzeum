<?php
while(true){
        echo PHP_EOL.$i++.PHP_EOL;
    system('/usr/sbin/i2cdetect -y 1');
    sleep(2);
}
?>
