<?php

// interface to be implemented by all classes (base and decorating)
interface IIngredient
{
    public function mixIngredients();
}

// base class
class Coffee implements IIngredient
{
    public function mixIngredients() {
        echo "This is"." ".$_POST["size"]." ".$_POST["coffee"];
    }
}

// Decorator 1. Sugar
class Sugar implements IIngredient
{
    protected $object;

    public function __construct(IIngredient $ingredient) {
        $this->object = $ingredient;
    }

    public function mixIngredients() {
        $this->object->mixIngredients();
        echo "<br />+ ".$_POST["sugar"];
    }
}

// Decorator 2. Cinnamon
class Cinnamon implements IIngredient
{
    protected $object;

    public function __construct(IIngredient $ingredient) {
        $this->object = $ingredient;
    }

    public function mixIngredients() {
        $this->object->mixIngredients();
        echo "<br />+ ".$_POST["cinnamon"];
    }
}

// Decorator 3. Cream
class Cream implements IIngredient
{
    protected $object;

    public function __construct(IIngredient $ingredient) {
        $this->object = $ingredient;
    }

    public function mixIngredients() {
        $this->object->mixIngredients();
        echo "<br />+ ".$_POST["cream"];
    }
}

// "blending" ingredients
$coffee = new Coffee();

if ($_POST["sugar"]) {
    $coffee = new Sugar($coffee);
}

if ($_POST["cinnamon"]) {
    $coffee = new Cinnamon($coffee);
}

if ($_POST["cream"]) {
    $coffee = new Cream($coffee);
}

$coffee->mixIngredients();