<?php

namespace Builders;

interface Builder
{
    public function createPizza();

    public function addBase();

    public function addSauce();

    public function addTopping();

    public function getPizza(): \Pizzas\Pizza;
}
