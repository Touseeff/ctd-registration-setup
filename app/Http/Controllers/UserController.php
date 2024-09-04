<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resgister');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // dd($request->toArray());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            $user_name = $request->name;
            // Send:Mail('', $user_name,'');
            Mail::to('tauseefdevelopment000@gmail.com
')->send(new UserRegistrationMail($user_name));
            return redirect()->route('login')->with([
                'status' => 'success',
                'msg' => 'Registered successfully',
            ]);
        } else {
            return redirect()->route('user.create')->with([
                'status' => 'danger',
                'msg' => 'User registration failed',
            ]);
        }
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

    public function dashboard()
    {
        return view('dashboard');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        $user = Auth::user();
        if ($user) {
            Auth::logout();
            return redirect()->route('login')->with([
                'status' => 'success',
                'msg' => 'User logged out successfully',
            ]);
        }   
    }
}
