<?php

namespace App\Repository\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;



class AuthControllerRespository
{
    public $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create(Request $req)
    {
        
        try{
            $user->name = $req->name;
            $user->password = Hash::make( $req->password );
            $imageName = time().'.'.$request->image->extension(); 
            $path = storage_path('public');
            $request->image->storeAs($path.'/images/', $imageName);
            $imagepath = storage_path($path.'/images/'.$imageName);
            $user->imagename = $imageName;
            $user->imagepath = $imagepath;
            $user->save();

        }catch(exception $e)
        {
            return $e;
        }



    }

}