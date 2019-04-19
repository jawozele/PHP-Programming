<!DOCTYPE>

<html>
		<head>
				<title>Arrays Functions</title>
		</head>
		<body>
<?php ?><br>



<?php
$color = array("red", "green", "blue");
array_pop($color);
array_push($color, "black", "white", "pink");
print_r($color);




?><br>

<?php $numbers = array(13, 54, 6, 89, 100, 15, 12, 789, 1000); ?><br>
<?php echo count($numbers); ?><br>
Max:<?php echo max($numbers);?><br>
Min:<?php echo min($numbers);?><br>
Yes / No:<?php echo in_array(89, $numbers);?><br>
<?php echo sort($numbers);?><br>
<?php print_r($numbers);?><br>
Implode: 
$quote = array("Never", "Give", "Up", "In", "Life");
?><br>
<?php echo implode(" ",$quote);?><br>




	</body>
</html>

