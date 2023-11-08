<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {

        return view("welcome");
    }
    
    public function contact()
    {
        $name = "hamza";
        $email = "hamza@gmail.com";
        $data = compact("name","email");
        return view("contact")->with($data);
    }
    public function about()
    {
      return "this is about page";
    }

    // https://laravel.com/docs/10.x/migrations#creating-tables

}
