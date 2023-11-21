<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employ.login');
    }
	
	
	public function login_post(Request $request)
	{

	$email = $request->email;
	$password = $request->password;
	$result = DB::table('employs')->where('email',$email)->where('password',$password)->exists();
	
	if($result){
		$result1 = DB::table('employs')->where('email',$email)->get();
		 $emp_id =	$result1[0]->id;
		 $request->session()->put('employ_id',$emp_id);
		return redirect(url('employ-dashboard'));
	}else{
	\Session::put('err_msg','Invalid Username and Password.');
	return redirect(url('employ-login'));
	}
	
	}
	
	
	public function employ_dashboard()
    {
		
		//echo $st_id = session('employ_id');
		
		$data['highlight'] = 'dashboard';
       return view('employ.dashboard',$data);
    }
	
	public function employ_student_profile()
    {
		$data['highlight'] = 'dashboard';
       return view('employ.student.add',$data);
	}
	
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
	
	
	public function logout()
	{
	Auth::logout();
	Session::flush();
	return redirect(url('employ-login'));
	}
	
}
