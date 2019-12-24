<?php

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include $class_name . '.php';
});

$auth = new Auth();
$forumAuth = new ForumAuthObserver();
$logger = new LoggerObserver();

$auth->attach($forumAuth);
$auth->attach($logger);

$auth->login();
$auth->logout();

echo "\n\n";

$auth->detach($forumAuth);

$auth->login();
$auth->logout();
