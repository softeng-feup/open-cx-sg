import requests as rq 
import json as js
import re as r
a = rq.get("https://2019.programming-conference.org/dataexport/810b23a0-737b-4f74-9170-75d515274859/confero.json")
my_objects = js.loads(a.text)
my_data = my_objects['Items']
f = open("data.txt", "w")

for item in my_data: 
    itemKeys = item.keys()
    stringsToBeReplaced = ['String', 'Title', 'Persons', 'Abstract', 'Type', 'URL']
    replaceWithEmptyString = lambda string : string.replace("String", "").replace("u\'", "").replace('Title', "").replace("Persons", "").replace("Abstract", "").replace("Type","").replace("URL","")
    for key in itemKeys: 
	if isinstance(item[key], list): 
	     f.write(key)
	     for element in item[key]: 
                 f.write(element.encode("utf-8") + ",")
        else: 
             f.write(replaceWithEmptyString(key).encode("utf-8") + ": ")
	     f.write("\n")
             f.write(replaceWithEmptyString(item[key]).encode("utf-8"))
	    

f.close()
