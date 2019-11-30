import requests as rq 
import os
import configparser
from cloud.querryDataFromWeb import cloud
from cloud.PresentationObject import *
from database_connector.DatabaseCreator import *
from database_connector.file_reader import *


# x = cloud()
# myvar= x.get_data()

# for i in myvar:
#     print (i.print_object_values())

a  = DatabaseCreator ()
#a.getDatabaseCredentials()
#a.testConnection()
#print (a.createDatabase())

myfreader = MySqlFileReader('db_creator.sql')
mycommandstring = myfreader.getCommands()

print (len(mycommandstring))
print(mycommandstring)

#a.getAllDatabases()





