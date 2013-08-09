var millis = 30000;
var sec, secs, mil, m, sp;
var finish = true;
sec = 30;
secs = 30;
mil = 60;

function playSound(el, soundfile) {
	var embed = document.getElementById("embed");
	if (!embed) {
		var embed = document.createElement("embed");
		embed.id = "embed";
		embed.setAttribute("src", soundfile);
		embed.setAttribute("hidden", "true");
		el.appendChild(embed);
	} else {
		embed.parentNode.removeChild(embed);
	}
	finish = false;
}

function displaytimer() {
	if (secs > 0) {
		secs = Math.floor((millis % 100000) / 1000);
		if (sec < 10) {
			sec = "0" + secs;
		}
		else
			sec = secs;
		mil = (millis / 1000).toFixed(2);
		sp = mil.split(".");
		m = sp[1];
		if (secs < 10) {
			document.getElementById('count').innerHTML = '<div style="color: #FF9900; font-family: Arial; font-size:100px;">' + sec + ':' + m + '</div>';
		} else {
			document.getElementById('count').innerHTML = sec + ':' + m;
		}
	}
	else {
		if (mil > 0) {
			mil = (millis / 1000).toFixed(2);
			sp = mil.split(".");
			m = sp[1];
			document.getElementById('count').innerHTML = '<div style="color: red; font-family: Arial; font-size:100px;">' + sec + ':' + m + '</div>';
		}
		else {
			playSound(document.getElementById('dummy'), 'fail.mp3')
		}
	}
}

setInterval(function() {
	if (finish) {
		millis -= 10;
		displaytimer();
	}
}, 10);