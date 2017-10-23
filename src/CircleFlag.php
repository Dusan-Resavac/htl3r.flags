<?php
	
	namespace Resavac\Flags;

    /**
     * Class CircleFlag
     * @package Resavac\Flags
     */
	class CircleFlag extends Flag implements FlagInterface
	{
		
		private $radius;

        /**
         * CircleFlag constructor.
         * @param string $name
         * @param string $farbe
         * @param int $radius
         */
		public function __construct(string $name, string $farbe, int $radius)
		{
			parent::__construct($name, $farbe);
			$this->radius = $radius;
		}

        /**
         * @return float
         */
		public function getArea(): float
		{
			return round(pow($this->radius, 2) * pi(), 2);
		}

        /**
         * @return string
         */
		public function __toString(): string
		{
			return parent::__toString() . " | Form: Kreis | Flaecheninhalt: " . $this->getArea();
		}
	}