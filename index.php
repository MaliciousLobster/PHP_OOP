<?php
	//ex. 1
	class Computer{
		//class body
	}
	class Pencil{
		//class body
	}
	class Phone{
		//class body
	}

	//ex. 2
	$asus = new Computer;
	$dell = new Computer;

	$bic = new Pencil;
	$papermate = new Pencil;

	$apple = new Phone;
	$android = new Phone;

	//ex.3
	class Computer{
		public $brand = "generic";
		public $OS = "windows";
		public $processor = "intel core i5";
	}
	class Pencil{
		public $brand = "generic";
		public $leadType = "0.5mm";
	}
	class Phone{
		public $price = "$400";
		public $OS = "android";
		public $serviceProvider = "verizon";
	}

	//ex. 3
	class thing{
		public $item;
		public function DoThisFor($item){
			//stuff
		}
	class color{
		public $quality;
		public function whatIs($quality){
			//stuff
		}
	}
	class animal{
		public $fur;
		public function DoesItHave($fur){
			//stuff
		}
	}

	//ex. 4
	class Band{
		public $genre;
		public $members;
		public $name;

		public function Info($genre){
			return "{$this->genre}";
		}
	}

	$beatles = new Band();
	$beatles->genre = "rock";
	$beatles->name = "The Beatles";
	$beatles->members = "4";

	echo "This band is a {$beatles->Info()}";

	class Computer{
		public $brand;
		public $OS;
		public $processor;

		public function Specs($OS, $processor){
			return "{$this->OS}" . "with a {$this->processor} processor";
		}
	}

	$schoolcomputer = new Computer();
	$schoolcomputer->brand = "dell";
	$schoolcomputer->OS = "windows";
	$schoolcomputer->processor = "intel core i3";

	echo "This computer has {$schoolcomputer->Specs()}";

	class Phone{}
		public $price;
		public $OS;
		public $brand;

		public function Specs($brand, $price){
			return "{$this->brand}" . "and costs{$this->price}";
		}
	}

	$iphone = new Phone();
	$iphone->price = "$600";
	$iphone->OS = "IOS";
	$iphone->brand = "Apple";

	echo "This phone is made by {$iphone->Specs()}";