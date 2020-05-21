<?php 
	class Person{
		const COLLEGE = "Khwopa";
	}

	class Student extends Person{
		public $rollno;
	}
	echo Person::COLLEGE;