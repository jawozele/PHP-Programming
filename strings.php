<!DOCTYPE>
<html>
		<head>
				<title>Strings</title>
		</head>
		<body>



<?php
$phrase1 = "Student who turn up late ";
$phrase2 = "in class will be required to sit behind the class";
$combine = $phrase1;
$combine .= $phrase2;
echo "This is a message: $combine <br>";
?> <hr>
Uppercase first: <?php echo ucfirst($combine); ?><br>
Uppercase words: <?php echo ucwords($combine); ?><br>
Lowercase: <?php echo strtolower($combine); ?><br>
Uppercase: <?php echo strtoupper($combine); ?><br>
<hr>
		Repeat: <?php echo str_repeat($combine, 3); ?><br>
	    Make substring from one point to another: <?php echo substr($combine, 5, 10); ?><br>
	    Find position of any specific word: <?php echo strpos($combine, "come"); ?><br>
	    Find character: <?php echo strchr($combine, "R"); ?><br>
     
    	<hr>

    		Total Length of String: <?php echo strlen($combine); ?><br>
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br>
    Find specific and show after: <?php echo strstr($combine, "come"); ?><br>
    Replace word with new: <?php echo str_replace("sit", "stand", $combine); ?><br>
    <br> <hr>



    	 
<?php 


// echo "My name is Josh Awozele"; echo "<br>";
// echo "I am 29 years old"; echo "<br>";

// $favourite_Colour = "blue"; echo "<br>";
// $favourite_Brand = "ralph lauren"; echo "<br>";
// $favourite_Item = $favourite_Colour. " " .$favourite_Brand;
// echo $favourite_Item; echo "<br>";
// echo $favourite_Brand;


?>
    </body>
</html>