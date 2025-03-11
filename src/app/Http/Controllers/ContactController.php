<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Item;

class ContactController extends Controller
{
    public function index()
    {
        
        $items = Item::all();
        
        return view('index' , compact('items'));
    }

    

    public function confirm(Request $request)
    {
        

        $contact = $request->all();

        $item = item::find($request->id);
        
        
        return view('confirm' , compact('contact' , 'item'));
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
        $request = only([

            'item_id' ,
            'name' ,
            'tel',
        ]);

        

        return view('/thanks');
    }
}



