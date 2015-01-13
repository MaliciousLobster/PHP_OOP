<?php
	class Phone{
		public $brand;
		public $price;
		public $OS;
		public $serviceProvider;
		public $screenType;

		function __construct($brand, $price, $OS, $serviceProvider, $screenType){
			$this->price = $price;
			$this->OS = $OS;
			$this->serviceProvider = $serviceProvider;
			$this->screenType = $screenType;
			$this->brand = $brand;
		}
		public function provider(){
			return "{$this->price} " . "{$this->serviceProvider}";
		}
		public function specs(){
			return "{$this->OS} " . "{$this->screenType}";
		} 
	}
	
	$phone1 = new Phone();
	$phone1->brand = "Samsung";
	$phone1->price = "$400";
	$phone1->OS = "Android";
	$phone1->serviceProvider = "Verizon";
	$phone1->screenType = "LED";

	$phone1->provider();
	$phone1->specs();
