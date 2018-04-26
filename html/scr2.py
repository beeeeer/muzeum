#!/usr/bin/python
import sys
import os
from time import sleep
import threading
from threading import Thread
import subprocess

def checkstate():
	
	while True:
		mpg123 = subprocess.check_output(['mpg123', '/var/www/html/media/pozarlasu.mp3'])
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x9f');
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x8f');
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x87');
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x83');
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x87');
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x87');
		sleep(7)
		os.system('/usr/sbin/i2cset -y 1 0x20 0x01 0x81');
		break
		
	return ;

def checkGpio()

while True:
    fire = os.system("gpio -g read 12")
    sleep(0.5)
    if fire == 0:
    	break;
    elif fire ==1:


thread = Thread(target=checkGpio.start)
while not thread.is_alive():
   pass



# while True:
#     fire = os.system("gpio -g read 12")
#     sleep(0.5)
#     if fire == 0:
#     elif fire ==1:

