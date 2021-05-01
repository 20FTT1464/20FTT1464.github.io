var ecardcan = document.getElementById("ecardcan");
var context = ecardcan.getContext("2d");

//Variables t ostore mouse x and y positions
var mouseX = 0;
var mouseY = 0;
var startingX = 0;

// A function called when mouse clicked on canvas
ecardcan.addEventListener("click", function (e) {
	// Get clicked position to write text
	mouseX = e.pageX - ecardcan.offsetLeft;
	mouseY = e.pageY - ecardcan.offsetTop;
	startingX = mousex;

	return	false;
}, false);

// Add keydown event to document
document.addEventListener("keydown", function (e) {
	// set canvas font
	context.font = "16px Arial";

	if (e.keyCode === 13) {
		// Enter key is pressed
	} else {

	// Write text to canvas 
	context.fillText(e.key, mouseX, mouseY);

	// Move cursor forward after every key pressed
	mouseX += cotext.measureText(e.key).width;
	}

}, false);
