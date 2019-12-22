<?php


class LoggerObserver implements AuthObserver {

    function update(Auth $auth, string $event) {
        echo "Auth logger: $event\n";
    }
}
