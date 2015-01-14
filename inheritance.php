<?php
	//-----------------------------------LECTURE 4------------------------------------------------
	//ex.1
	class videoGame{
		public $developer;
		public $genre;
		public $platform;
		public $engine;
		public $budget;

		function __construct($developer, $genre, $platform, $engine, $budget) {
			$this->developer = $developer;
			$this->genre = $genre;
			$this->platform = $platform;
			$this->engine = $engine;
			$this->budget = $budget;
		}

		function getInfo(){
			return $this->developer . " made this game for " . $this->platform . ".";
		}
	}

	class engine extends videoGame {
		function moreInfo(){
			return "I run on the " . $this->engine;
		}
	}
	class cost extends videoGame {
		function funds(){
			return "We had a budget of " . $this->budget . " dollars";
		}
	}


	$Spelunky = new videoGame("Derek Yu", "platformer", "xbox, playstation, and PC", "game maker", 1000);
	print  $Spelunky->getInfo();

	echo "<br>";

	class Clothes{
		public $material;
		public $brand;
		public $sold;
		public $cost;
		public $type;
		public $pants;
		public $shirts;

		function __construct($material, $brand, $sold, $cost, $type, $pants, $shirts){
			$this->material = $material;
			$this->brand = $brand;
			$this->sold = $sold;
			$this->cost = $cost;
			$this->type = $type;
			$this->pants = $pants;
			$this->shirts = $shirts;
		}
		function wear(){
			return "I am made with " . $this->material . " and I am made by " . $this->brand;
		}

	}
	class Pants extends Clothes{
		function article(){
			return "I am a pair of " . $this->pants; 
		}
	}
	class Shirts extends Clothes{
		function blegh(){
			return "I am a " . $this->shirts . " shirt.";
		}
	}

	$shirt = new Shirts("cotton", "diamond", "macy's", 15, "top", false, "long sleeve");
	print $shirt->blegh();

	echo "<br>";

	class Gum{
		public $brand;
		public $flavor;
		public $numPack;
		public $color;
		public $caseSize;

		function __construct($brand, $flavor, $numPack, $color, $caseSize){
			$this->brand = $brand;
			$this->flavor = $flavor;
			$this->numPack = $numPack;
			$this->color = $color;
			$this->caseSize = $caseSize;
		}
		function Taste(){
			return "I taste like " . $this->flavor . " and come in a pack of " . $this->numPack;
		}
	}
	class Candy extends Gum{
		function madeBy(){
			return "I am made by " . $this->brand;
		}
	}
	class Sweet extends Gum{
		function Color(){	
			return "I am " . $this->color;
		}
	}

	$gum1 = new Candy("trident", "cinnamon", 18, "salmon red", 12);
	print $gum1->madeBy();