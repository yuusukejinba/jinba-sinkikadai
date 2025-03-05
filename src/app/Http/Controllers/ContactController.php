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
        $tel__1 = $request->only(['tel__1']);
        $tel__2 = $request->only(['tel__2']);
        $tel__3 = $request->only(['tel__3']);
        $tel = [$tel__1 , $tel__2 , $tel__3];

        $form = [
            'name' => $request->name,
            'tel' => $request->tel,
        ];    
        
        Contact::create($form);
        
        $contact = $request->only(['name', 'tel']);
        
        return view('confirm' , compact('contact'));
    }

    public function thanks()
    {
        return view('/thanks');
    }
}



