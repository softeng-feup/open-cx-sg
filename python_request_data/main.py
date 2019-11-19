import requests as rq 
import os
import configparser
from cloud.querryDataFromWeb import cloud
from cloud.PresentationObject import *


x = cloud()

myvar= x.get_data()

for i in myvar:
    print (i.print_object_values())


