import requests as rq 
import configparser

class cloud ():
    '''
    Classe to querry data froma given Url ant return it as Json
    '''
    def get_url_to_querry(self):
        configParser = configparser.RawConfigParser()   
        configFilePath = r'url.cfg'
        configParser.read(configFilePath)
        return configParser.get('Conference_url', 'conference_data_as_json_url')
    

    def get_presentation_data(self, url):
        return rq.get(url)

    def get_data(self):
        url = self.get_url_to_querry()
        data_from_web = self.get_presentation_data(url)
        return data_from_web.json()    