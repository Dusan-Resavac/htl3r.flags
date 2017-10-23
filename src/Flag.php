<?php
	namespace Resavac\Flags;

    /**
     * Class Flag
     * @package Resavac\Flags
     * Ist die Überklasse aller Flaggen
     */
	abstract class Flag
	{
		private $name;
		private $farbe;
		
		/**
		 * Flag constructor.
		 * @param string $name Bezeichnung der Flagge
		 * @param string $farbe Farbe der Flagge
		 * @param string $form Form der Flagge
		 */
		public function __construct(string $name,
		                            string $farbe)
		{
			$this->name = $name;
			$this->farbe = $farbe;
		}

        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @return string
         */
        public function getFarbe(): string
        {
            return $this->farbe;
        }
		
		/**
		 * @return string Gibt die Bezeichnung und Farbe aus.
		 */
		public function __toString(): string
		{
			return "Bezeichnung: " . $this->name . " | Farbe: " . $this->farbe;
		}
		
		
	}

