<!DOCTYPE html>
<html lang="en">
<head>
	<title>Memory Game</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles2.css">
</head>
<body>
	<h1 class="page-title">Memory Game</h1> <hr>
	<div>
		<a class="new-game" href="http://localhost/web/CHEHABI/index2.php"> New game </a> 
		<a class="home" href="http://localhost/web/CHEHABI/index1.php"> Home </a> 
		<a class="exit" href="http://localhost/web/CHEHABI/"> Exit </a> 
	</div> <br><br><hr>
	<div>
		<button class="start1" id="start1" onclick="start1 ()">30 seconds.</button>
		<button class="start2" id="start2" onclick="start2 ()">50 seconds.</button>
		<button class="start3" id="start3" onclick="start3 ()">80 seconds.</button>
	</div>
	<div class="game-cont">
		<div class="game-time">
			Time: <span id="time">30 Or 50 Or 80 sec</span>
		</div>
		<div class="game-score">
			Score: <span id="score">00</span>
		</div>
		<div class="game-flips">
			Flips: <span id="flips"> 00 </span>
		</div>
	</div>
	<div class="memory-game">
		<div class="memory-card" data-framework="as">
			<img class="front-face" src="photos/as.png" alt="As"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="as">
			<img class="front-face" src="photos/as.png" alt="As"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="roi">
			<img class="front-face" src="photos/roi.png" alt="Roi"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="roi">
			<img class="front-face" src="photos/roi.png" alt="Roi"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="dame">
			<img class="front-face" src="photos/dame.png" alt="Dame"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="dame">
			<img class="front-face" src="photos/dame.png" alt="Dame"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="valet">
			<img class="front-face" src="photos/valet.png" alt="Valet"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="valet">
			<img class="front-face" src="photos/valet.png" alt="Valet"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="dix">
			<img class="front-face" src="photos/dix.png" alt="Dix"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="dix">
			<img class="front-face" src="photos/dix.png" alt="Dix"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="neuf">
			<img class="front-face" src="photos/neuf.png" alt="Neuf"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>
		<div class="memory-card" data-framework="neuf">
			<img class="front-face" src="photos/neuf.png" alt="Neuf"/>
			<img class="back-face" src="photos/pique.png" alt="Pique"/>
		</div>		
	</div>
	<script src="scripts1.js"></script>
</body>
</html>