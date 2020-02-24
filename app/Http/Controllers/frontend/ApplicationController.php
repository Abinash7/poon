<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends FrontendController
{
    
        public function index(Request $request)
        {
           
            return view($this->pagePath . 'home');
        }

        public function About(Request $request)
        {
           
            return view($this->pagePath . 'About');
        }

        
        public function Contact(Request $request)
        {
           
            return view($this->pagePath . 'Contact');
        }
        public function Services(Request $request)
        {
           
            return view($this->pagePath . 'Services');
        }
        public function Career(Request $request)
        {
           
            return view($this->pagePath . 'Career');
        }
    }

