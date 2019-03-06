<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
     protected $fillable = [
        'user_id', 'state', 'lga','address','phone_no','display_image',
    ];

}
