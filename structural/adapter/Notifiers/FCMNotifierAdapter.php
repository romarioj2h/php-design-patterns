<?php

namespace Notifiers;

use Firebase\FCM;

class FCMNotifierAdapter implements Notifier {

    /**
     * @var FCM
     */
    private $fcm;

    function __construct(FCM $fcm) {
        $this->fcm = $fcm;
    }

    function notify($to, $message) {
        $this->fcm->sendPushNotification($to, $message);
    }
}
