<!DOCTYPE html>
<html>
<head>
	<title> Roll Dice </title>
</head>
<body>
	<h1> You rolled a : <?= $randomNumber; ?>!</h1>
	<h1> Your guess is : <?= $guess; ?>!</h1>

<?
	if ($randomNumber == $guess) {
		echo 'You got it right! =] ';
	} else {
		echo 'You guess wrong! =[';
	};
?>