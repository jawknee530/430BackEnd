#!/usr/bin/env python
import json, requests
ip = "http://52.27.209.129/"
route = "add_songs.php"
url = ip+route

testString = "{\"title\":\"Ham\",\"artist\":\"Lil Dicky\",\"album\":\"So Hard\",\"votes\":0,\"lobby\":\"funtown\"}"

dat = {'title':'Ham', 'artist':'Lil Dicky', 'album':'So Hard', 'lobby':'funtown'}

print "-"*15+"Testing "+"add_songs.php"+"-"*15

req = requests.get(url, data=json.dumps(dat))
print testString
print req.text
assert req.text == testString


