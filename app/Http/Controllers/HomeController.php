<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public $leftimageid;
    public $rightimageid;

    public function index()
    {
        $data = User::all()->random(2);
        $leftimageid = $data[0];
        $rightimageid = $data[1];

        User::where('id',$leftimageid->id)->update([
            'views' => $leftimageid->views + 1,
            
        ]);

        User::where('id',$rightimageid->id)->update([
            'views' => $rightimageid->views + 1
        ]);
        return view('Home',["leftimageid" => $leftimageid,"rightimageid" => $rightimageid]);
    }

    public function updatedetails($selectedid,$notselectedid)
    {
        $selected = User::where('id',$selectedid)->first();
        $notselected = User::where('id',$notselectedid)->first();
        User::where('id',$selectedid)->update([
            'hits' => $selected->hits + 1,
            'dislikes' => $selected->dislikes + 1
            
        ]);

        User::where('id',$notselected)->update([
            'hits' => $notselected->hits + 1,
            'dislikes' => $notselected->dislikes + 1
        ]);

        return redirect('/');
    }

    
}
