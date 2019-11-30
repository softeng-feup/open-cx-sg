import requests as rq 
import os
import configparser
from cloud.querryDataFromWeb import cloud
from cloud.PresentationObject import *
from database_connector.DatabaseCreator import *
from database_connector.file_reader import *


myfreader = MySqlFileReader('db_creator.sql')
mycommandstring = myfreader.getCommands()
MydbConnector  = DatabaseCreator ()
#fo#r i in mycommandstring :
#    print (i)
MydbConnector.createDatabase(mycommandstring)
MydbConnector.getAllDatabases()
#a.getAllDatabases()





