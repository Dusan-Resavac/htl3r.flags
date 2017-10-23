<?php

	namespace resavac\tests;

    use Resavac\Flags;

	$flaggen = array(
		new Flags\CircleFlag("Westliche Allianz","Gelb", 4)
	);
	
	
	
	foreach ($flaggen as $element){
		echo $element . "\n\r<br>";
		echo $element->getName() . "\n\r<br><br>";
	}