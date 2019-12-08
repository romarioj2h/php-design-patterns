<?php

namespace Builders;

class ChickenBuilder implements Builder {

    /**
     * @var \Pizzas\Chicken
     */
    private $pizza;

    public function createPizza() {
        $this->pizza = new \Pizzas\Chicken();
    }

    public function addBase() {
        $this->pizza->setPart('base', new \Pizzas\Parts\Base());
    }

    public function addSauce() {
        $this->pizza->setPart('sauce', new \Pizzas\Parts\TomatoSauce());
    }

    public function addTopping() {
        $this->pizza->setPart('topping1', new \Pizzas\Parts\MozzarellaTopping());
        $this->pizza->setPart('topping2', new \Pizzas\Parts\ChickenTopping());
    }

    public function getPizza(): \Pizzas\Pizza {
        return $this->pizza;
    }
}
