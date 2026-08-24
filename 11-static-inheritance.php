<?php

// Static property dan method bisa diwariskan
// Pengubah visibilitas / encapsulation berlaku
// Static property yang diwariskan bersifat shared variables
// Perubahan nilai pada parent class mempengaruhi subclass
// Perubahan nilai pada subsclass mempengaruhi parent class


class Student
{
    public static $grades = ['SD', 'SMP', 'SMA', 'Kuliah'];

    private static $totalStudents = 0;


    public static function motto()
    {
        return "Learn PHP OOP";
    }
    public static function countStudents()
    {
        return self::$totalStudents;
    }
    public static function addStudent()
    {
        self::$totalStudents++;
    }
}

echo Student::$grades[2] . "<br>";
echo Student::motto() . "<br>";

echo Student::countStudents() . "<br>";

Student::addStudent();
echo Student::countStudents() . "<br>";

class PartTimeStudent extends Student {}

echo PartTimeStudent::$grades[1] . "<br>";
echo PartTimeStudent::motto() . "<br>";

PartTimeStudent::$grades[] = "Magang";
echo implode(", ", Student::$grades) . "<br>";

Student::addStudent();
Student::addStudent();
PartTimeStudent::addStudent();

echo Student::countStudents() . "<br>";
echo PartTimeStudent::countStudents() . "<br>";
