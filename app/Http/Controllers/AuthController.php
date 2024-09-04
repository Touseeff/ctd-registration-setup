<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("login");
    }


    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.dashboard')->with([
                'status' =>
                'success',
                'msg' =>
                'Login Successfully!.'
            ]);
        } else {
            return redirect()->back()->with([
                'status' => 'danger',
                'msg' => 'email or password invalid'
            ]);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    // public function ste(UserRequest $request){

    // }

    public function forgot()
    {
        return view('user_forgot');
    }

    public function forgotMatch(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {    
            $reset_password_code = $user->reset_password  = $request->email . "-" . rand(100, 10000000);
            if ($user->save()) {
                return redirect()->route('reset.create')->with([
                    'reset_password_code' => $reset_password_code,
                    'status' => 'success',
                    'msg' => 'Verification Email Successfully'
                ]);
            } else {
                return redirect()->back()->with([
                    'status' => 'danger',
                    'msg' => 'Verification Email Faild Tray Again'
                ]);
            }
        } else {
            return redirect()->route('forgot.create')->with([
                'status' => 'danger',
                'msg' => 'Record Not Found!.'
            ]);
        }
    }

    public function passwordReset()
    {
        return view('reset_password');
    }
    public function resetPasswordStore(Request $request)
    {
        $validation  = $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user = User::where('reset_password', $request->reset_password_code)->first();
        if ($user) {
            $user->password = bcrypt($request->password);
            $user->reset_password = "";
            if ($user->save()) {
                // echo "fdfd";
                return redirect()->route("login")->with([
                    'status' => 'success',
                    'msg' => 'Password Rest Successfully'
                ]);
            } else {
                return redirect()->back()->with([
                    'status' => 'danger',
                    'msg' => 'Not record Found!'
                ]);
            }
        } else {
            return redirect()->back()->with([
                'status' => 'danger',
                'msg' => 'Not record Found!'
            ]);
        }
    }




    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
