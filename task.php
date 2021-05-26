<?php
class Animal
{
    public $food = "feed";
    public $location = "Dog, cat ang hourse";


    public function makeNoise()
    {
        echo "{$this->location} спить <br>";
    }
    function eat()
    {
        echo "{$this->food} їсть <br>";
    }
    function sleep()
    {
    }
}
class Dog extends Animal
{
    public $name = "Dog";
    public function makeNoise()
    {
        echo "{$this->name} спить <br>";
    }
    function eat()
    {
        echo "{$this->food} їсть <br>";
    }
    public function voice()
    {
        echo "{$this->name} say gav-gav <br>";
    }
}

class Cat extends Animal
{
    public $name = "Cat";
    public function makeNoise()
    {
        echo "{$this->name} спить <br>";
    }
    function eat()
    {
        echo "{$this->food} їсть <br>";
    }
    public function voice()
    {
        echo "{$this->name} say meay <br>";
    }
}
class Hourse extends Animal
{
    public $name = "Hourse";
    public function makeNoise()
    {
        echo "{$this->name} спить <br>";
    }
    function eat()
    {
        echo "{$this->food} їсть <br>";
    }
    public function voice()
    {
        echo "{$this->name} say igogo <br>";
    }
}

$animal = new Animal();
$animal->makeNoise();

$dog = new Dog();
$dog->makeNoise();
$dog->voice();

$cat = new Cat();
$cat->makeNoise();
$cat->voice();

$hourse = new Hourse();
$hourse->makeNoise();
$hourse->voice();


//і який реалізує лікування всіх тварин за допомогою класу Ветеринара.
class Vet extends Animal
{
    public function treatAnimal()
    {
        echo "Прийом <br>";
    }
}

$randName = array("Cat", "Dog", "Hourse");
$randSleep = array("Sleep","Not sleep");
$randFood = array("feed");
$randLocation = array("City","Street");

for ($i = 0; $i <= 0; $i++)
{
    $rFood = mt_rand(0, count($randFood) - 1);
    $rLocation = mt_rand(0, count($randLocation) - 1);

    $vet = new Vet();
    $vet->Vet();
    $vet->Vet();
    echo "<br><br>";
}
?>