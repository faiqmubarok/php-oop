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
};

class Costumer extends User
{
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name . ' (customer)';
    }
};

$customer = new Costumer;

$customer->first_name = "Faiq";
$customer->last_name = "Mubarok";
$customer->city = "Jakarta";
$customer->country = "Indonesia";


echo $customer->fullName() . "<br>";
echo $customer->location();
