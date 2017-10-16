<?php
	
	namespace Resavac\Flags;
	
	
	class CircleFlag extends Flag implements FlagInterface
	{
		
		private $radius;
		
		public function __construct(string $name, string $farbe, int $radius)
		{
			parent::__construct($name, $farbe);
			$this->radius = $radius;
		}
		
		public function getArea(): float
		{
			return round(pow($this->radius, 2) * pi(), 2);
		}
		
		public function __toString(): string
		{
			return parent::__toString() . " | Form: Kreis | Flaecheninhalt: " . $this->getArea();
		}
	}