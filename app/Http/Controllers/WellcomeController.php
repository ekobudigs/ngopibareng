<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WellcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if(auth()->check()){
            return redirect(route('timeline'));
        }
        return view('welcome');
    }
}
