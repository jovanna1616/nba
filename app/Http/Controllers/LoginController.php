<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Auth\Middleware\Authenticate;
use \App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {

        $this->middleware('guest', ['except' => 'destroy']);

    }



    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);




        // if user is_verified == false
        $user = User::where('email', $request->email)->first();

        
        if($user->is_verified == false) {

            
            return back()->withErrors(['message' => 'You must first verify Your account.']);

        }



        

        
        // if bad credentials
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            return redirect('/register')->withErrors([
                'message' => 'Bad credentials. Please try again'
            ]);
        }

        
        

        return redirect('/');
        
        
    }

    public function verification($id) {

        $user = User::find($id);
        $user->is_verified = true;
        $user->save();


        Auth::login($user);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return view('auth.logout');
    }
}
