<?php


class ForumAuthObserver implements AuthObserver {

    function update(Auth $auth, string $event) {
        switch ($event) {
            case Auth::EVENT_LOGIN:
                $this->login($auth);
                break;
            case Auth::EVENT_LOGOUT:
                $this->logout($auth);
                break;
        }
    }

    private function login(Auth $auth) {
        /** forum login logic */
        echo "Forum login\n";
    }

    private function logout(Auth $auth) {
        /** forum logout logic */
        echo "Forum logout\n";
    }
}
