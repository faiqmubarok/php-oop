<?php

class User
{
    var $first_name;
    var $last_name;
    var $username;

    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

class Costumer extends User {};

$customer = new Costumer;

$customer->first_name = "Faiq";
$customer->last_name = "Mubarok";

echo $customer->fullName();
