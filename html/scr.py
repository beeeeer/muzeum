#!/usr/bin/python
import sys
import os
from time import sleep
import threading
from threading import Thread
import subprocess

def checkstate():
	
	while True:
	    # fire = os.system('ls -l')
	    mpg123 = subprocess.check_output(['usr/bin/mpg123  media/gil.mp3'])
	   
	    sleep(0.5)
	    string = str(mpg123)
	    print('test')
	    print(mpg123)
	    print('test')
	    if "finished" in mpg123 :
	    	break
	return ;






checkstate()


# while True:
#     fire = os.system("gpio -g read 23")
#     sleep(0.5)
#     if fire == 0:
        
#     elif fire ==1:

