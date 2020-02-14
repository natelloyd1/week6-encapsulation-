<?php

namespace App\Counter; 

class beanCounter 
{
    private $beans; 

  public function __construct(Counter $counter) 
    {
    $this->beans = $counter; 
    }
    public function addBean()
    {
    $this->$beans->increment();
    }
    public function howMany()
    {
        $this->$beans->count(); 
    }
}