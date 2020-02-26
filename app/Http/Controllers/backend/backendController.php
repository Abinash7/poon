<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{

    public $backendPath='backend.';
    public $pagePath= '';
    public function __construct(){
    
        $this->pagePath= $this->backendPath.'pages.';

    }
}