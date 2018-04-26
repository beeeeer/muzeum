#!/usr/bin/python
import sys
import os
from time import sleep
import subprocess
import commands



fire = commands.getstatusoutput("gpio -g read 12")

print(fire)
if fire[1] == '1':
	os.system('curl http://localhost/index.php/fireprocess')
	print('finished')





