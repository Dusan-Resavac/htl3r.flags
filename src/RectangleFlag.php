<?php
	
	namespace Resavac\Flags;

    /**
     * Class RectangleFlag
     * @package Resavac\Flags
     */
	class RectangleFlag extends Flag implements FlagInterface
	{
		
		private $width;
		private $height;

        /**
         * RectangleFlag constructor.
         * @param string $name
         * @param string $farbe
         * @param int $width
         * @param int $height
         */
		public function __construct(string $name,
		                            string $farbe,
									int $width,
									int $height)
		{
			parent::__construct($name, $farbe);
			$this->width = $width;
			$this->height = $height;
		}
		
		/**
		 * @return float
		 */
		public function getArea() : float{
			return $this->width * $this->height;
		}
		
		/**
		 * @return string
		 */
		public function __toString(): string
		{
			return parent::__toString() . " | Form: Rechteck | Flaecheninhalt: " . $this->getArea();
		}


        /**
         * @return string
         */
        public function getForm(): string
        {
            return "Rectangle";
        }
    }