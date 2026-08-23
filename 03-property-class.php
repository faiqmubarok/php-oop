<?php

class Student
{
    var $name;
    var $country = "Indonesia";
};


$student1 = new Student();
$student2 = new Student();

$student1->name = "Eko";
$student2->name = "Kurniawan";

echo $student1->name . "<br>";
echo $student2->name . "<br>";

$class_vars = get_class_vars("Student"); // untuk mendapatkan property class

echo "Property class Student: ";
echo "<pre/>";
print_r($class_vars);
echo "<pre/>";

if (property_exists("Student", "name")) { // untuk mengecek apakah property class ada
    echo "Property name ada <br>";
} else {
    echo "Property name tidak ada <br>";
}
