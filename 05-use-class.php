<?php

class Student
{
    var $fist_name;
    var $last_name;
    var $country = "Indonesia";

    function sayHello()
    {
        return "Hello World";
    }

    function fullName()
    {
        // this digunakan untuk memanggil properti di scoope objek nya
        return $this->fist_name . ' ' . $this->last_name;
    }
};


$student = new Student();

$student->fist_name = "Faiq";
$student->last_name = "Mubarok";

echo $student->fullName() . "<br>";
