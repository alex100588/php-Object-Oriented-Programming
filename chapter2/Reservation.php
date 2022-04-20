<?php

class Reservation
{
    private $host = 'Host class';
    private $guest = 'Guest class';

    public function cancel()
    {
        $this->sendCancellationNotification();
        $this->refundGuest();

        echo 'Another stuff also to cancel reservation';
    }

    private function sendCancellationNotification()
    {
        echo 'Sending notificaton to '. $this->host . '<br>';
    }

    private function refundGuest()
    {
        echo 'Sending money back to' . $this->guest . '<br>';
    }
}