<?php
class EmailNotification {
    public function send($email, $message) {
        echo "Invio messaggio: $message al $email";
    }
}
