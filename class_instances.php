<?php

use students as GlobalStudents;

class Student{

}

$student = new Student;
$student2 = new Student;

$classes = get_declared_classes();
echo "Classes: " . implode(', ', $classes) . "<br />";
?>
