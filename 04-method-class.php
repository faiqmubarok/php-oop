<?php

class Student
{
    var $name;
    var $country = "Indonesia";

    function sayHello()
    {
        return "Hello World";
    }
};


$student1 = new Student();
$student2 = new Student();

$student1->name = "Eko";
$student2->name = "Kurniawan";

echo $student1->sayHello() . "<br>";
echo $student2->sayHello() . "<br>";

$class_methods = get_class_methods("Student"); // untuk mendapatkan method class

echo "Method class Student: ";
echo "<pre/>";
print_r($class_methods);
echo "<pre/>";

if (method_exists("Student", "sayHello")) { // untuk mengecek apakah method class ada
    echo "Method sayHello ada <br>";
} else {
    echo "Method sayHello tidak ada <br>";
}
