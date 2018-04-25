#!/usr/bin/python
import sys
import os
from time import sleep

while True:
    fire = os.system("gpio -g read 12")
    sleep(0.5)
    os.system("gpio readall")
