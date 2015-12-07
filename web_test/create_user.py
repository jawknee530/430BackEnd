#!/usr/bin/env python
import json, requests
ip = "http://52.27.209.129/"
route = "create_user.php"
url = ip+route

testString = "{\"username\":\"jon\",\"email\":\"jawknee530@gmail.com\",\"password\":\"topjam\"}"

dat = {'username':'jon', 'email':'jawknee530@gmail.com', 'password':'topjam'}
print "-"*15+"Testing "+"create_user.php"+"-"*15
req = requests.get(url, data=json.dumps(dat))
print testString
print req.text
assert req.text == testString
print "^^^-----^^^-- Should be user object --^^^-----^^^"
