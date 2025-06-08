<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
    public function create()
    {
        return view('admin.creatUsers');
    }
    public function store(Request $request)
    {
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]
        );
        return redirect()->route('users.index')
            ->with('success', 'Add successfuly...');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')
            ->with('success', 'successfuly...');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.editeUser', compact('user'));
    }
    public function update(Request $request, $id)
    {
 $user = User::findOrFail($id); // پیدا کردن کاربر قبل از بروزرسانی
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت بروزرسانی شد.');
    }
}
