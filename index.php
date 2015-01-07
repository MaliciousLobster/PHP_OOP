<?php
	class Classroom{
		public $teacher;
		public $room;
		public $subject;

		function WhatClassroom(){
			echo "{$this->teacher}" .
			"{$this->room}" .
			"{$this->subject}";
		}
	}

	$APP = new Classroom();
	$APP->teacher = "Dan";
	$APP->room = "E206";
	$APP->subject = "Computer Science";

	asdsfddasdsadwd