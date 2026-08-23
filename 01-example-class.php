<?php

class Student {};

$classes = get_declared_classes(); // Untuk mendapatkan class2 yang telah di definisikan

// implode gabungkan elemen array jadi string dengan pemisah ', '
// misalnya ['A', 'B'] jadi 'A, B'
echo "Classes " . implode(', ', $classes) . "<br>";

$classNames = ["Product", "Student", "student"];

foreach ($classNames as $className) {
    // class_exists cek apakah sebuah class sudah didefinisikan
    if (class_exists($className)) {
        echo "{$className} class ada <br>";
    } else {
        echo "{$className} tidak ada <br>";
    }
}
