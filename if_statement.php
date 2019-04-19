<!DOCTYPE>

<html>
		<head>
				<title>IF Statement</title>
		</head>
		<body>
<?php
$weather = "snow";
if ($weather == "Sunny") {
echo "Weather is pleasant<br>";
}elseif ($weather == "Rainy") {
		echo "It's raining";

}elseif ($weather == "cloudy") {
		echo "It's cloudy outside <br>";
}else{

		echo "It is quite hard to predict the weather";
}

?><hr>

<?php
$bought_product = false;
if($bought_product) {
	echo "<h1>Thank you</h1>";
echo "<p>Your product will be delivered soon</p>";
}else {
	echo "<h1>Please wait</h1>";
echo "<p>Your payment is being processed</p>";
}

?><hr>

<?php 

		$a = 4;
		$b = 0;
		$c = "Can not be out";
		if($b>0) {
				$c = $a / $b;
		}
		echo $c;
		?>
		</body>
</html>