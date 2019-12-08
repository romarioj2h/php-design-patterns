<?php

namespace Notifiers;

interface Notifier {
    function notify($to, $message);
}
