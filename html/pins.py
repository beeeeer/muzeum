#!/usr/bin/python
import time
import os
import logging

logging.basicConfig(filename='/var/www/html/log/readall.log', level=logging.DEBUG)

while True:
    logging.info("Start : %s" % time.ctime())
    logging.info(os.system('gpio readall'))
    time.sleep(1)
