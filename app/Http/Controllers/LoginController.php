<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class LoginController extends Controller
{

    function attempt(Request $request)
	{
		$username = $request->username;
	    $password = $request->password;
	    $user = DB::table('rt')->where('username', $username)->where('password', $password)->first();
        if(isset($user->id_rt)){
            session(['id' => $user->id_rt, 'username' => $user->username,'name' => $user->nama_rt, 'level' => $user->level]);
            return redirect('admin');
        }
        
        return Redirect::back()->withErrors(['These credentials do not match our records.', 'The Message']);

	}

	function destroy(Request $request){
		session()->flush();
		return redirect('/login');
	}
}
