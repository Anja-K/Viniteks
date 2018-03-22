<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view("login");
        // return redirect()
    }
    public function verify(Request $request)
    {
        $input = $request->all();
        var_dump($input['password'].$input['email']);

        return redirect("/");
    }
}