<?php

// Sintaks berbeda untuk memanggil property dan method static
// Student::$grades, Student::countStudents()
// Static tidak bisa menggunakan $this
// Gunakan self; self::$totalStudents, self::countStudents()
// Bisa digabungkan dengan pengubah visibilitas public, protected, private

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

// echo Student::$totalStudents . "<br>"; // ❌ ERROR! Tidak bisa akses private property

echo Student::countStudents() . "<br>";

Student::addStudent();
echo Student::countStudents() . "<br>";
