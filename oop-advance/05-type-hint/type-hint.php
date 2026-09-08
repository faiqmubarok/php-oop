<?php

// Perlu menggunakan type hint?
// 1. Setiap software tidak dirancang untuk melahap semua tipe data
// 2. Menghindari error atau kesalahan program karena berbeda tipe data

function foo(
    // \App\Database $db,
    array $options = [],
    $bar = 0
) {
    echo $bar;
};

// Type Declarations Option
// Class / Interface
// Self / Same Class
// callable
// array
// bool
// float
// int 
// string;
