<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
      return view('index');
    }

    public function search(Request $request)
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            // return redirect()->route('users.index');
          // return back()->withInput();
          return Redirect::route('users.index');
        }
dd(1);
        return view('search', compact('user'));
    }
}
