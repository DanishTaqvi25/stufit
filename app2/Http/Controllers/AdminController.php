<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\School;
use App\Models\Employ;
use App\Models\StudentClass;
use App\Models\Section;

use Session;
use DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }
	
	
	
	public function login_post(Request $request)
	{

	$credentials = $request->only('email','password');
	if(Auth::attempt($credentials)){
	if(Auth::user()->role_id == 1){
	$useLoginId=User::where(['email'=>$request->email])->get();

	session()->put('admin-login-id',$useLoginId[0]->id);
	return redirect(url('admin-dashboard'));

	}else{
	Session::flush();
	Auth::logout();
	\Session::put('err_msg','Invalid Username and Password.');
	//return redirect(url('admin-login'));

	return redirect()->route('admin-login');
	}
	}else{
	\Session::put('err_msg','Invalid Username and Password.');
	return redirect(url('admin-login'));
	}
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 /*---------------Dashboard-------------*/
	 
	  public function admin_dashboard()
    {
		$data['highlight'] = 'dashboard';
		
       return view('admin.dashboard',$data);
    }
	
	/*---------------End Dashboard-------------*/
	
	/*---------------School Management-------------*/
	
	public function school()
    {
		
		
		$data['highlight'] = 'school';
		$data['school'] = School::orderBy('date_time', 'desc')->get();
       return view('admin.school.index',$data);
    }
	
	public function post_add_school(Request $request)
    {
		
		$rand = mt_rand(1500, 5000);
		
		$date_time =  date("d-m-y h:i:s A");
		$length = 50;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$randomString;
			
		$userprofile=new School;
		$userprofile->school_id='PA'.$rand;
		$userprofile->school_name=$request->school_name;
		$userprofile->username=$request->username;
		$userprofile->password=$request->password;
		$userprofile->address=$request->address;
		$userprofile->city=$request->city;
		$userprofile->state=$request->state;
		$userprofile->pincode=$request->pincode;
		$userprofile->date_time=$date_time;
		$userprofile->remember_token=$randomString;
		$userprofile->status='0';
		$userprofile->save();
		\Session::put('success','Data Added Successfully.');
		return redirect()->route('school');
      
    }
	
	
	
	public function post_update_school(Request $request)
    {
		
		$id = $request->id;
		$userprofile=School::find($id);
		
		
		$userprofile->school_name=$request->school_name;
		$userprofile->username=$request->username;
		$userprofile->password=$request->password;
		$userprofile->address=$request->address;
		$userprofile->city=$request->city;
		$userprofile->state=$request->state;
		$userprofile->pincode=$request->pincode;
		$userprofile->save();
		\Session::put('success','Data Updated Successfully.');
		return redirect()->route('school');
      
    }
	
	public function school_delete($id)
    {
		School::where('id',$id)->delete();
		\Session::put('error','Data Deleted Successfully.');
		return redirect()->route('school');
    }
	
	public function compare_username(Request $request)
    {
		$login_username=$request->login_username;
		$result = DB::table('schools')->where('username',$login_username)->exists();
		if($result){
		echo 'Exist';
		exit();		
		}else{
		echo 'Available';	
		exit();
		}
	}
	
	
	public function change_status(Request $request)
	{
		$status = $request->status;
		 $id = $request->school_id;
			
		if($status=='0'){
		$res=School::find($id);
		$res->status='1';
		$res->save();
		echo '1';
		}
		
		if($status=='1'){
		$res=School::find($id);
		$res->status='0';
		$res->save();
		echo '0';
		}
		
	}
	
	
	
	
	
	
	
	
	
	public function generate_password(Request $request)
    {
		$length = 15;
		$characters = '0123456789^%$^#@#)(*)(abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		echo $randomString;
	}
	
	
	
	
	
	/*---------------School Management-------------*/
	
	
	/*---------------employ Management-------------*/
	
	public function employ()
    {
		$data['highlight'] = 'employ';
		$data['employ'] = Employ::orderBy('date_time', 'desc')->get();
       return view('admin.employ.index',$data);
    }
	
	public function compare_employ(Request $request)
    {
		$login_username=$request->login_username;
		$result = DB::table('employs')->where('username',$login_username)->exists();
		if($result){
		echo 'Exist';
		exit();		
		}else{
		echo 'Available';	
		exit();
		}
	}
	
	
	public function post_add_employ(Request $request)
    {
		
		$rand = mt_rand(1500, 5000);
		$date_time =  date("d-m-y h:i:s A");
		$length = 50;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$randomString;
			
		$userprofile=new Employ;
		$userprofile->employ_id='EM'.$rand;
		$userprofile->employ_name=$request->employ_name;
		$userprofile->email=$request->email;
		$userprofile->mobile=$request->mobile;
		$userprofile->username=$request->username;
		$userprofile->password=$request->password;
		$userprofile->address=$request->address;
		$userprofile->date_time=$date_time;
		$userprofile->remember_token=$randomString;
		$userprofile->status='0';
		$userprofile->save();
		\Session::put('success','Data Added Successfully.');
		return redirect()->route('employ');
      
    }
	
	
	public function post_update_employ(Request $request)
    {
		
		$id = $request->id;
		$userprofile=Employ::find($id);
		$userprofile->employ_name=$request->employ_name;
		$userprofile->email=$request->email;
		$userprofile->mobile=$request->mobile;
		$userprofile->username=$request->username;
		$userprofile->password=$request->password;
		$userprofile->address=$request->address;
		$userprofile->save();
		\Session::put('success','Data Updated Successfully.');
		return redirect()->route('employ');
      
    }
	
	
	public function change_employ_status(Request $request)
	{
		$status = $request->status;
		 $id = $request->school_id;
			
		if($status=='0'){
		$res=Employ::find($id);
		$res->status='1';
		$res->save();
		echo '1';
		}
		
		if($status=='1'){
		$res=Employ::find($id);
		$res->status='0';
		$res->save();
		echo '0';
		}
		
	}
	
	
	
	public function employ_delete($id)
    {
		Employ::where('id',$id)->delete();
		\Session::put('error','Data Deleted Successfully.');
		return redirect()->route('employ');
    }
	
	
	
	
	/*---------------employ Management-------------*/
	
	/*---------------student Management-------------*/
	
	public function student()
    {
		$data['highlight'] = 'student';
       return view('admin.student.index',$data);
    }
	
	public function add_student()
    {
		$data['highlight'] = 'student';
       return view('admin.student.add',$data);
    }
	
	
	public function edit_student()
    {
		$data['highlight'] = 'student';
       return view('admin.student.edit',$data);
    }
	
	
	
	public function add_student_physical_assessment()
    {
		$data['highlight'] = 'student';
       return view('admin.student.addPhysical',$data);
    }
	
	
	/*---------------student Management-------------*/
	
	
	/*---------------student_class Management-------------*/
	
	public function student_class()
    {
		$data['highlight'] = 'student-class';
		$data['class'] = StudentClass::orderBy('created_at','desc')->get();
       return view('admin.class.index',$data);
    }
	
	public function add_studentclass(Request $request)
    {
		
		
		$userprofile=new StudentClass;
		$userprofile->std_class=$request->std_class;
		$userprofile->save();
		\Session::put('success','Data Added Successfully.');
		return redirect()->route('student-class');
    }
	
	
	public function post_update_class(Request $request)
    {
		
		$id = $request->id;
		$userprofile=StudentClass::find($id);
		$userprofile->std_class=$request->std_class;
		$userprofile->save();
		\Session::put('success','Data Updated Successfully.');
		return redirect()->route('student-class');
      
    }
	
	public function class_delete($id)
    {
		StudentClass::where('id',$id)->delete();
		\Session::put('error','Data Deleted Successfully.');
		return redirect()->route('student-class');
    }
	
	
	
	/*---------------student_class Management-------------*/
	
	
	/*---------------student_section Management-------------*/
	
	public function student_section()
    {
		$data['highlight'] = 'student-section';
		$data['section'] = Section::orderBy('created_at','desc')->get();
       return view('admin.section.index',$data);
    }
	
	
	public function add_section(Request $request)
    {
		$userprofile=new Section;
		$userprofile->section=$request->section;
		$userprofile->save();
		\Session::put('success','Data Added Successfully.');
		return redirect()->route('student-section');
    }
	
	
	public function post_update_section(Request $request)
    {
		
		$id = $request->id;
		$userprofile=Section::find($id);
		$userprofile->section=$request->section;
		$userprofile->save();
		\Session::put('success','Data Updated Successfully.');
		return redirect()->route('student-section');
      
    }
	
	public function section_delete($id)
    {
		Section::where('id',$id)->delete();
		\Session::put('error','Data Deleted Successfully.');
		return redirect()->route('student-section');
    }
	
	
	
	
	
	
	
	/*---------------student_section Management-------------*/
	
	
	
	public function logout()
	{
	Auth::logout();
	Session::flush();
	return redirect(url('admin-login'));
	}
	
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
}
