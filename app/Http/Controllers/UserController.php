<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
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
    public function store(Request $request)
    {
        $validate = $request->validate([

            "name"=> "required",
            "email"=> "required",
            "password" =>  "required",
            "address" => "required",
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
       $teacher->password = encrypt($request->password);
       $teacher->address = $request->address;
       $teacher->save();
        return redirect()->route("contact");
    }



  
//     Model alone.
// php artisan make:model User

// Model and migration.
// php artisan make:model User -m

// Model, migration, and controller.
// php artisan make:model User -c

// Model, migration, and resource controller.
// php artisan make:model User -mc


}
