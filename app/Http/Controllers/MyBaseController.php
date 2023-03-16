<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Servisec\Merch\Service;

class MyBaseController 
{
    public $servce;

    public function __construct(Service $servce)
    {
       $this->servce=$servce;
    }
}