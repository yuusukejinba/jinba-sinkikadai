<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Item;
use App\Models\Channel;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $channels = Channel::all();
        
        return view('index' , compact('items' , 'channels'));
    }

    

    public function confirm(ContactRequest $request)
    {
        
        

        $contact = $request->all();
        $item = Item::find($request->item_id);
        $channels = Channel::find($request->channel_ids);
         
        $contact['image_file'] = $request->image_file->store('img','public');
        
        
        return view('confirm' , compact('contact' , 'item' , 'channels'));
    }

    public function store(ContactRequest $request)
    {
        $request['tel'] = $request->tel__1 . $request->tel__2 . $request->tel__3;
        
        $form = [
            'item_id' => $request->item_id,   
            'name' => $request->name,           
            'tel' => $request->tel,
            'image_file' => $request->image_file,
        ];    
        
        $contact = Contact::create($form);
        $contact->channels()->sync($request->channel_ids);      
       

        

        return view('thanks');
    }

    public function admin()
    {
        $contacts = Contact::paginate(4);
        $item = Item::all();

        $channels = Channel::all();

        return view('admin', compact('contacts' , 'item' , 'channels'));
    }

    public function show($id)
{
    $contact = Contact::find($id);
    return view('detail', compact('contact'));
}

}