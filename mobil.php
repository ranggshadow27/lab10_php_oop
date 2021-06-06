<?php

class Cars
{
    private $color;
    private $brand;
    private $price;

    public function __construct()
    {
        $this->color = "Blue";
        $this->brand = "Pagani";
        $this->price = "$200000";
    }

    public function changeColor ($newColor)
    {
        $this->color = $newColor;
    }

    public function showColor()
    {
        echo "Car colors : " . $this->color;
    }
}

//create an object for cars;

$a = new Cars();
$b = new Cars();

//calling object
echo "<b>First Car</b><br>";
$a->showColor();

echo "<br>Changing color to first car<br>";
$a->changeColor("Silver");
$a->showColor();

//calling object
echo "<br><b>Second Car</b><br>";
$b->changeColor("MatteBlack");
$b->showColor();

?>