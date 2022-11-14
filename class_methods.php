<?php

use Student as GlobalStudent;
use students as GlobalStudents;

class Student{
    var $first_name;
    var $last_name;
    var $country = 'none';

    function say_hello(){
        echo "Hello World!!!";
    }

    function full_name(){
        return $this->first_name. " ".$this->last_name;
    }

}

$student1 = new Student;
$student1->first_name = 'Josh';
$student1->last_name = 'Mutale';
$student1->country = 'Zambia';

$student2 = new Student;
$student2->first_name = 'Lisa';
$student2->last_name = 'Ulika';
$student2->country = 'Zambia';

echo $student1->first_name . " ". $student1->last_name . "<br />";
echo $student2->full_name() .  "<br />";

echo $student1->say_hello()."<br />";
echo $student2->say_hello()."<br />";

//we can check/verify what classes and objects we have:
$class_methods = get_class_methods('Student');
echo "Class methods: ".implode(', ', $class_methods)."<br />";

if(method_exists('Student', 'say_hello')){
    echo "Method say_hello() exist in student class.<br />";
}else{
    echo "Method say_hello() does not exist in student class. <br />";
}
?>
