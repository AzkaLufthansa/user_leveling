<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:admin menu', ['only' => ['index', 'profile', 'editProfile', 'users']]);
        // $this->middleware('permission:member menu', ['only' => ['profile', 'editProfile']]);
    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function editProfile()
    {
        return view('dashboard.editProfile');
    }

    public function users()
    {
        return view('dashboard.user', [
            'users' => User::all()
        ]);
    }
}
