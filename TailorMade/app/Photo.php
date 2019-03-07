<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['folder_id', 'filename', 'caption', 'search_tags'];

    public function folder(){
		return $this->belongsTo('App\Folder');
    }
}
