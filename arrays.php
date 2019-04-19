<!DOCTYPE>

<html>
		<head>
				<title>Arrays</title>
		<head>
		<body>
<?php

$name = array('Josh', 'Corey', 'Awozele');

echo $name[0];

?><br>

<?php $food = array('Pizza', 10, 15, array("Jamaica", "America", "England"), "Pasta"); ?><br>
<?php echo $food[3][2]?><br>
<?php echo $food[1][2]?><br>
<?php $food[56] = "Mango";?><br>
<?php $food[300] = "Apple";?><br>
<pre>
<?php echo print_r($food); ?><br></pre>


	</body>
</html