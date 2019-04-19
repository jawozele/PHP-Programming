<!DOCTYPE>

<html>
		<head>
				<title>More Arrays</title>
		</head>
		<body>


<?php $colour = array("A" => "40", "B" => "Pizza"); ?><br>
<?php echo $colour["B"]; ?><br>
<?php $food = array("Asian" => "Pizza", "Italian" => "Pasta"); ?><br>
<?php echo $food["Asian"]. " is for " . $food["Italian"];?><br>
<pre>
<?php echo print_r($food); ?><br></pre>

		</body>
</html>