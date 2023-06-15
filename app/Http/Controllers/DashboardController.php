<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class DashboardController extends Controller
{
    use HasRoles;
    public function index(){
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.page');
        } else {
            return redirect()->route('user.page');
        }
    }
    public function indexUser(){
        return view('dashboard.indexUser');
    }
    public function indexAdmin(){
        return view('dashboard.indexAdmin');
    }
}