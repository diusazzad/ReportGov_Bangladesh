<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function adminDashboard()
    {
        // Logic for admin dashboard
        return view('auth.admin.dashboard');
    }

    public function userDashboard()
    {
        // Logic for user dashboard
        return view('auth.user.dashboard');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                // return redirect()->route('auth.admin.dashboard');
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->to('/user/dashboard');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Invalid credentials');
        }
    }



    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,user',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    // Admin Part
    public function tableindex()
    {
        $users = User::select('name', 'role')->get();

        return view('auth.admin.dashboard', compact('users'));
    }
    // Paginate
    public function adminPaginate()

    {

        $data = User::paginate(5);

        return view('auth.admin.dashboard', compact('data'));
    }
}
