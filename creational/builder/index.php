<?php

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include $class_name . '.php';
});

$director = new Director();
$chickenPizza = $director->build(new \Builders\ChickenBuilder());
$mozzarellaPizza = $director->build(new \Builders\MozzarellaBuilder());

echo "<pre>";
print_r($chickenPizza);
echo "</pre>";
echo "<pre>";
print_r($mozzarellaPizza);
echo "</pre>";
