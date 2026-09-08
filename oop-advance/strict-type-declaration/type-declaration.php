<?php

// PHP 7
// bool, float, int, string

declare(strict_types=1); // strict type declaration, tapi kelemahannya ketika dipanggil di file lain akan tidak strict type declaration lagi
function sum(int $a, int $b)
{
    return $a + $b;
}

sum(1.5, 2.5); // Fatal error: Argument 1 passed to sum() must be of the type int, float given