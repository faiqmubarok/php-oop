<!-- 
Public - Bisa diakses dari MANA SAJA (dari dalam class, subclass, atau luar)
Protected - Bisa diakses hanya dari dalam CLASS dan SUBCLASS-nya
Private - Hanya bisa diakses dari dalam CLASS itu sendiri (TIDAK bisa dari subclass)
-->

<?php

class User
{
    public $first_name;
    public $last_name;
    public $username;

    protected $regID = 1001;
    private $level = 'User';

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    protected function sayProtect()
    {
        return "Hello, Protected";
    }
    private function sayPrivate()
    {
        return "Hello, Private";
    }
}

class Costumer extends User
{
    public function sayParent()
    {
        return $this->sayProtect();
    }
};

$user = new Costumer;
$user->first_name = "John";
$user->last_name = "Doe";

// echo $user->regID . "<br/>";
// echo $user->level . "<br/>";

echo $user->fullName() . "<br/>";
// echo $user->sayPrivate() . "<br/>";
// echo $user->sayProtect() . "<br/>";
echo $user->sayParent() . "<br/>";
