//routing
exports.index = function(req, res){
	res.render('default', {title:'Home',
		users: ['Keith','John','Bob']
	});
}
exports.speakers = function(req, res){
	res.render('default', {title:'Speakers',
		users: ['Keith','John','Bob']
	});
}
exports.attend = function(req, res){
	res.render('default', {title:'Attend',
		users: ['Keith','John','Bob']
	});
}
exports.connect = function(req, res){
	res.render('default', {title:'Connect',
		users: ['Keith','John','Bob']
	});
}

