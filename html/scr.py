#!/usr/bin/python
import os.path

my_file = "html/file.file"
if os.path.exists(my_file):
    print(1)
else:
    print(0)