window.onload = function() {

    var videoContainer = document.getElementById('videoContainer');
    var video = document.getElementById('video');
    var videoControls = document.getElementById('video-controls');

	

	// // Video
	// var video = document.getElementById("video");

	// Hide the default controls
    video.controls = false;

    // Display the user defined video controls
    videoControls.style.display = 'block';
	
	// Buttons
	var playButton = document.getElementById("play-pause");
	var muteButton = document.getElementById("mute");
	// var fullScreenButton = document.getElementById("full-screen");

	// Sliders
	var seekBar = document.getElementById("progressBar");
	// var volumeBar = document.getElementById("volume-bar");


	//Iniciar reproducción al hacer clic sobre el elemento 

	video.addEventListener("click", function() {
		if (video.paused == true) {
			// Play the video
			video.play();
			playButton.classList.remove("play");
			playButton.classList.add("pause");
		} else {
			// Pause the video
			video.pause();
			playButton.classList.remove( "pause" );
			playButton.classList.add( "play" );
		}
	});

	// Prevent scrolling when touching the canvas
	video.addEventListener("touchstart", function (e) {
		if (video.paused == true) {
			// Play the video
			video.play();
			playButton.classList.remove("play");
			playButton.classList.add("pause");
		} else {
			// Pause the video
			video.pause();
			playButton.classList.remove( "pause" );
			playButton.classList.add( "play" );
		}
	}, false);
	video.addEventListener("touchend", function (e) {
		if (video.paused == true) {
			// Play the video
			video.play();
			playButton.classList.remove("play");
			playButton.classList.add("pause");
		} else {
			// Pause the video
			video.pause();
			playButton.classList.remove( "pause" );
			playButton.classList.add( "play" );
		}
	}, false);

	// Event listener for the play/pause button
	playButton.addEventListener("click", function() {
		if (video.paused == true) {
			// Play the video
			video.play();

			// Update the button text to 'Pause'
			// playButton.innerHTML = "D";
			playButton.classList.remove("play");
			playButton.classList.add("pause");
		} else {
			// Pause the video
			video.pause();

			// Update the button text to 'Play'
			// playButton.innerHTML = "||";
			playButton.classList.remove( "pause" );
			playButton.classList.add( "play" );
		}
	});


	// Event listener for the mute button
	muteButton.addEventListener("click", function() {
		if (video.muted == false) {
			// Mute the video
			video.muted = true;

			// Update the button text
			// muteButton.innerHTML = "U";
			muteButton.classList.remove("sound");
			muteButton.classList.add( "mute" );

		} else {
			// Unmute the video
			video.muted = false;

			// Update the button text
			// muteButton.innerHTML = "M";
			muteButton.classList.remove( "mute" );
			muteButton.classList.add( "sound" );
		}
	});


	// Event listener for the full-screen button
	// fullScreenButton.addEventListener("click", function() {
	// 	if (video.requestFullscreen) {
	// 		video.requestFullscreen();
	// 	} else if (video.mozRequestFullScreen) {
	// 		video.mozRequestFullScreen(); // Firefox
	// 	} else if (video.webkitRequestFullscreen) {
	// 		video.webkitRequestFullscreen(); // Chrome and Safari
	// 	}
	// });


	// Event listener for the seek bar
	seekBar.addEventListener("change", function() {
		// Calculate the new time
		var time = video.duration * (seekBar.value / 100);

		// Update the video time
		video.currentTime = time;
	});

	
	// Update the seek bar as the video plays
	video.addEventListener("timeupdate", function() {
		// Calculate the slider value
		var value = (100 / video.duration) * video.currentTime;

		// Update the slider value
		seekBar.value = value;
	});

	// Pause the video when the seek handle is being dragged
	seekBar.addEventListener("mousedown", function() {
		video.pause();
		playButton.classList.remove("pause");
		playButton.classList.add("play");
	});

	// Play the video when the seek handle is dropped
	seekBar.addEventListener("mouseup", function() {
		video.play();
		playButton.classList.remove("play");
		playButton.classList.add("pause");
	});

	// // Event listener for the volume bar
	// volumeBar.addEventListener("change", function() {
	// 	// Update the video volume
	// 	video.volume = volumeBar.value;
	// });
}