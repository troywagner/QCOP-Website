var express = require('express');//imports the express module
var app = express();
var routes = require('./routes');

app.set('view engine', 'ejs');//sets default folder to be

app.get('/', routes.index);
app.get('/speakers', routes.speakers);
app.get('/speaker/jeff&kyle', routes.speaker_jk);
app.get('/speaker/jim', routes.speaker_jim);
app.get('/speaker/ene', routes.speaker_ene);
app.get('/speaker/dave', routes.speaker_dave);
app.get('/speaker/andrea', routes.speaker_and);


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