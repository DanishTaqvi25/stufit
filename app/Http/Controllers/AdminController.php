<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\School;
use App\Models\Employ;
use App\Models\StudentClass;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentFirst;

use Validator;
use Hash;
use Session;
use DB;
use PDF;

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
	
	public function generatePDF($id)
    {
		
		
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'id' => $id
        ];
          
        $pdf = PDF::loadView('myPDF', $data)->setOptions(['defaultFont' => 'Roboto']);;
    
	      return view('myPDF', $data);
    // return $pdf->download('ReportCard.pdf');
    }
	
	public function view_pdf()
    {
         return view('admin.student.pdf');
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
		$data['school'] = School::orderBy('date_time','desc')->get();
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
		$userprofile->school_id='SCH'.$rand;
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
		$userprofile->employ_id='EMP'.$rand;
		$userprofile->employ_name=$request->employ_name;
		$userprofile->email=$request->email;
		$userprofile->mobile=$request->mobile;
		$userprofile->city=$request->city;
		$userprofile->state=$request->state;
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
		$userprofile->city=$request->city;
		$userprofile->state=$request->state;
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
		$data['student'] = Student::orderBy('created_at', 'desc')->get();
       return view('admin.student.index',$data);
    }
	
	public function add_student()
    {
		$data['highlight'] = 'student';
		$data['school'] = School::orderBy('id','desc')->get();
		$data['StudentClass'] = StudentClass::orderBy('id','desc')->get();
		$data['Section'] = Section::orderBy('id','desc')->get();
       return view('admin.student.add',$data);
    }
	
	
	public function edit_student($id)
    {
		$data['highlight'] = 'student';
		$data['student'] = Student::where('id',$id)->get();
		$data['studentFirst'] = StudentFirst::where('id',$id)->get();
		$data['school'] = School::orderBy('id','desc')->get();
		$data['StudentClass'] = StudentClass::orderBy('id','desc')->get();
		$data['Section'] = Section::orderBy('id','desc')->get();
       return view('admin.student.edit',$data);
    }
	
	public function add_student_details(Request $request){
		
	    $Student_Name =  $request->Student_Name;
		$Gender =  $request->Gender;
		$rand = mt_rand(1500, 5000);
		//echo $request->SocialChanges;
		//exit();
		
		$userprofile=new Student;
		$userprofile->student_id='STU'.$rand;
		$userprofile->student_Name=$request->Student_Name;
		$userprofile->gender=$request->Gender;
		$userprofile->address=$request->Address;
		$userprofile->email=$request->Email;
		$userprofile->emergency=$request->Emergency;
		$userprofile->father_Name=$request->Father_Name;
		$userprofile->birth=$request->Birth;
		$userprofile->mother_Name=$request->Mother_Name;
		$userprofile->school_Name=$request->School_Name;
		$userprofile->studentClass=$request->StudentClass;
		$userprofile->section=$request->Section;
		$userprofile->siblings=$request->Siblings;
		
		$userprofile->height=$request->Height;
		$userprofile->weight=$request->Weight;
		$userprofile->bmi=$request->BMI;
		$userprofile->body_Temperature=$request->Body_Temperature;
		$userprofile->body_Temperature_value=$request->Body_Temperature_value;
		$userprofile->blood_Pressure_Systolic=$request->Blood_Pressure_Systolic;
		$userprofile->blood_Pressure_Diastolic=$request->Blood_Pressure_Diastolic;
		$userprofile->pulse_Rate=$request->Pulse_Rate;
		$userprofile->oxygen_Saturation=$request->Oxygen_Saturation;
		$userprofile->postureValue=$request->PostureValue;
		$userprofile->upperLimb=$request->UpperLimb;
		$userprofile->neckLimb=$request->NeckLimb;
		$userprofile->physical_both=$request->Both;
		$userprofile->Ddystrophy=$request->Dystrophy;
		$userprofile->astrophy=$request->Astrophy;
		$userprofile->endurance=$request->Endurance;
		$userprofile->stamina=$request->Stamina;
		$userprofile->pain=$request->Pain;
		$userprofile->pain_Position=$request->Pain_Position;
		$userprofile->spasm=$request->Spasm;
		$userprofile->spasm_Position=$request->Spasm_Position;
		$userprofile->physical_advice=$request->Physical_advice;
		$userprofile->physical_remark=$request->Physical_remark;
		
		$userprofile->leftVision=$request->LeftVision;
		$userprofile->rightVision=$request->RightVision;
		$userprofile->leftRefraction=$request->LeftRefraction;
		$userprofile->rightRefraction=$request->RightRefraction;
		$userprofile->leftColorVision=$request->LeftColorVision;
		$userprofile->rightColorVision=$request->RightColorVision;
		$userprofile->leftDisease=$request->LeftDisease;
		$userprofile->rightDisease=$request->RightDisease;
		$userprofile->leftSquint=$request->LeftSquint;
		$userprofile->rightSquint=$request->RightSquint;
		$userprofile->leftPtosis=$request->LeftPtosis;
		$userprofile->rightPtosis=$request->RightPtosis;
		$userprofile->leftNystugmus=$request->LeftNystugmus;
		$userprofile->rightNystugmus=$request->RightNystugmus;
		$userprofile->leftCataract=$request->LeftCataract;
		$userprofile->rightCataract=$request->RightCataract;
		$userprofile->leftEyeBall=$request->LeftEyeBall;
		$userprofile->rightEyeBall=$request->RightEyeBall;
		$userprofile->leftItching=$request->LeftItching;
		$userprofile->rightItching=$request->RightItching;
		$userprofile->leftDryness=$request->LeftDryness;
		$userprofile->rightDryness=$request->RightDryness;
		$userprofile->leftTears=$request->LeftTears;
		$userprofile->rightTears=$request->RightTears;
		$userprofile->leftRedEyes=$request->LeftRedEyes;
		$userprofile->rightRedEyes=$request->RightRedEyes;
		$userprofile->leftYellowishEyes=$request->LeftYellowishEyes;
		$userprofile->rightYellowishEyes=$request->RightYellowishEyes;
		$userprofile->left_Eye_Advice=$request->Left_Eye_Advice;
		$userprofile->right_Eye_Advice=$request->Right_Eye_Advice;
		$userprofile->left_Eye_Remark=$request->Left_Eye_Remark;
		$userprofile->right_Eye_Remark=$request->Right_Eye_Remark;
		
		$userprofile->caries=$request->Caries;
		$userprofile->periodontal_text=$request->Periodontal_text;
		$userprofile->orthodontic=$request->Orthodontic;
		$userprofile->extraction=$request->Extraction;
		$userprofile->spaceMaintainer=$request->SpaceMaintainer;
		$userprofile->oralHygieneStatus=$request->OralHygieneStatus;
		$userprofile->sugarIntake=$request->SugarIntake;
		$userprofile->brushed=$request->Brushed;
		$userprofile->malpositioned=$request->Malpositioned;
		$userprofile->malpositioned_Specify_text=$request->Malpositioned_Specify_text;
		$userprofile->dental_Advice=$request->Dental_Advice;
		$userprofile->dental_Remark=$request->Dental_Remark;
		
		
		$userprofile->paleSkin=$request->PaleSkin;
		$userprofile->heartbeats=$request->Heartbeats;
		$userprofile->shortness=$request->Shortness;
		$userprofile->dizziness=$request->Dizziness;
		$userprofile->coldHands=$request->ColdHands;
		$userprofile->anemia=$request->Anemia;
		$userprofile->fatigue=$request->Fatigue;
		$userprofile->deficiency=$request->Deficiency;
		$userprofile->obesity=$request->Obesity;
		$userprofile->ideal_Body_Weight=$request->Ideal_Body_Weight;
		$userprofile->ideal_Calories=$request->Ideal_Calories;
		$userprofile->microNutrient=$request->MicroNutrient;
		$userprofile->fluidEstimation=$request->FluidEstimation;
		$userprofile->fluid_Estimation=$request->Fluid_Estimation;
		$userprofile->nutrition_Advice=$request->Nutrition_Advice;
		$userprofile->nutrition_Remark=$request->Nutrition_Remark;
		
		$userprofile->annoyed=$request->Annoyed;
		$userprofile->angry=$request->Angry;
		$userprofile->blame=$request->Blame;
		$userprofile->authorities=$request->Authorities;
		$userprofile->tantrums=$request->Tantrums;
		$userprofile->frustations=$request->Frustations;
		$userprofile->behaviour=$request->Behaviour;
		$userprofile->spelling=$request->Spelling;
		$userprofile->paraphrasing=$request->Paraphrasing;
		$userprofile->poorMemory=$request->PoorMemory;
		
		$userprofile->surroundings=$request->Surroundings;
		$userprofile->quite=$request->Quite;
		$userprofile->fidgetting=$request->Fidgetting;
		$userprofile->concentrateOnTask=$request->ConcentrateOnTask;
		$userprofile->physicalMovements=$request->PhysicalMovements;
		$userprofile->excessiveTalking=$request->ExcessiveTalking;
		$userprofile->wait=$request->Wait;
		$userprofile->acting=$request->Acting;
		$userprofile->interruption=$request->Interruption;
		$userprofile->deficite=$request->Deficite;
		
		$userprofile->selfEsteem=$request->SelfEsteem;
		$userprofile->irritableActions=$request->IrritableActions;
		$userprofile->suddenAnger=$request->SuddenAnger;
		$userprofile->frequentAbsence=$request->FrequentAbsence;
		$userprofile->suicide=$request->Suicide;
		$userprofile->recklessBehaviour=$request->RecklessBehaviour;
		$userprofile->cryingFrequently=$request->CryingFrequently;
		
		
		
		$userprofile->save();
		
		$student_id = $userprofile->id;
		
	
		
		
		$userprofile=new StudentFirst;
		$userprofile->student_id=$student_id;
		$userprofile->depression=$request->Depression;
		$userprofile->edge=$request->Edge;
		$userprofile->socialChanges=$request->SocialChanges;
		$userprofile->physicalChanges=$request->PhysicalChanges;
		$userprofile->sleepDisturbance=$request->SleepDisturbance;
		$userprofile->poorSchool=$request->PoorSchool;
		$userprofile->panicAttack=$request->PanicAttack;
		$userprofile->anxiety=$request->Anxiety;
		$userprofile->performance=$request->Performance;
		$userprofile->aboutAppearence=$request->AboutAppearence;
		$userprofile->comparesSelf=$request->ComparesSelf;
		$userprofile->ugly=$request->Ugly;
		$userprofile->specify_ugly=$request->Specify_ugly;
		$userprofile->perfectImage=$request->PerfectImage;
		$userprofile->incessant=$request->Incessant;
		$userprofile->emotions=$request->Emotions;
		$userprofile->intolerence=$request->Intolerence;
		$userprofile->specify_tolerance=$request->Specify_tolerance;
		$userprofile->timeAlone=$request->TimeAlone;
		$userprofile->pullsBack=$request->PullsBack;
		$userprofile->modelling=$request->Modelling;
		$userprofile->specify_obessed=$request->Specify_obessed;
		$userprofile->ask=$request->Ask;
		$userprofile->weightGain=$request->WeightGain;
		$userprofile->abdominal=$request->Abdominal;
		$userprofile->bloated=$request->Bloated;
		$userprofile->circles=$request->Circles;
		$userprofile->bathroom=$request->Bathroom;
		$userprofile->phobia=$request->Phobia;
		$userprofile->mobileAddiction=$request->MobileAddiction;
		$userprofile->memoryLoss=$request->MemoryLoss;
		$userprofile->substance=$request->Substance;
		$userprofile->measurationCycle=$request->MeasurationCycle;
		$userprofile->irregularPeriod=$request->IrregularPeriod;
		$userprofile->painDuring=$request->PainDuring;
		$userprofile->urination=$request->Urination;
		$userprofile->psycology_Advice=$request->psycology_Advice;
		$userprofile->psycology_Remark=$request->psycology_Remark;
		
		$userprofile->chest=$request->Chest;
		$userprofile->abdomen=$request->Abdomen;
		$userprofile->active_Infectious_Disease=$request->Active_Infectious_Disease;
		$userprofile->cleft=$request->Cleft;
		$userprofile->club=$request->Club;
		$userprofile->congenital=$request->Congenital;
		$userprofile->deafness=$request->Deafness;
		$userprofile->skinCondition=$request->SkinCondition;
		$userprofile->otitis=$request->Otitis;
		$userprofile->neuroMotor=$request->NeuroMotor;
		$userprofile->bodyType=$request->BodyType;
		$userprofile->general_Advice=$request->General_Advice;
		$userprofile->general_Remark=$request->General_Remark;
		
		$userprofile->speech_Milestone=$request->Speech_Milestone;
		$userprofile->comprehension=$request->Comprehension;
		$userprofile->expression=$request->Expression;
		$userprofile->communication=$request->Communication;
		$userprofile->auditory=$request->Auditory;
		$userprofile->hearingLoss=$request->HearingLoss;
		$userprofile->tinnitus=$request->Tinnitus;
		$userprofile->ear=$request->Ear;
		$userprofile->whichEar=$request->WhichEar;
		$userprofile->calling=$request->Call;
		$userprofile->hearing=$request->Hearing;
		$userprofile->bilateral=$request->Bilateral;
		$userprofile->medicalHistory=$request->MedicalHistory;
		$userprofile->speech_Advice=$request->Speech_Advice;
		$userprofile->speech_Remark=$request->Speech_Remark;
		$userprofile->studentCity=$request->studentCity;
		$userprofile->studentState=$request->studentState;
		
		
		
		$userprofile->save();
		
	
	}
	
	
	public function update_student_details(Request $request){
		
	    $Student_Name =  $request->Student_Name;
	    $Student_id =  $request->Student_id;
		$Gender =  $request->Gender;
		$rand = mt_rand(1500, 5000);
		//echo $request->SocialChanges;
		//exit();
		
		
		$userprofile=Student::find($Student_id);
		$userprofile->student_Name=$request->Student_Name;
		$userprofile->gender=$request->Gender;
		$userprofile->address=$request->Address;
		$userprofile->email=$request->Email;
		$userprofile->emergency=$request->Emergency;
		$userprofile->father_Name=$request->Father_Name;
		$userprofile->birth=$request->Birth;
		$userprofile->mother_Name=$request->Mother_Name;
		$userprofile->school_Name=$request->School_Name;
		$userprofile->studentClass=$request->StudentClass;
		$userprofile->section=$request->Section;
		$userprofile->siblings=$request->Siblings;
		
		$userprofile->height=$request->Height;
		$userprofile->weight=$request->Weight;
		$userprofile->bmi=$request->BMI;
		$userprofile->body_Temperature=$request->Body_Temperature;
		$userprofile->body_Temperature_value=$request->Body_Temperature_value;
		$userprofile->blood_Pressure_Systolic=$request->Blood_Pressure_Systolic;
		$userprofile->blood_Pressure_Diastolic=$request->Blood_Pressure_Diastolic;
		$userprofile->pulse_Rate=$request->Pulse_Rate;
		$userprofile->oxygen_Saturation=$request->Oxygen_Saturation;
		$userprofile->postureValue=$request->PostureValue;
		$userprofile->upperLimb=$request->UpperLimb;
		$userprofile->neckLimb=$request->NeckLimb;
		$userprofile->physical_both=$request->Both;
		$userprofile->Ddystrophy=$request->Dystrophy;
		$userprofile->astrophy=$request->Astrophy;
		$userprofile->endurance=$request->Endurance;
		$userprofile->stamina=$request->Stamina;
		$userprofile->pain=$request->Pain;
		$userprofile->pain_Position=$request->Pain_Position;
		$userprofile->spasm=$request->Spasm;
		$userprofile->spasm_Position=$request->Spasm_Position;
		$userprofile->physical_advice=$request->Physical_advice;
		$userprofile->physical_remark=$request->Physical_remark;
		
		$userprofile->leftVision=$request->LeftVision;
		$userprofile->rightVision=$request->RightVision;
		$userprofile->leftRefraction=$request->LeftRefraction;
		$userprofile->rightRefraction=$request->RightRefraction;
		$userprofile->leftColorVision=$request->LeftColorVision;
		$userprofile->rightColorVision=$request->RightColorVision;
		$userprofile->leftDisease=$request->LeftDisease;
		$userprofile->rightDisease=$request->RightDisease;
		$userprofile->leftSquint=$request->LeftSquint;
		$userprofile->rightSquint=$request->RightSquint;
		$userprofile->leftPtosis=$request->LeftPtosis;
		$userprofile->rightPtosis=$request->RightPtosis;
		$userprofile->leftNystugmus=$request->LeftNystugmus;
		$userprofile->rightNystugmus=$request->RightNystugmus;
		$userprofile->leftCataract=$request->LeftCataract;
		$userprofile->rightCataract=$request->RightCataract;
		$userprofile->leftEyeBall=$request->LeftEyeBall;
		$userprofile->rightEyeBall=$request->RightEyeBall;
		$userprofile->leftItching=$request->LeftItching;
		$userprofile->rightItching=$request->RightItching;
		$userprofile->leftDryness=$request->LeftDryness;
		$userprofile->rightDryness=$request->RightDryness;
		$userprofile->leftTears=$request->LeftTears;
		$userprofile->rightTears=$request->RightTears;
		$userprofile->leftRedEyes=$request->LeftRedEyes;
		$userprofile->rightRedEyes=$request->RightRedEyes;
		$userprofile->leftYellowishEyes=$request->LeftYellowishEyes;
		$userprofile->rightYellowishEyes=$request->RightYellowishEyes;
		$userprofile->left_Eye_Advice=$request->Left_Eye_Advice;
		$userprofile->right_Eye_Advice=$request->Right_Eye_Advice;
		$userprofile->left_Eye_Remark=$request->Left_Eye_Remark;
		$userprofile->right_Eye_Remark=$request->Right_Eye_Remark;
		
		$userprofile->caries=$request->Caries;
		$userprofile->periodontal_text=$request->Periodontal_text;
		$userprofile->orthodontic=$request->Orthodontic;
		$userprofile->extraction=$request->Extraction;
		$userprofile->spaceMaintainer=$request->SpaceMaintainer;
		$userprofile->oralHygieneStatus=$request->OralHygieneStatus;
		$userprofile->sugarIntake=$request->SugarIntake;
		$userprofile->brushed=$request->Brushed;
		$userprofile->malpositioned=$request->Malpositioned;
		$userprofile->malpositioned_Specify_text=$request->Malpositioned_Specify_text;
		$userprofile->dental_Advice=$request->Dental_Advice;
		$userprofile->dental_Remark=$request->Dental_Remark;
		
		
		$userprofile->paleSkin=$request->PaleSkin;
		$userprofile->heartbeats=$request->Heartbeats;
		$userprofile->shortness=$request->Shortness;
		$userprofile->dizziness=$request->Dizziness;
		$userprofile->coldHands=$request->ColdHands;
		$userprofile->anemia=$request->Anemia;
		$userprofile->fatigue=$request->Fatigue;
		$userprofile->deficiency=$request->Deficiency;
		$userprofile->obesity=$request->Obesity;
		$userprofile->ideal_Body_Weight=$request->Ideal_Body_Weight;
		$userprofile->ideal_Calories=$request->Ideal_Calories;
		$userprofile->microNutrient=$request->MicroNutrient;
		$userprofile->fluidEstimation=$request->FluidEstimation;
		$userprofile->fluid_Estimation=$request->Fluid_Estimation;
		$userprofile->nutrition_Advice=$request->Nutrition_Advice;
		$userprofile->nutrition_Remark=$request->Nutrition_Remark;
		
		$userprofile->annoyed=$request->Annoyed;
		$userprofile->angry=$request->Angry;
		$userprofile->blame=$request->Blame;
		$userprofile->authorities=$request->Authorities;
		$userprofile->tantrums=$request->Tantrums;
		$userprofile->frustations=$request->Frustations;
		$userprofile->behaviour=$request->Behaviour;
		$userprofile->spelling=$request->Spelling;
		$userprofile->paraphrasing=$request->Paraphrasing;
		$userprofile->poorMemory=$request->PoorMemory;
		
		$userprofile->surroundings=$request->Surroundings;
		$userprofile->quite=$request->Quite;
		$userprofile->fidgetting=$request->Fidgetting;
		$userprofile->concentrateOnTask=$request->ConcentrateOnTask;
		$userprofile->physicalMovements=$request->PhysicalMovements;
		$userprofile->excessiveTalking=$request->ExcessiveTalking;
		$userprofile->wait=$request->Wait;
		$userprofile->acting=$request->Acting;
		$userprofile->interruption=$request->Interruption;
		$userprofile->deficite=$request->Deficite;
		
		$userprofile->selfEsteem=$request->SelfEsteem;
		$userprofile->irritableActions=$request->IrritableActions;
		$userprofile->suddenAnger=$request->SuddenAnger;
		$userprofile->frequentAbsence=$request->FrequentAbsence;
		$userprofile->suicide=$request->Suicide;
		$userprofile->recklessBehaviour=$request->RecklessBehaviour;
		$userprofile->cryingFrequently=$request->CryingFrequently;
		
		$userprofile->save();
		
		
		
	
		
		$userprofile=StudentFirst::find($Student_id);
		$userprofile->depression=$request->Depression;
		$userprofile->edge=$request->Edge;
		$userprofile->socialChanges=$request->SocialChanges;
		$userprofile->physicalChanges=$request->PhysicalChanges;
		$userprofile->sleepDisturbance=$request->SleepDisturbance;
		$userprofile->poorSchool=$request->PoorSchool;
		$userprofile->panicAttack=$request->PanicAttack;
		$userprofile->anxiety=$request->Anxiety;
		$userprofile->performance=$request->Performance;
		$userprofile->aboutAppearence=$request->AboutAppearence;
		$userprofile->comparesSelf=$request->ComparesSelf;
		$userprofile->ugly=$request->Ugly;
		$userprofile->specify_ugly=$request->Specify_ugly;
		$userprofile->perfectImage=$request->PerfectImage;
		$userprofile->incessant=$request->Incessant;
		$userprofile->emotions=$request->Emotions;
		$userprofile->intolerence=$request->Intolerence;
		$userprofile->specify_tolerance=$request->Specify_tolerance;
		$userprofile->timeAlone=$request->TimeAlone;
		$userprofile->pullsBack=$request->PullsBack;
		$userprofile->modelling=$request->Modelling;
		$userprofile->specify_obessed=$request->Specify_obessed;
		$userprofile->ask=$request->Ask;
		$userprofile->weightGain=$request->WeightGain;
		$userprofile->abdominal=$request->Abdominal;
		$userprofile->bloated=$request->Bloated;
		$userprofile->circles=$request->Circles;
		$userprofile->bathroom=$request->Bathroom;
		$userprofile->phobia=$request->Phobia;
		$userprofile->mobileAddiction=$request->MobileAddiction;
		$userprofile->memoryLoss=$request->MemoryLoss;
		$userprofile->substance=$request->Substance;
		$userprofile->measurationCycle=$request->MeasurationCycle;
		$userprofile->irregularPeriod=$request->IrregularPeriod;
		$userprofile->painDuring=$request->PainDuring;
		$userprofile->urination=$request->Urination;
		$userprofile->psycology_Advice=$request->psycology_Advice;
		$userprofile->psycology_Remark=$request->psycology_Remark;
		
		$userprofile->chest=$request->Chest;
		$userprofile->abdomen=$request->Abdomen;
		$userprofile->active_Infectious_Disease=$request->Active_Infectious_Disease;
		$userprofile->cleft=$request->Cleft;
		$userprofile->club=$request->Club;
		$userprofile->congenital=$request->Congenital;
		$userprofile->deafness=$request->Deafness;
		$userprofile->skinCondition=$request->SkinCondition;
		$userprofile->otitis=$request->Otitis;
		$userprofile->neuroMotor=$request->NeuroMotor;
		$userprofile->bodyType=$request->BodyType;
		$userprofile->general_Advice=$request->General_Advice;
		$userprofile->general_Remark=$request->General_Remark;
		
		
		$userprofile->speech_Milestone=$request->Speech_Milestone;
		$userprofile->comprehension=$request->Comprehension;
		$userprofile->expression=$request->Expression;
		$userprofile->communication=$request->Communication;
		$userprofile->auditory=$request->Auditory;
		$userprofile->hearingLoss=$request->HearingLoss;
		$userprofile->tinnitus=$request->Tinnitus;
		$userprofile->ear=$request->Ear;
		$userprofile->whichEar=$request->WhichEar;
		$userprofile->calling=$request->Call;
		$userprofile->hearing=$request->Hearing;
		$userprofile->bilateral=$request->Bilateral;
		$userprofile->medicalHistory=$request->MedicalHistory;
		$userprofile->speech_Advice=$request->Speech_Advice;
		$userprofile->speech_Remark=$request->Speech_Remark;
		$userprofile->studentCity=$request->studentCity;
		$userprofile->studentState=$request->studentState;
		
		
		
		$userprofile->save();
		
	
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
