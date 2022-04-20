<?php

class FileReader
{
    protected $data = 'Some random data';
    private $data2 = 'Private data';

   public function getData()
   {
       return $this->data2;
   }
}