<?php


abstract class Common{
    protected $color;
    protected $size;

    public function __construct($color, $size)
    {
        $this->color = $color;
        $this->size = $size;
    }


    public function getColor()
    {
        echo "$this->color";
        echo'<br>';
    }


    public function getSize()
    {
        echo "$this->size";
        echo'<br>';
    }

}

abstract class Name{
    protected $name;
    public function __construct($name)
    {
        return $this->name = $name;
    }
}
abstract class HomeNews{
    protected $number = 0;
    protected $numberNews = 0;

}

interface InterfaceInCar{
    public function changeSize($size);
}
interface InterfaceInTV{
    public function __construct();
}
interface InterfaceForBallPen{
    public function info();
}
interface InterfaceForDuck{
    public function duckLive();
}
interface InterfaceForProduct{
    public function addProduct($cost);
}
interface InterfaceForNews{
    public function newNews();
    public function getComments($comment);
}

class Car extends Common implements InterfaceInCar
{
    public $sizeWheel = 24;

    public function changeSize($size)
    {
        $this->size = $size;

    }
}

$car = new Car('red','big');
$secondCar = new Car('black',44);

$car->changeSize('small');
$car->getSize();

$secondCar->getColor();
echo '<br>';

class TV extends Common implements InterfaceInTV
{
    public $amountChannels = 52;
    public static $quantityTV = 10;

    public function __construct()
    {
        self::$quantityTV--;
    }

}

$firstTV = new TV();
$secondTV = new TV();
echo TV::$quantityTV;
echo '<br>';
echo '<br>';

class BallPen extends Common implements InterfaceForBallPen
{
    private $material = 'plastic';

    public function info()
    {
        $this->getSize();
        $this->getColor();
        echo "$this->material<br>";
        echo '<br>';
    }
}

$firstBallPen = new BallPen('blue',0.1);
$secondBallPen = new BallPen('black',0.5);

$firstBallPen->info();
$secondBallPen->info();
echo '<br>';

class Duck extends Name implements InterfaceForDuck
{

    private static $quantityLive = 2;
    public $status = 'fine';


    public function duckLive()
    {

        self::$quantityLive--;
        if (self::$quantityLive < 1) {
            echo "Duck $this->name is die<br>";
        } else {
            echo "Duck $this->name is $this->status<br>";
        }
    }


}

$firstDuck = new Duck('Boris');
$firstDuck->duckLive();


$secondDuck = new Duck('Aleksandr');
$secondDuck->duckLive();
echo '<br>';

class Product extends Name implements InterfaceForProduct
{

    public $cost;

    public function addProduct($cost)
    {
        echo "$this->name";
        echo " $this->cost $cost rub";
    }

}

$firstProduct = new Product('bread');
$firstProduct->addProduct(100);
echo '<br>';


$secondProduct = new Product('butter');
$secondProduct->addProduct(50);


class News extends HomeNews
{
    public $textNews;


    public function newNews($textNews)
    {
        $this->numberNews++;

        echo "Article №$this->numberNews";
        echo '<br>';
        echo "$this->textNews $textNews";
        echo '<br>';
        echo '<br>';
    }

    public function getComments($comment){
        $this->number++;
        echo "Comment №$this->number";
        echo " <br>  $comment<br>";
        echo '<br>';
    }

}
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
   nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
     occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
      id est laborum.';
$firstNews = new News();
echo "<h1>News</h1>";

$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);
$firstNews->newNews($text);

$secondComment = new News();
echo "<h1>Comments</h1>";
$secondComment->getComments("Good");
$secondComment->getComments("Nice");
$secondComment->getComments("Good job");
$secondComment->getComments("Bad");
$secondComment->getComments("Good");
$secondComment->getComments("Good");
$secondComment->getComments("Good");
$secondComment->getComments("Bad");
