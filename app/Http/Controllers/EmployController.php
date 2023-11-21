<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\School;
use App\Models\Employ;
use App\Models\StudentClass;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentFirst;
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

	$username = $request->username;
	$password = $request->password;
	$result = DB::table('employs')->where('username',$username)->where('password',$password)->exists();
	
	if($result){
		$result1 = DB::table('employs')->where('username',$username)->get();
		 $emp_id =	$result1[0]->id;
		  $status =	$result1[0]->status;
		 if($status == '0'){
			 \Session::put('err_msg','Account Deactivated.');
	return redirect(url('employ-login'));
		 }
		
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
		$data['student'] = Student::orderBy('created_at', 'desc')->get();
       return view('employ.dashboard',$data);
    }
	
	public function employ_student_profile()
    {
		$data['highlight'] = 'dashboard';
		return view('employ.student.add',$data);
	}
	
	public function search_student_details(Request $request)
    {
		$DocumentVal = $request->DocumentVal;
		//$result = Student::where('student_Name','LIKE','%'.$DocumentVal.'%');
		
		  echo '<p class="searchStudent">saif</p>';

    }
	
	public function employ_edit_student($id)
    {
		$data['highlight'] = 'student';
		$data['student'] = Student::where('id',$id)->get();
		$data['studentFirst'] = StudentFirst::where('id',$id)->get();
		$data['school'] = School::orderBy('id','desc')->get();
		$data['StudentClass'] = StudentClass::orderBy('id','desc')->get();
		$data['Section'] = Section::orderBy('id','desc')->get();
       return view('employ.student.edit',$data);
    }
	
	
	
	public function employ_update_student_details(Request $request){
		
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
		
		
		
		$userprofile->save();
		
	
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
