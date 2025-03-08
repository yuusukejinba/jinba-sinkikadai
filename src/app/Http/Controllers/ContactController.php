<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Item;

class ContactController extends Controller
{
    public function index()
    {
        

        return view('index');
    }

    

    public function confirm(Request $request)
    {
        

        $contact = $request->only(['name', 'item_id' ,  'tel__1' , 'tel__2' , 'tel__3']);

        
        
        return view('confirm' , compact('contact'));
    }

    public function store(Request $request)
    {
        $request['tel'] = $request->tel__1 . $request->tel__2 . $request->tel__3;
        
        $form = [
            'item_id' => $request->item_id,
            'name' => $request->name,           
            'tel' => $request->tel,
        ];    
        
        Contact::create($form);

        return view('/thanks');
    }
}



