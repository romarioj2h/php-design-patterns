<?php

namespace Notifiers;

class SMSNotifier implements Notifier {

    function notify($to, $message) {
        echo "SMS successfully sent\n";
    }
}
