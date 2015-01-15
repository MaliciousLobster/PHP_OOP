<?php
//-----------------------------------LECTURE 2------------------------------------------
	//ex.1
	class Computer{
		public $brand;
		public $OS;
		public $processor;

		function __construct($brand, $OS, $processor){
			$this->brand = $brand;
			$this->OS = $OS;
			$this->processor = $processor;
		}
		function Specs(){
			return $this->brand . "made this computer and it has an " . $this->processor . " processor";
		}
	}

	$computer1 = new Computer("Toshiba", "Windows 7", "i5");
	print $computer1->Specs();

	echo "<br>";


	class Pencil{
		public $brand;
		public $leadType;

		function __construct($brand, $leadType){
			$this->brand = $brand;
			$this->leadType = $leadType;
		}
		function WhatPencil(){
			return $this->brand . "made this pencil and it takes" . $this->leadType . "mm type lead";
		}
	}
	$pencil1 = new Pencil("papermate", 0.7);
	print $pencil1->WhatPencil();

	echo "<br>";

	class Phone{
		public $price;
		public $OS;
		public $serviceProvider;

		function __construct($price, $OS, $serviceProvider){
			$this->price = $price;
			$this->OS = $OS;
			$this->serviceProvider = $serviceProvider;
		}
		function phone(){
			return "This phone costs " . $this->price . " dollars and " . $this->serviceProvider . " provides service";
		}
	}
	$phone1 = new Phone(400, "android", "verizon");
	print $phone1->phone();
	
	


//-----------------------------------LECTURE 1------------------------------------------
	// //ex. 1
	// class Computer{
	// 	//class body
	// }
	// class Pencil{
	// 	//class body
	// }
	// class Phone{
	// 	//class body
	// }

	// //ex. 2
	// $asus = new Computer;
	// $dell = new Computer;

	// $bic = new Pencil;
	// $papermate = new Pencil;

	// $apple = new Phone;
	// $android = new Phone;

	// //ex.3
	// class Computer{
	// 	public $brand = "generic";
	// 	public $OS = "windows";
	// 	public $processor = "intel core i5";
	// }
	// class Pencil{
	// 	public $brand = "generic";
	// 	public $leadType = "0.5mm";
	// }
	// class Phone{
	// 	public $price = "$400";
	// 	public $OS = "android";
	// 	public $serviceProvider = "verizon";
	// }

	// //ex. 3
	// class thing{
	// 	public $item;
	// 	public function DoThisFor($item){
	// 		//stuff
	// 	}
	// }
	// class color{
	// 	public $quality;
	// 	public function whatIs($quality){
	// 		//stuff
	// 	}
	// }
	// class animal{
	// 	public $fur;
	// 	public function DoesItHave($fur){
	// 		//stuff
	// 	}
	// }

	// //ex. 4
	// class Band{
	// 	public $genre;
	// 	public $members;
	// 	public $name;

	// 	public function Info($genre){
	// 		return "{$this->genre}";
	// 	}
	// }

	// $beatles = new Band();
	// $beatles->genre = "rock";
	// $beatles->name = "The Beatles";
	// $beatles->members = "4";

	// echo "This band is a {$beatles->Info()}";

	// class Computer{
	// 	public $brand;
	// 	public $OS;
	// 	public $processor;

	// 	public function Specs($OS, $processor){
	// 		return "{$this->OS}" . "with a {$this->processor} processor";
	// 	}
	// }

	// $schoolcomputer = new Computer();
	// $schoolcomputer->brand = "dell";
	// $schoolcomputer->OS = "windows";
	// $schoolcomputer->processor = "intel core i3";

	// echo "This computer has {$schoolcomputer->Specs()}";

	// class Phone{
	// 	public $price;
	// 	public $OS;
	// 	public $brand;

	// 	public function Specs($brand, $price){
	// 		return "{$this->brand}" . "and costs{$this->price}";
	// 	}
	// }

	// $iphone = new Phone();
	// $iphone->price = "$600";
	// $iphone->OS = "IOS";
	// $iphone->brand = "Apple";

	// echo "This phone is made by {$iphone->Specs()}";