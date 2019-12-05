
window.addEventListener("load", addListeners);
window.addEventListener("keydown", function(event){
	if(event.which >= 65 && event.which <= 90) {
		keyDown(String.fromCharCode(event.which));
	}
});

var timer;

var score = 0;

var gameRunning = true;

var wordIndex = 0;

var wordBank;

var currString = "";

var wordsURL = 'GetWords.php';

var getWords = new XMLHttpRequest();
getWords.open('GET', wordsURL);
getWords.responseType = 'json';
getWords.send();

getWords.onload = function(){
		wordBank = getWords.response;
		getNewWord();
		
}




var activeWords = [];

function addListeners(){
	document.getElementById("highscores").style.display = "none";
	
	document.getElementById("play").addEventListener("click", function(){
		document.getElementById("grid").style.display = "grid";
		timer = setInterval(timerTick, 1500);
		document.getElementById("play").style.display = "none";
	});
}

function keyDown(key) {
	if(gameRunning) {
		currString += key;
		checkTyping();
	}
}

function timerTick() {	
	document.getElementById("score").innerHTML = "Current score: " + score;
	score++;
	shiftDown();
}

function shiftDown() {
	var i;
	for(i = 0; i < 10; i++) {
		var j;
		var currString;
		var nextString;
		for(j = 0; j < 16; j++) {
			if(j == 0) {
				currString = document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML;
				nextString = document.getElementById("grid" + (j+1).toString().padStart(2, '0') + i.toString()).innerHTML;
				document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML = " ";
			}
			else {
				document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML = currString;
				if(j == 15 && currString != " ") {
					document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).style.background = 'coral';
					endGame();
					break;
				}
				currString = nextString;
				var index = j + 1;
				if (j != 15) {
					nextString = document.getElementById("grid" + index.toString().padStart(2, '0') + i.toString()).innerHTML;
				}
				else {
					nextString = " ";
				}
			}
		}
	}
	var col = Math.floor(Math.random() * 10);
	document.getElementById("grid00" + col.toString()).innerHTML = getNewWord();
}

function getNewWord() {
	if (score % 1 == 0) {
		if (wordIndex >= 100) {
			wordIndex = 0;
		}
		activeWords[wordIndex] = wordBank[wordIndex].Word;
		return wordBank[wordIndex++].Word.toUpperCase();
	}
	else {
		return " ";
	}
}

function checkTyping() {
	var matched = false;
	var i;
	for(i = 0; i < 10; i++) {
		var j;
		for(j = 0; j < 16; j++) {
			var gridString = document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML;
			gridString = gridString.replace("<span>", "");
			gridString = gridString.replace("</span>", "");
			document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML = gridString.toUpperCase();
			if(gridString.substring(0,(currString.length)) == currString.toUpperCase()) {
				matched = true;
				document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML = gridString.replace(currString, "<span>"+currString+"</span>");
				if(gridString.length == currString.length) {
					var index;
					var k;
					for (k = 0; k < activeWords.length; k++) {
						if(activeWords[k] == currString) {
							index = k;
						}
					}
					activeWords.splice(index, 1);
					document.getElementById("grid" + j.toString().padStart(2, '0') + i.toString()).innerHTML = " ";
					matched = false;
				}
			}
		}
	}
	if(!matched) {
		currString = "";
	}
}

function endGame() {
	clearInterval(timer);
	gameRunning = false;
	document.getElementById("highscores").style.display = "block";
	document.getElementById("score").innerHTML = "GAME OVER!<br>Your score: " + score + " seconds!";
	window.location.replace('https://aubsparrow.000webhostapp.com/HighScorePHP.php?score=' + score);
}
