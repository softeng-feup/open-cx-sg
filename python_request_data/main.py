import requests as rq 
import os
import configparser
from cloud.querryDataFromWeb import cloud


x = cloud()

print (x.get_data())
