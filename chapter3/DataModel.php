<?php

abstract class DataModel
{
    protected string $tablename = 'random table name';

    public function save(){
        print_r('Saving data to table: ' . $this->tablename);
    }

    
}