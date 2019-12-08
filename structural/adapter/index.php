<?php

spl_autoload_register(function ($class_name) {
    $fileName = str_replace('\\', '/', $class_name) . '.php';
    if (!file_exists($fileName)) {
        $fileName = 'vendor/' . $fileName;
    }
    include $fileName;
});

$person = new Person();
$person->create(
    new \Notifiers\FCMNotifierAdapter(
        new \Firebase\FCM()
    ),
    'Romario Huebra'
);

$person->create(
    new \Notifiers\EmailNotifier(),
    'Huebra Henrique'
);
