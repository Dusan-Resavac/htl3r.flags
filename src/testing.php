<?php
	namespace resavac\flags\tests;
	
	use Resavac\Flags;
	
	$flaggen = array(
		new \Resavac\Flags\CircleFlag("Westliche Allianz","Gelb", 4),
		new \Resavac\Flags\RectangleFlag("OEstliche Allianz", "Gruen", 2, 2),
		new \Resavac\Flags\RectangleFlag("OEstliche Allianz", "Blau", 2, 2),
		new \Resavac\Flags\TriangleFlag("Suedliche Streitmacht", "Schwarz", 4, 2),
		new \Resavac\Flags\TriangleFlag("Suedliche Streitmacht", "Weisz", 4, 2)
	);
	
	
	
	foreach ($flaggen as $element){
		echo $element . "\n\r";
	}