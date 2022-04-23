<?php


class Connection
{
    private static int $count = 0;
    private string $connectionId; 
    private int $conferenceId = 1234;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __toString()
    {
        return " Conference id : {$this->connectionId} <br> Connection id : {$this->conferenceId}";
    }

    public function getCount(){
        return self::$count;
    }

    public function setConnectionId($ipAdress){
        if(filter_var($ipAdress, FILTER_VALIDATE_IP)){

            $this->connectionId = $ipAdress . '_' . self::$count;

            return;
        }
        die('Not a valid ip adress');
    }

    // public function getConnectionId(){
    //     return $this->connectionId;
    // }

   

}

