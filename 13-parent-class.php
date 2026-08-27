<?php

// self::$property / self::method() untuk mengakses property / method static di dalam class itu sendiri
// parent::$property / parent::method() untuk mengakses property / method static di dalam class parent


// Penggunaan self:: dan parent:: hanya bisa digunakan di dalam class itu sendiri, tidak bisa di luar class atau bukan instance dari class tersebut


class Programmer
{
    public static function makeSystem()
    {
        echo "Start Coding";
    }
}

class AmateurProgrammer extends Programmer
{
    public static function makeSystem()
    {
        echo "Read Documentation <br>";
        parent::makeSystem();
        echo "<br>";
        echo "Clean up mess <br>";
    }
}

echo "Programmer: <br>";
Programmer::makeSystem();
echo "<br/>";

echo "Amateur Programmer: <br>";
AmateurProgrammer::makeSystem();
echo "<br>";

class Image
{
    public static $resizeStatus = true;

    public static function geometry()
    {
        echo "760x300";
    }
}

class PhotoProfile extends Image
{
    public static function geometry()
    {
        if (self::$resizeStatus) {
            echo "50x50";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br>";
echo PhotoProfile::geometry() . "<br>";

Image::$resizeStatus = false;
echo PhotoProfile::geometry() . "<br>";
