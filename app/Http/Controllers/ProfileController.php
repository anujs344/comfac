<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class ProfileController extends Controller
{
    public function getdashboard()
    {
        $data = User::where('id',Auth::user()->id)->first();
        return view('Users.Dashboard',["data" => $data]);
    }

    public function logout()
    {
        
        Auth::guard('web')->logout();
        return redirect()->to('/');
    }

}
