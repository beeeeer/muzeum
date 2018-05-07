import time
import os
import logging

logging.basicConfig(filename='/var/www/html/log/example.log', level=logging.DEBUG)
q = 0

logging.info("Start : %s" % time.ctime())
while (q < 57):
    q += 1
    if (os.system('gpio -g read 16') == 1):
	logging.info(" %s" % time.ctime())
        logging.info("odpalam")
        os.system('php -f curl("http://192.168.0.76/index.php/fireprocess")')
	time.sleep(1)
    else:
        logging.info(" %s" % time.ctime())
	logging.info("nic")
        time.sleep(1)

logging.info("End : %s" % time.ctime())
