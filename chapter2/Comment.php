<?php

class Comment
{
    public $text;
    public $userid;
    
    public function __construct($text, $userid)
    {
        $this->text = $text;
        $this->userId = $userid;
    }
}