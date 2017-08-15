<?php

abstract class Product
{
    protected $price;
    protected $name;
    protected $weight;
    protected $typeDiscount;
    protected $discount;
    protected $delivery;


    public function info()
    {
        echo "Масса: $this->weight кг<br>";
        echo "Наименование: $this->name<br>";
        echo "Цена: $this->price руб<br>";
        echo "<br>";
    }


    public function __construct($name, $price, $weight, $discountFlag, $typeDiscount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;


        if ($discountFlag == 1 || ($typeDiscount == 1 && $weight >= 10)) {
            $this->discount = 0.1;
            $this->delivery = 300;
        } elseif ($discountFlag == 0 || ($typeDiscount == 0 && $weight <= 10)) {
            $this->discount = 1;
            $this->delivery = 250;
        } else {
            echo 'При создании товара было введено не допустимое значение';
        }

        $this->price = $this->price - ($this->price * $this->discount) + $this->delivery;


    }

}


class Game extends Product
{
}

$firstGame = new Game('Doom', 100, 0.1, 1, 0);
$firstGame->info();
$secondGame = new Game('counter-strike', 490, 0.1, 1, 0);
$secondGame->info();


class furniture extends Product
{

}

$firstFurniture = new furniture('chair', 300, 6, 0, 1);
$secondFurniture = new furniture('table', 300, 10, 0, 1);
$firstFurniture->info();
$secondFurniture->info();

class Computers extends Product
{

}

$firstComputers = new Computers('asus', 50000, 5, 1, 0);
$secondComputers = new Computers('iMac', 130000, 12, 1, 0);
$firstComputers->info();
$secondComputers->info();






