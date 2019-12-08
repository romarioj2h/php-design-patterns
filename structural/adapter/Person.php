<?php

class Person {
    function create(\Notifiers\Notifier $notifier, $name) {
        echo "Person $name successfully created\n";
        $notifier->notify($name, 'Welcome!');
    }
}
