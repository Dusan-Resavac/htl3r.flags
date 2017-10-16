<?php
	namespace Resavac\Flags;
	
	interface FlagInterface{
		public function getArea() : float;
		public function __toString() : string;
	}