#!/usr/bin/env python
import json, requests

#ip of the server and route to be tested
ip = "http://52.27.209.129/"
route = "get_user.php"
url = ip+route

#known good response from server ot compare to
testString = "[{\"username\":\"jon\",\"email\":\"jawknee530@gmail.com\",\"password\":\"topjam\"}]"

#data to be sent to server
dat = {'username':'jon', 'password':'topjam'}
#requests.get puts server response into req
req = requests.get(url, data=json.dumps(dat))

#print output to terminal
print "-"*15+"Testing "+"get_user.php"+"-"*15
print testString
print req.text
#assert will stop the test if failed
assert req.text == testString
print "^^^-----^^^-- Should be user object --^^^-----^^^"

