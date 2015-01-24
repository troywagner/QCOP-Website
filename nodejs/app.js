var express = require('express');//imports the express module
var app = express();
var routes = require('./routes');

app.set('view engine', 'ejs');//sets default folder to be

app.get('/', routes.index);
app.get('/speakers', routes.speakers);
app.get('/attend', routes.attend);
app.get('/connect', routes.connect);


//404
app.get('*', function(req, res){
	res.send("404: Page not found.");
});


///Server

//set up server
var server = app.listen(3000, function(){
	console.log('Server starting... Listening on port 3000');
});