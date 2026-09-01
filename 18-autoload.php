<?php

// __autoload()
// dipanggil diluar class / non class function
// digunakan untuk mencari class yang tidak ditermukan
// memberi kesempatan membuat class pada suatu direktori


function myAutoload($class)
{
    if (preg_match("/\A\w+\z/", $class)) {
        include "18-classes/$class.php";
    }
}

spl_autoload_register("myAutoload");

$student = new Student();
echo $student->name;
