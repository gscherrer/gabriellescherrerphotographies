# -*- coding: utf-8 -*-
"""
Created on Wed Apr 22 01:14:51 2020

@author: guill
"""


import sys
print sys.argv[1]

f = open("output.txt", "a")
f.write(sys.argv[1])
f.close()

#open and read the file after the appending:
f = open("output.txt", "r")
print(f.read())