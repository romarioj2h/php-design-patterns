<?php

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include $class_name . '.php';
});

$bitcoinCache = new \Bitcoin\Cache(new \Bitcoin\Api());

echo "BTC Price " . $bitcoinCache->getPrice(new Cache());
echo "\n";
