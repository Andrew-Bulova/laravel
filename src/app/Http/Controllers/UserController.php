<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\UserRequest;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected function createUser(UserRequest $request)
    {
        $validated = $request->validated();
        $user = app(User::class);
        $user->name = $request->input('nameInput');
        $user->photo = $request->file('userProfilePhoto')->store('images', 'public');
        $user->birthday = $request->input('dateBirthday');
        $user->sex = $request->input('userGender');
        $user->country_id = $request->input('userCountry');
        $user->city = $request->input('userCity');
        $user->about_yourself = $request->input('userAboutYourself');
        $user->save();
        var_dump($validated);die();

    }

    protected function regForm()
    {
        $countries = Country::all();

        return view('layouts.regForm', compact('countries'));
    }

    protected function test()
    {
        dd(123);
    }
}
