import mysql.connector as SQLC
import configparser

class DatabaseCreator ():
    '''
        Class used to create a database for the project.
        Mysql database creator
    ''' 

    #Credentials to acess database
    host=''
    user=''
    password=''
    name = ''


    def __init__ (self):
        print ('Database initialized.')

    def getDatabaseCredentials (self):
        try:
            configParser = configparser.RawConfigParser() 
            configFilePath = r'database.cfg'
            configParser.read(configFilePath)
            self.host = configParser.get('database_config', 'host')
            self.user = configParser.get('database_config', 'user')
            self.password = configParser.get('database_config', 'password')
            #self.name =  configParser.get('database_config', 'name')
            return True
        except:
            print('Get credentials failed - check database.cfg file')
            return False    

    def testConnection (self):
        self.getDatabaseCredentials()
        try: 
            SQLC.connect(
            host=self.host,
            user=self.user,
            passwd=self.password
            )    
            return True
        except:
            print("MySql connection error. Check credentials on database.cfg file")
            return False

    def createDatabase (self):
        if (self.testConnection()):
            database_var = SQLC.connect(
            host=self.host,
            user=self.user,
            passwd=self.password
            ) 
            cursor = database_var.cursor()
            cursor.execute('CREATE DATABASE IF NOT EXISTS lala;')
            return 'batata'

    def getAllDatabases (self):
        database_var = SQLC.connect(
            host=self.host,
            user=self.user,
            passwd=self.password
            ) 
        mycursor = database_var.cursor()
        mycursor.execute('SHOW DATABASES')
        for i in mycursor:
            print(i)