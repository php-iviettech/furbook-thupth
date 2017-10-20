<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Cat extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable = ['name', 'date_of_birth', 'breed_id'];

    public function breed(){
        return $this->belongsTo('Furbook\Breed');
    }
    public function scopeGmail($query){

    }
}