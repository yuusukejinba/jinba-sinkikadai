<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ContactController;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'tel__1' , 'tel__2' , 'tel__3'
      ];
}
