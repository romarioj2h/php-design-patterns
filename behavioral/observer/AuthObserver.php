<?php

interface AuthObserver {

    function update(Auth $auth, string $event);
}
