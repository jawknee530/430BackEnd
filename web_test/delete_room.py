#!/usr/bin/env python
import json, requests
ip = "http://52.27.209.129/"
route = "delete_room.php"
url = ip+route

testString = "[]"

dat = {'owner':'jon', 'lobby_name':'funtown'}
print "-"*15+"Testing "+"delete_room.php"+"-"*15
req = requests.get(url, data=json.dumps(dat))
print testString
print req.text
assert req.text == testString
print "^^^-----^^^-- Should be emtpy arrays --^^^-----^^^"

