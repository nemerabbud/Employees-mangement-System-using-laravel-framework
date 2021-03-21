<?php

namespace App\Http\Controllers;

use CreateUsersTable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function create (){
        $users = user::where ('status','active')->get();
        return  view('create')->with (['users'=>$users]);
    }
}
