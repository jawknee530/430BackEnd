#!/usr/bin/env python
import json, requests
ip = "http://52.27.209.129/"
route = "build_room.php"
url = ip+route

testString = ""

dat = {'owner':'jon', 'lobby_name':'funtown', 'lobby_password':'topjam'}

print "-"*15+"Testing "+"build_room.php"+"-"*15

req = requests.get(url, data=json.dumps(dat))
print testString
print req.text
assert req.text == testString

print "^^^-----^^^-- Should be empty strings --^^^-----^^^"

