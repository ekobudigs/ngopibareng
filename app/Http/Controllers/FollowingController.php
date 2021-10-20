<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{


public function index(User $user, $following)
{

    if($following != "follower" && $following != "following"){
        return redirect(route('profile', $user->username));
    }

    return view('users.following', [
        'user' => $user,
                 'follows' => $following == "following" ? $user->follows : $user->followers,
                
            ]);
}

public function store(Request $request, User $user)
{
    Auth::user()->follow($user);
    return back()->with('success', 'You Are Follow User');
}

}
