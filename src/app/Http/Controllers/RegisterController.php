<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\User;


class RegisterController extends Controller
{
    public function index() {
        $users = User::all();
        return view('register', compact('users'));
    }

    public function store(RegisterRequest $request) {
        $user = $request->only(['name']);
        User::create($user);
        return redirect('/')->with('message', '登録完了しました');
    }


}
