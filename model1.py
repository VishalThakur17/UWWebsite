from pynamodb.models import Model

from pynamodb.attributes import UnicodeAttribute



class HelloWorldDatabase(Model):

    class Meta:

        table_name = "HelloWorldDatabase"

        region='us-east-1'

    ID = UnicodeAttribute(hash_key=True)
    
    