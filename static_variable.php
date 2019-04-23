<!DOCTYPE>

<html>

		<head>
				<title>Static Variable</title>
		</head>
		<body>

<?php


function StaticV() {
	static $value = 1;
	echo $value."<br";
	$value++;
}

StaticV();
StaticV();
StaticV();
