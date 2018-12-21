<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email'];

    public static $rules = [
    	'name'=>'required|max:80',
    	'email'=>'required|email|max:80|unique:contacts',
    ];
}