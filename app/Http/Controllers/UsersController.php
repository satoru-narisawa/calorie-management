<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Calorie;

class UsersController extends Controller
{
    public function index(){
        
       return view("welcome");
    }
}
