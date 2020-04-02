<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\User;

class FollowsController extends Controller
{
    //  Store a follows resource to database
    public function store(User $user)
    {
        // have the authenticated user follow the given user
        auth()->user()->toggleFollow($user);

        return back();
    }
}
