<?php
	require_once "CircleFlag.php";
	require_once "RectangleFlag.php";
	require_once "TriangleFlag.php";
	
	$flaggen = array(
		new CircleFlag("Westliche Allianz","Gelb", 4),
		new RectangleFlag("OEstliche Allianz", "Gruen", 2, 2),
		new RectangleFlag("OEstliche Allianz", "Blau", 2, 2),
		new TriangleFlag("Suedliche Streitmacht", "Schwarz", 4, 2),
		new TriangleFlag("Suedliche Streitmacht", "Weisz", 4, 2)
	);
	
	
	
	foreach ($flaggen as $element){
		echo $element . "\n\r";
	}