function jwplayerPlay(id, html5, flash){

	// Html 5
	providerHtml5 = 'video';
	listHtml5 = isYoutube(html5, providerHtml5);

	// Flash
	providerFlash = 'http://players.edgesuite.net/flash/plugins/jw/v3.2/AkamaiAdvancedJWStreamProvider.swf';
	listFlash = isYoutube(flash, providerFlash);

	var setupVar = {
		autostart: true,
		flashplayer: '../script/jw6/jwplayer.flash.swf',
		html5player: '../script/jw6/jwplayer.html5.js',
		height: 355,
		width: 640,
		primary: 'flash',
		skin: '../script/jw6/skins/beelden.xml',
		playlist: listFlash
	};
	
	/***********************************************************************************/
	// VERIFICA SE O NAVEGADOR SUPORTA HTML5
	var version = '0,0,0,0';
	try {
		try {
			var axo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.6');
			try { axo.AllowScriptAccess = 'always'; }
			catch(e) { version = '6,0,0'; }
		} catch(e) {}
		version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version').replace(/D+/g, ',').match(/^,?(.+),?$/)[1];
	} catch(e) {
		try {
			if(navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
				version = (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]).description.replace(/D+/g, ",").match(/^,?(.+),?$/)[1];
			}
		} catch(e) {}
	}
	if(version == '0,0,0,0') {
		// "Your browser has not installed Adobe Flash";
		if(typeof(document.createElement('video').canPlayType) != undefined) {
			// "Your browser includes support for HTML5 video";
			setupVar['playlist'] = listHtml5;
		}
	}
	/***********************************************************************************/

	jwplayer(id).setup(setupVar);

}

function isYoutube(video, provider){
	
	if (video.search("youtube") != -1){

				list = [{
					file : video
				}];

	}else{

				list = [{
					provider: 'video',
					type: "mp4",
					file : video
				}];

	}

	return list;

}