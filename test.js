#!/usr/bin/env node

var http = require('http');
var express = require('express');
var fs = require('fs');

var serv = express();

//var ipaddress = "52.27.209.129";
var port = 8080;

function handleRequest(request, response){
	response.end('IT worked ' + request.url);
}

var server = http.createServer(handleRequest);

serv.createRoutes = function(){
	serv.routes = {};
	serv.routes['/'] = function(req, res) {
		res.setHeader('Content-Type', 'text/html');
		res.sendFile(__dirname + '/public/index.html');
	};
}

serv.createRoutes();
for (var r in serv.routes) {
	serv.get(r, serv.routes[r]);
}

serv.listen(port, function(){
	console.log("Server listening on: whatever");
});
