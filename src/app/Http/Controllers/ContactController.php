<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        

        return view('index');
    }

    

    public function confirm(Request $request)
    {
        
        $contact = $request->only(['name', 'tel']);
        
        return view('confirm' , compact('contact'));
    }

    public function store(Request $request)
    {
        $request['tel'] = $request->tel__1 . $request->tel__2 . $request->tel__3;
        
        $form = [
            'name' => $request->name,
            'tel' => $request->tel,
        ];    
        
        Contact::create($form);

        return view('/thanks');
    }
}



