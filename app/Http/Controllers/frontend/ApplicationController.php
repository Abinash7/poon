<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Model\Contact;
use App\Model\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends FrontendController
{
    
        public function index(Request $request)
        {
           
            return view($this->pagePath . 'Index');
        }

        public function About(Request $request)
        {
           
            return view($this->pagePath . 'About');
        }

        public function Career(Request $request)
        {
            if ($request->isMethod('get')) {
                return view($this->pagePath . 'Career');
            }
            if ($request->isMethod('post')) {
                $request->validate([
                    'Name' => 'required',
                    'Email' => 'required',
                    'Address' => 'required',
                    'cv' => 'max:20480'
                ]);
                $data= $request->all();
                $career=new Career();
    
                if ($request->image){
                    $path = public_path().'/images';
                    if(!File::exists($path)){
                        File::makeDirectory($path,0777,true,true);
                    }
                    $file_name="image-".time().".".$request->image->getClientOriginalExtension();
                    $request->image->move($path,$file_name);
                    $data['image']=$file_name;
                $career->fill($data);
                $career->save();
    
                return redirect()->back();
                }
            }
        }
       
        
        public function Contact(Request $request)
        {
           
                if ($request->isMethod('get')){
                 $this->data('Contact', $this->title('contacts'));
                return view($this->pagePath . 'Contact');
            }
            if ($request->isMethod('post')){
               $data['name']= $request->name;
               $data['email']= $request->email;
               $data['subject']= $request->subject;
                $data['message']= $request->message;
                Mail::to('abibhandari7@gmail.com')->send(new ContactMail($data));
                Contact::create($data);
                return redirect()->back();
            }
            }
        public function Services(Request $request)
        {
           
            return view($this->pagePath . 'Services');
        }
     
    }

