<?php 

namespace App\Counter; 

class Counter {

    private $total = 0;  

    public function increment() {
        $this->$total += 1; 
        return $this; 
    }
    public function count() : int
    {
        return $total; 
    }

}