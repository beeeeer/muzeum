<?php


while(true)
{
	sleep(2);
	echo '16=> ';
	system('gpio -g read 16');
	sleep(0.4);
	echo '20=> ';
	system('gpio -g read 20');
	sleep(0.4);
	echo '21 => ';
        system('gpio -g read 21');
}


?>