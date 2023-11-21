<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\StudentFirst;
use Session;
use DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('school.login');
    }
	
	
	public function login_post(Request $request)
	{

	$username = $request->username;
	$password = $request->password;
	$result = DB::table('schools')->where('username',$username)->where('password',$password)->exists();
	if($result){
		$result1 = DB::table('schools')->where('username',$username)->get();
		 $emp_id =	$result1[0]->id;
		 $status =	$result1[0]->status;
		 if($status == '0'){
			 \Session::put('err_msg','Account Deactivated.');
	return redirect(url('school-login'));
		 }
		 
		 $request->session()->put('school_id',$emp_id);
		return redirect(url('school-dashboard'));
	}else{
	\Session::put('err_msg','Invalid Username and Password.');
	return redirect(url('school-login'));
	}
	
	}
	
	
	public function schools_dashboard()
    { 
		
		$school_id = session('school_id');
	   $data['highlight'] = 'dashboard';
	   $data['student_count'] = DB::table('students')->where('school_Name',$school_id)->count('id');
       return view('school.dashboard',$data);
    }
	
	public function school_student_list($id)
    {
	   $data['highlight'] = 'school-student-list';
	   $data['student'] = Student::where('school_Name',$id)->orderBy('created_at', 'desc')->get();
       return view('school.student.index',$data);
    }
	
	
	public function add_school_student()
    {
		
	   $data['highlight'] = 'school-student-list';
       return view('school.student.add',$data);
    }
	
	
	public function edit_school_student()
    {
		
	   $data['highlight'] = 'school-student-list';
       return view('school.student.edit',$data);
    }
	
	
	public function view_school_student_details($id)
    {
		$data['student'] = Student::where('id',$id)->get();
		$data['studentFirst'] = StudentFirst::where('id',$id)->get();
	    $data['highlight'] = 'school-student-list';
        return view('school.student.detail',$data);
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
	return redirect(url('school-login'));
	}
	
}
