var fs = require("fs"),
	util = require('util');

var dir = 'sounds/';
var distantdir = '/home/cokere/DiscordSoundboardbeta2/sounds/';

//For error processing
var errmsg;

//Execute on file added to 
fs.watch(`${dir}`, (eventType, filename) => {
	
	fs.rename(dir+filename, distantdir+filename, (err) => {
		if (err) { 
			 throw err;
		}
		console.log(filename + ' Added to soundbot!');
	});

});
