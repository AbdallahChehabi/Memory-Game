<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_lw', 'root', '');

if(isset($_POST['valide'])) {
	$mail = htmlspecialchars($_POST['mail']);
	$mail2 = htmlspecialchars($_POST['mail2']);
	$pass = sha1($_POST['pass']);
	if(!empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['pass']) ) {
		if ($mail == $mail2) {
			if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				$reqmail = $bdd->prepare("SELECT * FROM players WHERE mail = ?");
				$reqmail->execute(array($mail));
				$mailexist = $reqmail->rowCount();
				if ($mailexist == 0) { 
				$insertplayer = $bdd->prepare("INSERT INTO players(mail, motdepasse) VALUES('$mail', '$pass')");
				$insertplayer->execute(array($mail, $pass));
				$error = "Your account has been created!";
				header('Location: http://localhost/web/CHEHABI/index2.php');
				}
				else {
					$error = "Account exist!";
				}
			}
			else {
				$error = "Your email address is not valid!";
			}
		}
		else {
			$error = "Your email addresses don't match!";
		}
	}
	else {
		$error = "All fields must be completed!";
	}
}

if(isset($_POST['valide-2'])) {
	$mail22 = htmlspecialchars($_POST['mail-2']);
	$pass22 = sha1($_POST['pass-2']);
	if(!empty($_POST['mail-2']) AND !empty($_POST['pass-2']) ) {
			if (filter_var($mail22, FILTER_VALIDATE_EMAIL)) {
				$reqmail22 = $bdd->prepare("SELECT * FROM players WHERE mail = ?");
				$reqmail22->execute(array($mail22));
				$mailexist22 = $reqmail22->rowCount();
				$reqpass22 = $bdd->prepare("SELECT * FROM players WHERE motdepasse = ?");
				$reqpass22->execute(array($pass22));
				$passexist22 = $reqpass22->rowCount();
				if ($mailexist22 == 0) { 
				$error = "You don't have an account!";
				}
				else {
					if ($passexist22 == 0) {
						$error ="Password incorrect!";
					}
					else {
						header('Location: http://localhost/web/CHEHABI/index2.php');
					}
				}
			}
			else {
				$error = "Your email address is not valid!";
			}
	
	}
	else {
		$error = "All fields must be completed!";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Memory Game</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles1.css">
</head>
<body>
	<h1 class="page-title">Memory Game</h1> <hr>
	<div> 
		<a class="exit" href="http://localhost/web/CHEHABI/"> Exit </a>
		<a class="home" href="http://localhost/web/CHEHABI/index1.php"> Home </a>  
	</div>
	<h3 class="ins">Log in for starting a game:</h3> <hr>
	<div>
		<form method="POST">
			<table class="inscription">
				<tr>
					<td class="new-player">New Player:</td>
				</tr>
				<tr>
					<td class="right">
						<label for="mail">Email: </label>
					</td>
					<td>
						<input type="email" placeholder="Your e-mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
					</td>
				</tr>
				<tr>
					<td class="right">
						<label for="mail2">Email confirmation: </label>
					</td>
					<td>
						<input type="email" placeholder="Confirm your e-mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
					</td>
				</tr>
				<tr>
					<td class="right">
						<label for="pass">Password:	</label>
					</td>
					<td>
						<input type="password" placeholder="Your password" id="pass" name="pass" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td class="center">
						<input class="connect" type="submit" name="valide" value="I connect" />
					</td>
				</tr>
			</table>
		</form>
		<form method="POST">
			<table class="inscription2">
				<tr>
					<td class="account-existe">Account existe:</td>
				</tr>
				<tr>
					<td class="right">
						<label for="mail-2">Email: </label>
					</td>
					<td>
						<input type="email" placeholder="Your e-mail" id="mail-2" name="mail-2" value="<?php if(isset($mail22)) { echo $mail22; } ?>" />
					</td>
				</tr>
				<tr>
					<td class="right">
						<label for="pass-2">Password:	</label>
					</td>
					<td>
						<input type="password" placeholder="Your password" id="pass-2" name="pass-2" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td class="center">
						<input class="connect" type="submit" name="valide-2" value="I connect" />
					</td>
				</tr>
			</table>
		</form>
        <div class="error">
		<?php
		if (isset($error)) {
			echo $error;
		}
		?>
        </div>
	</div>
	<hr>
	<div>
		<p class="level">Time for the level of play? --------------------------------------------------------------- 12 Mixed Cards</p>
		<button class="start1" id="start1" onclick="start1 ()" disabled>30 seconds.</button>
		<button class="start2" id="start2" onclick="start2 ()" disabled>50 seconds.</button>
		<button class="start3" id="start3" onclick="start3 ()" disabled>80 seconds.</button>
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
</body>
</html>