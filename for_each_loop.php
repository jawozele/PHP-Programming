<!DOCTYPE>

<html>

		<head>
				<title>For each loop structure</title>
		</head>
		<body>


	<?php ?>
	<?php

	$number = array(8, 60, 168, 995, 45, 25, 5, 100);
	foreach ($number as $num) {
		echo "There are numbers in a loop: {$num} <br>";
	}


	?><hr>
<?php
$food = array(
			"item_number" => 1050,
			"Name" => "Pizza",
			"Region" => "Italy",
			"Sides" => "Cake and Custard",
			"Drink" => "Pepsi",
			"Package_Price" => "tba"

);

foreach($food as $key => $value) {
		$data = ucwords(str_replace("_", " ", $key ));
		
if($key == "Package_Price") {
		if(is_numeric($value)) {
			}else
			{
		$value =  "Unknown";
			}




}
		echo "{$data} : {$value} <br>";

}

?>

<hr>

</body>
</html>



