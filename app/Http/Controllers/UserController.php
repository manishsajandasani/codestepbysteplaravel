<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($name)
    {
        return "This is UserController Show Method " . $name;
    }
}