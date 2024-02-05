<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題16</title>
</head>
<body>

<?php

class Food
{
    public $name;
    public $price;

    public function show_price(){
         echo $this->price . ' <br> ';
    }

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

}

class Animal
{
    public $name;
    public $height;
    public $weight;

    public function show_height(){
        echo $this->height . ' <br> ';

    }

    public function __construct(string $name, int $height, int $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$potate = new Food('potate', 250) ;
$dog = new Animal('dog', 60, 5000);

print_r($potate); 
echo '<br>';
print_r($dog);
echo '<br>';

$potate->show_price(); 
$dog->show_height();


?>    



</body>
</html>