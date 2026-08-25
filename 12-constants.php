<?php

// Digunakan untuk nilai class yang tidak dapat berubah
// Menggunakan keyword const dan penamaan kapital
// Dapat menyimpan nilai expression
// Support visibilitas modifier sejak PHP 7.1 (public, protected, private)
// Perujukkan dengan ClassName:: atau self:: untuk memanggil property constant
class Time
{
    public const DAY_IN_SECONDS = 60 * 60 * 24;

    public function tomorrow()
    {
        return time() + self::DAY_IN_SECONDS;
    }
}

echo Time::DAY_IN_SECONDS . "<br>";

$clock = new Time();
echo $clock->tomorrow() . "<br>";
