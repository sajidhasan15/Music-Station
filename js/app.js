$(document).ready(function(){

	var isPlaying = false;
	var songTime = 0;
	var song = document.createElement('audio');
	song.setAttribute('src','music/BABA KOTODIN DEKHINA .mp3');
	$.get();

	$('#play').click(function(){
		song.play();
		isPlaying = true;
		console.log("Playing....");
	});

	$('#stop').click(function(){
		song.pause();
		isPlaying = false;
		console.log("paused");
	});

	//let's count time
	setInterval(function(){
		if (isPlaying == true) {
			songTime++;
			$('#time').text("Play Time" + songTime);
		}
	}, 1000);
});