<?php
	namespace Resavac\Flags;
	
	interface FlagInterface{
        /**
         * @return float
         */
		public function getArea() : float;

        /**
         * @return string
         */
		public function __toString() : string;

        /**
         * @return string
         */
        public function getForm() : string;
	}