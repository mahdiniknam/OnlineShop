<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){
        return view('master');
    }
    public function showLogin()
    {
        return view('admin.login');
    }
    public function showLoginUser()
    {
        return view('loginUser');
    }
    public function showRegiste()
    {
        return view('register');
    }
    public function storeUsers(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ],
            [
                'name.required' => 'نام باید وارد شود.',
                'email.required' => 'ایمیل الزامی است.',
                'email.email' => 'فرمت ایمیل صحیح نیست.',
                'email.unique' => 'این ایمیل قبلاً ثبت شده است.',
                'password.required' => 'رمز عبور باید وارد شود.',
                'password.min' => 'رمز عبور باید حداقل ۶ کاراکتر باشد.',
                'password.confirmed' => 'رمز عبور و تأیید آن یکسان نیستند.'
            ]
        );
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Auth::login($user);
        return redirect()->route('home.index');
    }

    public function doLoginusers()
    {
        if (!$user = User::where('email', '=', request()->input('email'))->first())
            return redirect()->back();

        if (!Hash::check(request()->input('password'), $user->password))
            return redirect()->back();

        Auth::login($user);
        return redirect()->route('home.index');
    }


    public function logoutusers(Request $request)
    {
        Auth::logout();
        return redirect()->route('home.index')->with('success', 'شما از حساب کاربری خارج شدید.');
    }

    // ----------------------------------------------------------------------------------------------------

    public function doLogin()
    {
        if (!$user = User::where('email', '=', request()->input('email'))->first())
            return redirect()->back();

        if (!Hash::check(request()->input('password'), $user->password))
            return redirect()->back();

        Auth::login($user);
        return view('master');
    }

    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('dashbord');
        }
        return redirect()->back();
    }
}
