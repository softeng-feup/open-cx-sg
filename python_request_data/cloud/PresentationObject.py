


class PresentationObject ():
    '''
    Class implemented to hold infomration about  presentations
    '''
    presentation_title             =''
    presentation_type              =''
    presentation_key               =''
    presentation_url               ='' 
    presentation_affiliationString =''
    presentation_abstract          ='' 
    presentation_speaker           =''

    def __init__ (self, myjson):
        self.presentation_abstract            = myjson['Abstract']
        self.presentation_title               = myjson['Title']
        self.presentation_type                = myjson['Type']
        self.presentation_key                 = myjson['Key']
        self.presentation_utl                 = myjson['URL']
        self.presentation_affiliationString   = myjson['AffiliationsString']
        self.presentation_speaker             = myjson['PersonsString']

    
