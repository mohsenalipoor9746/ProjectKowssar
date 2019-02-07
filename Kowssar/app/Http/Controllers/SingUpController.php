<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SingUpController extends Controller
{
    public function singup(Request $request)
    {
        $file = $request->file('profile');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $data = $request->file('profile')->move("profile", $name);


         $request=User::create([

            'name' => $request['name'],
            'emaill' => $request['emaill'],
            'adress' => $request['adress'],
            'phone' => $request['phone'],
            'Side' => $request['Side'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image' => $data,
        ]);
         return redirect()->back();
    }
}
