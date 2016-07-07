<?php

namespace App\Smartphone;

use App\PhoneDetails\Battery;
use App\PhoneDetails\Camera;
use App\PhoneDetails\Display;
use App\PhoneDetails\Processor;

class Smartphone {
	public $smatr = 'iphone';
	public $batt;
	public $camera;
	public $size;
	public $processor;
	
	public function __construct($smatr,$batt,$camera,$size,$processor){
        $this->smatr = $smatr;
        $this->batt = $batt;
        $this->camera = $camera;
        $this->size = $size;
        $this->processor = $processor;
    }
	
	public function getInfo()
 
        return($this->smatr,$this->batt,$this->camera, $this->size, $this->processor);
    }
	
}