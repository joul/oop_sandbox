<?php

use Student as GlobalStudent;
use students as GlobalStudents;

class Student{
    var $first_name;
    var $last_name;
    var $country = 'none';

}

$student1 = new Student;
$student1->first_name = 'Josh';
$student1->last_name = 'Mutale';

$student2 = new Student;
$student2->first_name = 'Lisa';
$student2->last_name = 'Ulika';
$student2->country = 'Zambia';

echo $student1->first_name . " ". $student1->last_name . "<br />";
echo $student2->first_name . " ". $student2->last_name . "<br />";

//we can check/verify what classes and objects we have:
$class_vars = get_class_vars('Student');
echo "Class vars: <br />";
echo "<pre>";
print_r($class_vars);
echo "<pre>";

$object_vars = get_object_vars($student1);
echo "Object vars: <br />";
echo "<pre>";
print_r($object_vars);
echo "<pre>";

if(property_exists('Student', 'first_name')){
    echo "Property first name exist in student class.<br />";
}else{
    echo "Property first_name does not exist in student class. <br />";
}
?>
