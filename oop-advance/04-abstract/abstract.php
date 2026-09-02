<?php

abstract class Database
{
    abstract public function connection();

    public function disconnect()
    {
        // Implementation
    }
}

class Model extends Database
{
    public function connection()
    {
        // Implementation
    }
}

// $database = new Database(); // Tidak bisa diinstansiasi karena merupakan kelas abstrak
$model = new Model();
