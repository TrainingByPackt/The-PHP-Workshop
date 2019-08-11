<?php
namespace Professor;
use Student\Student as Student;

class Professor{
	public $name;
	public $title = 'Prof.';
	private $students = array();

	function __construct(string $name, array $students){
		$this->name = $name;
		
		foreach ($students as $student) { 
			if ($student instanceof Student) {
				$this->students[] = $student;
			}
		}
	}		

	public function setTitle(string $title){
		$this->title = $title;
	}

	public function printStudents(){
		echo "$this->title $this->name's students (" .count($this->students). "): \n";

		$serial = 1;
		foreach ($this->students as $student) {
			echo " $serial. $student->name \n";
			$serial++;
		}
	}
}