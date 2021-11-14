<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registerControllers
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.Authentication');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Auth.login');
    }
    public function userLogin(Request $request) {
        // Validation check
        $userData = $request->validate([
            'email' => 'required',
            'password' => 'required|min:4|max:32'
        ]);

        // Attempt to login
        if(Auth::attempt($userData)) {

            $userInfo = auth()->user();
          // $userInfo->profile();

            return view('dashbord', [
            'name' => $userInfo->name
            ]);

        } else {
            return redirect('login')->with('errorMsg', 'Sorry! your information wrong!');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        if ($request->get('password') != $request->get('confirm_password')){
            // return "You password and confirm password doesn't match";
            return redirect('register')->with('errorMsg', 'your password and confirm password are not match');
    }


        //insert data
        $obj=new User();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->password=hash::make($request->password);
        //$obj->confirm_password=$request->confirm_password;
      //   $obj->save();
        if ($obj->save()) {
            return redirect('login')->with('success', 'Successfully Registered! Please, do login');
        }
        else {
            return redirect('register')->with('errorMsg', 'Register Failed!');
        }



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
    public function destroy($id)
    {
        //
    }


}
