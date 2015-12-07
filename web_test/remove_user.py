#!/usr/bin/env python
import json, requests
ip = "http://52.27.209.129/"
route = "remove_user.php"
url = ip+route

testString = "[]"

dat = {'username':'jon', 'password':'topjam'}
print "-"*15+"Testing "+"remove_user.php"+"-"*15
req = requests.get(url, data=json.dumps(dat))
print testString
print req.text
assert req.text == testString
print "^^^-----^^^-- Should be emtpy arrays --^^^-----^^^"

