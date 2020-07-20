<?php

namespace App\Http\Controllers;
use App\User;
//without the above use App\User;
//We would have to pass in App\User $user into the below functions


use Illuminate\Http\Request;

class ProfilesController extends Controller
{
   public function index(User $user)
   {
       return view('profiles.index', compact('user'));
   }

   public function edit(User $user)
   {
        return view('profiles.edit', compact('user'));
   }

   public function update(User $user)
   {
       $data = request()->validate([
           'title' => 'required',
           'description' => 'required',
           'url' => 'url',
           'image' => '',
       ]);

       auth()->user->profile->update($data);

       return redirect("/profile/{ user->id }");
   }
} 