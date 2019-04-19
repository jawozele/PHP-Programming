<!DOCTYPE>

<html>
		<head>
				<title>Inside Job</title>

<?php ?>
<?php
$numbers = array(8, 25, 45, 60, 168, 500, 999);
print_r($numbers);


?> <hr>
<?php

echo current($numbers) ."<br>";
next($numbers);
echo current($numbers). "<br>";
next($numbers);

echo current($numbers). "<br>";
next ($numbers);
next ($numbers);
reset($numbers);
echo current ($numbers). "<br>";


?>
	</body>
</html>
