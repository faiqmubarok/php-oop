<?php

interface UserInterface
{
    public function getName(): string;
}

class User
{
    private $userObj;

    public function __construct(UserInterface $userObj)
    {
        $this->userObj = $userObj;
    }

    // Return type UserInterface memastikan method ini mengembalikan
    // object yang memiliki method-method sesuai kontrak interface.
    function getUser(): UserInterface
    {
        return $this->userObj;
    }
}

// Child Method implement

class Table
{
    public function save(array $data)
    {
        return true;
    }
}

class Mysql extends Table
{
    public function save(bool $data)
    {
        return true;
    }
}

echo (new Mysql())->save(true);
// Warning: Declaration of Mysql::save(bool $data) should be compatible with Table::save(array $data)
