<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'name' ,
        'tel' , 
        'image_file',

      ];

      public function item()

      {
        return $this->belongsTo(item::class);
      }

      public function channels()

      {
        return $this->belongsToMany(Channel::class)->withTimestamps();
      }  

}
