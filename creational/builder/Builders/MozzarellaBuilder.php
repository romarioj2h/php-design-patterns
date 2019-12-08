<?php

namespace Builders;

class MozzarellaBuilder implements Builder {

    /**
     * @var \Pizzas\Mozzarella
     */
    private $pizza;

    public function createPizza() {
        $this->pizza = new \Pizzas\Mozzarella();
    }

    public function addBase() {
        $this->pizza->setPart('base', new \Pizzas\Parts\Base());
    }

    public function addSauce() {
        $this->pizza->setPart('sauce', new \Pizzas\Parts\TomatoSauce());
    }

    public function addTopping() {
        $this->pizza->setPart('topping', new \Pizzas\Parts\MozzarellaTopping());
    }

    public function getPizza(): \Pizzas\Pizza {
        return $this->pizza;
    }
}
