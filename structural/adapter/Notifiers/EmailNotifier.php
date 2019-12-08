<?php

namespace Notifiers;

class EmailNotifier implements Notifier {

    function notify($to, $message) {
        echo "Email successfully sent\n";
    }
}
