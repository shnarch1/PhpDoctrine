<?php 

	require_once "bootstrap.php";
	require "src/Course.php";

	// $course = new Course("doc_course", "created by doctrine", "/etc/doctrine");

	// $entityManager->persist($course);
	// $entityManager->flush();

	$physics = $entityManager->find("Course", 4);
	echo $physics->getName();


 ?>