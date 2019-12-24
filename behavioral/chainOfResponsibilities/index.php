<?php

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include $class_name . '.php';
});

$bitcoinCacheResolver = new \Bitcoin\Cache(new \Bitcoin\Api());

echo "BTC Price " . $bitcoinCacheResolver->resolve(new Cache());
echo "\n";
