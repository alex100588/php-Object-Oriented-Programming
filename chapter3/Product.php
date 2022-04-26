<?php
require_once 'DataModel.php';

class Product extends DataModel
{
    private string $name;
    private float $price;
    protected string $tablename = 'products';


    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setPrice( float $price): void{
        $this->price = $price;
    }

    public function getPrice(): float{
        return $this->price;
    }

    

}