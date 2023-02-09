<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function submitUserForm(Request $req)
    {
        echo $req->input('_token') . "<br>";
        print_r($req->input());
    }
}
