<?php 


class Enrollment
{
	private $id;
	private $student_id;
	private $course_id;

	
	function __construct($student_id, $course_id)
	{
		$this->student_id = $student_id;
		$this->course_id = $course_id;
	}

	public function getId(){
		return $this->id;
	}

	public function getStudentId(){
		return $this->student_id;
	}

	public function getCourseId(){
		return $this->course_id;
	}

	public function setStudentId($student_id){
		$this->student_id = $student_id;
	}

	public function setCourseId($course_id){
		$this->course_id = $course_id;
	}
}

 ?>