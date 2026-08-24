<?php

// Boleh kea gini, tpi pertimbangin / hindari method "naive setter" dan "naive getter" yaitu menambah kompleksitas code untuk hal yang sederhana. jadi sebaiknya dalam proses setter dan getter harus ada proses tambahan jangan langsung sederhana saja.
class Product
{
    private $price;

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

// Contoh bagusnya

class Product2
{
    private $price;

    public function setPrice($price)
    {
        $noFormat = preg_replace('/Rp/', '', $price);
        $float = floatval($noFormat);
        if ($float < 0) {
            throw new Exception("Harga tidak boleh negatif!");
        }
        $this->price = $float;
    }

    public function getPrice()
    {
        return "Rp" . number_format($this->price, 0, ',', '.');
    }
}
