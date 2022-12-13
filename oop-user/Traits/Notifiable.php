<?php
trait Notifiable {
    protected $notification;

    public function setNotification($notification) {
        $this->notification = $notification;
    }

    public function send($dest, $message) {
        $this->notification->send($dest, $message);
    }
}
