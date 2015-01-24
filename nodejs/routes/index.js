//routing
exports.index = function(req, res){
	res.render('default', {title:'Home'
	});
}

exports.speakers = function(req, res){
	res.render('speakers', {title:'Speakers'});
}
exports.speaker_jk = function(req, res){
	res.render('speaker', {title:'Jeff & Kyle | Speaker',
		picturePath: ['image1.jpg','image2.jpg'],
		names: 'Jeff & Kyle',
		position: 'Co-founder',
		about:['about1','about2']
	});
}
exports.speaker_jim = function(req, res){
	res.render('speaker', {title:'Jim Leech | Speaker',
		picturePath: ['image1.jpg','image2.jpg'],
		names: 'Jeff & Kyle',
		position: 'Co-founder',
		about:['about1','about2']
	});
}
exports.speaker_ene = function(req, res){
	res.render('speaker', {title:'Ene Underwood | Speaker',
		picturePath: ['image1.jpg','image2.jpg'],
		names: 'Jeff & Kyle',
		position: 'Co-founder',
		about:['about1','about2']
	});
}
exports.speaker_dave = function(req, res){
	res.render('speaker', {title:'Dave Dryden | Speaker',
		picturePath: ['image1.jpg','image2.jpg'],
		names: 'Jeff & Kyle',
		position: 'Co-founder',
		about:['about1','about2']
	});
}
exports.speaker_and = function(req, res){
	res.render('speaker', {title:'Andrea Zeelie-Varga | Speaker',
		picturePath: ['image1.jpg','image2.jpg'],
		names: 'Jeff & Kyle',
		position: 'Co-founder',
		about:['about1','about2']
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
