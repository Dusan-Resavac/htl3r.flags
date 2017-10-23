<?php
	
	namespace Resavac\Flags;

    /**
     * Class TriangleFlag
     * @package Resavac\Flags
     */
	class TriangleFlag extends Flag implements FlagInterface
	{
		
		private $aSide;
		private $height;

        /**
         * TriangleFlag constructor.
         * @param string $name
         * @param string $farbe
         * @param int $aSide
         * @param int $height
         */
		public function __construct(string $name,
		                            string $farbe,
		                            int $aSide,
		                            int $height)
		{
			parent::__construct($name, $farbe);
			$this->aSide = $aSide;
			$this->height = $height;
		}

        /**
         * @return float
         */
		public function getArea(): float
		{
			return 0.5 * $this->aSide * $this->height;
		}

        /**
         * @return string
         */
        public function __toString(): string
		{
			return parent::__toString() . " | Form: Dreieck | Flaecheninhalt: " . $this->getArea();
		}
	}