#!/usr/bin/env python
import json, requests
ip = "http://52.27.209.129/"
route = "delete_song.php"
url = ip+route

testString = "{\"title\":\"Ham\",\"artist\":null,\"album\":null,\"votes\":null,\"lobby\":\"funtown\"}"

dat = {'title':'Ham', 'lobby':'funtown'}
print "-"*15+"Testing "+"delete_song.php"+"-"*15
req = requests.get(url, data=json.dumps(dat))
print testString
print req.text
assert req.text == testString
print "^^^-----^^^-- Sould be song object --^^^-----^^^"
