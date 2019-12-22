<?php

class Auth {

    const EVENT_LOGIN = 'login';
    const EVENT_LOGOUT = 'logout';

    /**
     * @var AuthObserver[]
     */
    private $observers = [];

    /**
     * @inheritDoc
     */
    function attach(AuthObserver $observer) {
        $this->observers[spl_object_hash($observer)] = $observer;
    }

    /**
     * @inheritDoc
     */
    function detach(AuthObserver $observer) {
        unset($this->observers[spl_object_hash($observer)]);
    }

    function login() {
        /** login logic */
        $this->notify(self::EVENT_LOGIN);
    }

    function logout() {
        /** logout logic */
        $this->notify(self::EVENT_LOGOUT);
    }

    private function notify(string $event) {
        foreach ($this->observers as $observer) {
            $observer->update($this, $event);
        }
    }
}
