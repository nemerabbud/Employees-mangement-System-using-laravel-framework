<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $guarded =[];
    const  DataValidationRule =[
        'name' => 'required|string|max:100',
        'mobile' => 'required|string|max:50',
        'email' => ['required', 'string', 'email', 'max:191'],
        'description' => 'required|string',
    ];

    const  SendMessages =[
        'name' => 'required|string|max:100',
        'email' => 'required','string','email','max:100',
        'subject' =>'required|string|max:100',
        'message' => 'required|string|max:600',
    ];
}
