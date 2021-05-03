var canvas = document.getElementById("ecardcan");
var context = canvas.getContext("2d");

//Variables t ostore mouse x and y positions
var mouseX = 0;
var mouseY = 0;
var startingX = 0;

// An array to store every word
var recentWords = [];

// An array for backspace
var undoList = [];

// A function to save canvas state after every key press
function saveState() {
	undoList.push(canvas.toDataURL());
}

// By default, save the canvas state first
saveState();

// A function tobe called when backspace is pressed
function undo() {
	undoList.push();

	var imgData = undoList[undoList.length - 1];
	var image = new Image();

	//Display old saved state
	image.src = imgData;
	image.onload = function () {
		context.clearRect(0, 0, canvas.width, canvas.height);
		context.drawImage(image, 0, 0, canvas.width, canvas.height, 0, 0, canvas.width, canvas.height);

	}

}

// A function called when mouse clicked on canvas
canvas.addEventListener("click", function (e) {
	// Get clicked position to write text
	mouseX = e.pageX - canvas.offsetLeft;
	mouseY = e.pageY - canvas.offsetTop;
	startingX = mouseX;

	// Restart recent words array
	recentWords = [];

	return	false;
}, false);

// Add keydown event to document
document.addEventListener("keydown", function (e) {
	// set canvas font
	context.font = "16px Arial";

	if (e.keyCode === 8) {
		// Backspace is pressed
		undo();

		// Remove recent word
		var recentWord = recentWords[recentWords.length -1];

		// Move the cursor back
		mouseX -= context.measureText (recentWord).width;
		recentWords.pop();
	} else if (e.keyCode === 13) {
		// Enter key is pressed
		mouseX = startingX;
		mouseY += 20; // The size of font + 4
	} else {

	// Write text to canvas 
	context.fillText(e.key, mouseX, mouseY);

	// Move cursor forward after every key pressed
	mouseX += context.measureText(e.key).width;

	saveState();
	recentWords.push(e.key);
	}

}, false);

function ClearButton() {
	context.clearRect ( 0, 0, canvas.width, canvas.height );
}