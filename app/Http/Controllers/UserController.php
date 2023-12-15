<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    //  public function insertUser(Request $request)
    // {
    //     $user = new Users();
    //     $user->username = $request->input("username");
    //     $user->email= $request->input("email");
    //     $user->password = $request->input("password");
    //     $user->save();
    // }

 public function insertUser(Request $request)
    {
        $valid = $request->validate(
            [
                'username' => 'required|string',
                'email' => ['required', 'email'],
                'password' => 'required|string'
            ]
        );

        if ($valid != null) {
            $created = Carbon::now('Asia/Phnom_Penh');
            $createds = explode(' ', $created);

            $user = new Users();
            $user->username = $valid['username'];
            $user->email = $valid['email'];
            $user->password = $createds[1] . $valid['password'] . $createds[0];
            $user->created_at = $created;
            $user->updated_at = $created;
            $user->save();

            $usr = Users::select('id')->where('email', $valid['email'])->first();

            return $this -> loginUser($request);
            
        }

        return redirect('/');
    }

    public function loginUser(Request $request)
    {
        $valid = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => 'required|string'
            ]
        );

        if ($valid != null) {
            $user = Users::where('email', $valid['email'])->first();
            $creds = explode(' ', $user->updated_at);
            $pass = $creds[1] . $valid['password'] . $creds[0];
            if (Hash::check($pass, $user->password)) {
                $this->createUserSession($request, $user);
                return redirect('/user/homepage');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function createUserSession(Request $request, $user)
    {
        $request->session()->put('user_session', $user -> id);
    }

    public function dashboardUser(Request $request)
    {
        $user = Users::find($request->session()->get('token'));
        return redirect('/homepage');
    }

    public function logoutUser(Request $request)
    {
        $request->session()->forget('user_session');
        return redirect('/');
    }
}
