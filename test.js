#!/usr/bin/env node

var http = require('http');
var express = require('express');
var fs = require('fs');
<<<<<<< HEAD
var mysql = require('mysql');
//var path = require('path');
//var sql = require('./sql.js');

var serv = express();

var ipaddress = process.env.OPENSHIFT_NODEJS_IP;
var port = process.env.OPENSHIFT_NODEJS_PORT || 8080;
=======

var serv = express();

//var ipaddress = "52.27.209.129";
var port = 8080;
>>>>>>> f66057ba8d887206aa9ff1795ada314da7902fc4

function handleRequest(request, response){
	response.end('IT worked ' + request.url);
}

var server = http.createServer(handleRequest);

serv.createRoutes = function(){
	serv.routes = {};
	serv.routes['/'] = function(req, res) {
		res.setHeader('Content-Type', 'text/html');
<<<<<<< HEAD
		res.sendfile(__dirname + '/index.html');
	};
	serv.routes['/test'] = function(req, res) {
		res.setHeader('Content-Type', 'text/html');
		res.send('HELLO WORLD');
	};
	serv.routes['/sql'] = function(req, res) {
		res.setHeader();
		doSQL();
		//res.send(doSQL());
=======
		res.sendFile(__dirname + '/public/index.html');
>>>>>>> f66057ba8d887206aa9ff1795ada314da7902fc4
	};
}

serv.createRoutes();
for (var r in serv.routes) {
	serv.get(r, serv.routes[r]);
}

<<<<<<< HEAD
//serv.use(express.static(path.join(__dirname. 'public')));
doSQL = function() {

var mysql = require('mysql');

var connection = mysql.createConnection({
  host     : process.env.OPENSHIFT_MYSQL_DB_HOST,
  user     : 'adminC7II6vu',
  password : 'cbTjpQDKUQ2M',
  port     : process.env.OPENSHIFT_MYSQL_DB_PORT,
  database : 'nodejs'
});

connection.connect(function(err){
  if(err){
    console.log('Error connecting to Db');
    return;
  }
  console.log('COnnection established');
});

var post = {UserName: 'testFromSite', SteamID: 209578198};
var query = connection.query('INSERT INTO Users SET ?', post, function(err,rows){
});

connection.end(function(err){});

}

serv.listen(port, ipaddress, function(){
=======
serv.listen(port, function(){
>>>>>>> f66057ba8d887206aa9ff1795ada314da7902fc4
	console.log("Server listening on: whatever");
});
