<?php

class Director {
    public function build(\Builders\Builder $builder): \Pizzas\Pizza {
        $builder->createPizza();
        $builder->addBase();
        $builder->addSauce();
        $builder->addTopping();
        return $builder->getPizza();
    }
}
