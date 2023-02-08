<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUserID($userID)
    {
        return view("users", ["userID" => $userID]);
    }
}