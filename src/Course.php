<?php 

class Course
{

	private $id;
	private $name;
	private $description;
	private $image_url;
	private $num_of_students;
	private $students_list;
	
	function __construct($_id=null, $name=null, $description=null, $image_url=null, $num_of_students=null, $students_list=null)
	{
		$this->_id = $_id;
		$this->name = $name;
		$this->description = $description;
		$this->image_url = $image_url;
		$this->num_of_students = $num_of_students;
		$this->students_list = $students_list;
		$this->db = $db;
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function getImageUrl(){
		return $this->image_url;
	}

	public function setName($name){
		return $this->name = $name;
	}

	public function setDescription($description){
		return $this->description = $description;
	}

	public function setImageUrl($image_url){
		return $this->image_url = $image_url;
	}
}