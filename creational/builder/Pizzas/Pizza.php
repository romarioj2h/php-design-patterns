<?php

namespace Pizzas;

use Pizzas\Parts\Part;

abstract class Pizza {
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, Part $value) {
        $this->data[$key] = $value;
    }
}
