<?php

	class Contact {

		private $name;
		private $number;

		function	__construct($name, $number)
		{
			$this->name = $name;
			$this->number = $number;
		}

		function	setName($userName) { $this->name = $name; }
		function	setNumber($userNumber) { $this->number = $number; }

		function	getName() { return $this->name; }
		function	getNumber() { return $this->number; }

	}

?>