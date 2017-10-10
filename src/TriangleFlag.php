<?php

	require_once "Flag.php";
	require_once "FlagInterface.php";
	
	class TriangleFlag extends Flag implements FlagInterface
	{
		
		private $aSide;
		private $height;
		
		public function __construct(string $name,
		                            string $farbe,
		                            int $aSide,
		                            int $height)
		{
			parent::__construct($name, $farbe);
			$this->aSide = $aSide;
			$this->height = $height;
		}
		
		public function getArea(): float
		{
			return 0.5 * $this->aSide * $this->height;
		}
		
		public function __toString(): string
		{
			return parent::__toString() . " | Form: Dreieck | Flaecheninhalt: " . $this->getArea();
		}
	}