<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function index()
    {
        //Get all users
        $users = User::get();
 
        // Return a collection of $users with pagination
        return UserResource::collection($users);
    }
}
