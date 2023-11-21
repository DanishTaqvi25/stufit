@extends('admin.layout.layout')
@section('content')
<style>

@media only screen and (min-width: 800px) {
  .radiocss{
	margin-left:18px;
	font-size:18px;
}
.rowMargin{
	margin-top:10px;
	
}
.radiocssfirst{
	
	font-size:18px;
}

}

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <?php echo $student[0]->student_Name; ?> <?php echo $student[0]->student_id; ?>
            </h3>
			<div class="card-tools" style="margin-right:9px;">
			<button id="saveButton" type="button" class="btn  bg-gradient-primary btn-position">Update</button>	
			</div>
          </div>
          <div class="card-body">
            <h4></h4>
            <div class="row">
              <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link side-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false"  >Profile</a>
					
					<a class="nav-link side-link" id="vert-tabs-Physical-tab"  data-toggle="pill" href="#vert-tabs-Physical" role="tab" aria-controls="vert-tabs-Physical" aria-selected="false">Physical Assessment</a>
				    <a class="nav-link side-link" id="vert-tabs-experience-tab" data-toggle="pill" href="#vert-tabs-experience" role="tab" aria-controls="vert-tabs-experience" aria-selected="false">Eye & Vision Assessment</a>
					<a class="nav-link side-link" id="vert-tabs-oral-tab" data-toggle="pill" href="#vert-tabs-oral" role="tab" aria-controls="vert-tabs-oral" aria-selected="false">Dental And Oral Assessment</a>
					<a class="nav-link side-link" id="vert-tabs-health-tab" data-toggle="pill" href="#vert-tabs-health" role="tab" aria-controls="vert-tabs-health" aria-selected="false">Audiometry and Speech Assessment</a>
					<a class="nav-link side-link" id="vert-tabs-records-tab" data-toggle="pill" href="#vert-tabs-records" role="tab" aria-controls="vert-tabs-records" aria-selected="false">Nutrition Assessment</a>
					<a class="nav-link side-link" id="vert-tabs-medicines-tab" data-toggle="pill" href="#vert-tabs-medicines" role="tab" aria-controls="vert-tabs-medicines" aria-selected="false">Psychological Assessment</a>
					<a class="nav-link side-link" id="vert-tabs-medical-tab" data-toggle="pill" href="#vert-tabs-medical" role="tab" aria-controls="vert-tabs-medical" aria-selected="false">General Assessment</a>

					<!--<a class="nav-link side-link" id="vert-tabs-availability-tab" data-toggle="pill" href="#vert-tabs-availability" role="tab" aria-controls="vert-tabs-availability" aria-selected="false">Availability</a>-->
               
				</div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  
				  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">Profile</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			
		  
		 
		  <div class="row">
			
			
			  
              <div class="col-md-6">
                <div class="form-group">
                    <label for="Student">Student Name</label>
                    <input type="text" disabled maxLength="50" class="form-control" id="Student_Name1" value="<?php echo $student[0]->student_Name; ?>">
                    <input type="hidden" maxLength="50" class="form-control" id="Student_Name" value="<?php echo $student[0]->student_Name; ?>">
                    <input type="hidden" class="form-control" id="Student_id" value="<?php echo $student[0]->id; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Student">School Name</label>
                    <input type="text" disabled maxLength="50" class="form-control" id="School_Name2" value="<?php $result = DB::table('schools')->where('id',$student[0]->school_Name)->get(); echo $result[0]->school_name; ?>">
                    <input type="hidden" maxLength="50" class="form-control" id="School_Name" value="<?php echo $student[0]->school_Name; ?>">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="Gender">Gender</label>
					  <select name="demo" id="Gender" class="form-control select2">
						<option value="" >Select</option>

                          <option value="Male" <?php $gender = $student[0]->gender; if($gender =='Male'){echo 'selected';} ?>>Male</option>
                          <option value="Female" <?php $gender = $student[0]->gender; if($gender =='Female'){echo 'selected';} ?>>Female</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" maxLength="50" id="Address" class="form-control" id="exampleInputEmail1" value="<?php echo $student[0]->address; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" maxLength="50" id="Email" class="form-control" id="exampleInputEmail1" value="<?php echo $student[0]->email; ?>">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Emergency">Emergency Contact No</label>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="10" id="Emergency" class="form-control" value="<?php echo $student[0]->emergency; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Date">D.O.B</label>
                    <input type="date" id="Birth" class="form-control" value="<?php echo $student[0]->birth; ?>">
                  </div>
              </div>
			  
			   
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="Father">Father Name</label>
                    <input type="text" maxLength="50" id="Father_Name" class="form-control" value="<?php echo $student[0]->father_Name; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Mother">Mother Name</label>
                    <input type="text" maxLength="50" id="Mother_Name" class="form-control"  value="<?php echo $student[0]->mother_Name; ?>">
                  </div>
              </div>
			  
			<!--<div class="col-md-6">
                <div class="form-group">
                    <label for="School">School Name</label>
					  <select name="demo" id="School_Name" class="form-control select2">
					  <option value=""  >Select</option>
                         @foreach($school as $key => $orderDetails) 
                          <option value="{{$orderDetails->id}}" <?php $school_Name = $student[0]->school_Name; if($school_Name ==$orderDetails->id){echo 'selected';} ?> >{{$orderDetails->school_name}}</option>
						  @endforeach 
					  </select> 
		        </div>
              </div> -->
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Class">Class</label>
					  <select name="demo" id="Class" class="form-control select2">
					  <option value=""  >Select</option>
                          @foreach($StudentClass as $key => $orderDetails) 
                          <option value="{{$orderDetails->id}}" <?php $studentClass = $student[0]->studentClass; if($studentClass ==$orderDetails->id){echo 'selected';} ?> >{{$orderDetails->std_class}}</option>
						  @endforeach 
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Section">Section</label>
					  <select name="demo" id="Section" class="form-control select2">
					  <option value=""  >Select</option>
                          @foreach($Section as $key => $orderDetails) 
                          <option value="{{$orderDetails->id}}" <?php $section = $student[0]->section; if($section ==$orderDetails->id){echo 'selected';} ?> >{{$orderDetails->section}}</option>
						  @endforeach 
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Siblings">Siblings</label>
                    <input type="number" maxLength="2" id="Siblings" class="form-control" value="<?php echo $student[0]->siblings; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" maxlength = "100" class="form-control" id="studentCity" value="<?php echo $studentFirst[0]->studentCity; ?>" required>
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" name="state" maxlength = "100" class="form-control" id="studentState" value="<?php echo $studentFirst[0]->studentState; ?>" required>
                  </div>
              </div>
			  
			  
			  
            </div>
		  
		  
        </div>
       
        <!-- /.row -->
      </div>
	  
    </section>
	
	
		  </div>
		  
	  <div class="tab-pane fade" id="vert-tabs-Physical" role="tabpanel" aria-labelledby="vert-tabs-Physical-tab">
                
		 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header headertop">
            <h3 class="card-title">Physical Assessment</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Height</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Height" value="<?php echo $student[0]->height; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
			  </div>
	

			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1"> Weight </label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Weight" value="<?php echo $student[0]->weight; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">BMI</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="BMI" value="<?php echo $student[0]->bmi; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Body Temperature</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
					  <select name="demo" id="Body_Temperature" class="form-control select2">
                          <option value=""  >Select </option>
                          <option value="Celcius" <?php $temp = $student[0]->body_Temperature; if($temp =='Celcius'){echo 'selected';} ?>  >Celcius</option>
                          <option value="Farenheit" <?php $temp = $student[0]->body_Temperature; if($temp =='Farenheit'){echo 'selected';} ?>  >Farenheit</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="3" class="form-control" id="Body_Temperature_value" value="<?php echo $student[0]->body_Temperature_value; ?>">
                  </div>
              </div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Blood Pressure</label>
			</div>
			</div>


			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Blood_Pressure_Systolic" value="<?php echo $student[0]->blood_Pressure_Systolic; ?>">
                  </div>
              </div>
			  
			   <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Blood_Pressure_Diastolic" value="<?php echo $student[0]->blood_Pressure_Diastolic; ?>">
                  </div>
              </div>
			  
			 
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Pulse Rate</label>
			</div>
			</div>


			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Pulse_Rate" value="<?php echo $student[0]->pulse_Rate; ?>">
                  </div>
              </div>
			  
			 

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Oxygen Saturation</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Oxygen_Saturation" value="<?php echo $student[0]->oxygen_Saturation; ?>">
                  </div>
              </div>
			  
			 

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Posture</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $postureValue = $student[0]->postureValue; if($postureValue =='Good'){echo 'checked';} ?> name="Posture" value="Good" id="GoodPosture">
			<label class="form-check-label" for="GoodPosture">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $postureValue = $student[0]->postureValue; if($postureValue =='Bad'){echo 'checked';} ?> name="Posture" value="Bad" id="BadPosture">
			<label class="form-check-label" for="BadPosture">
			Bad
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $postureValue = $student[0]->postureValue; if($postureValue =='Worst'){echo 'checked';} ?> name="Posture" value="Worst" id="WorstPosture">
			<label class="form-check-label" for="WorstPosture">
			Worst
			</label>
			</div>
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Upper Limb Rom</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $upperLimb = $student[0]->upperLimb; if($upperLimb =='Normal'){echo 'checked';} ?> name="UpperLimb" value="Normal" id="UpperNormal">
			<label class="form-check-label" for="UpperNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $upperLimb = $student[0]->upperLimb; if($upperLimb =='Restricted'){echo 'checked';} ?> name="UpperLimb" value="Restricted"  id="UpperRestricted">
			<label class="form-check-label" for="UpperRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $upperLimb = $student[0]->upperLimb; if($upperLimb =='Hypermoves'){echo 'checked';} ?> name="UpperLimb" value="Hypermoves" id="UpperHypermoves">
			<label class="form-check-label" for="UpperHypermoves">
			Hypermoves
			</label>
			</div>
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group ">
			<label for="exampleInputEmail1">Neck Limb Rom</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $neckLimb = $student[0]->neckLimb; if($neckLimb =='Normal'){echo 'checked';} ?> name="NeckLimb" value="Normal" id="NeckNormal">
			<label class="form-check-label" for="NeckNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $neckLimb = $student[0]->neckLimb; if($neckLimb =='Restricted'){echo 'checked';} ?> name="NeckLimb" value="Restricted" id="NeckRestricted">
			<label class="form-check-label" for="NeckRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $neckLimb = $student[0]->neckLimb; if($neckLimb =='Hypermoves'){echo 'checked';} ?> name="NeckLimb" value="Hypermoves" id="NeckHypermoves">
			<label class="form-check-label" for="NeckHypermoves">
			Hypermoves
			</label>
			</div>
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group ">
			<label for="exampleInputEmail1">Both Lower Limb Rom</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $physical_both = $student[0]->physical_both; if($physical_both =='Normal'){echo 'checked';} ?> name="Both" value="Normal" id="BothNormal">
			<label class="form-check-label" for="BothNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $physical_both = $student[0]->physical_both; if($physical_both =='Restricted'){echo 'checked';} ?> name="Both" value="Restricted" id="BothRestricted">
			<label class="form-check-label" for="BothRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $physical_both = $student[0]->physical_both; if($physical_both =='Hypermoves'){echo 'checked';} ?> name="Both" value="Hypermoves" id="BothHypermoves">
			<label class="form-check-label" for="BothHypermoves">
			Hypermoves
			</label>
			</div>
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Dystrophy</label>
			</div>
			</div>


			

			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $Ddystrophy = $student[0]->Ddystrophy; if($Ddystrophy =='Yes'){echo 'checked';} ?> name="Dystrophy" value="Yes" id="DystrophyYes">
			<label class="form-check-label" for="DystrophyYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $Ddystrophy = $student[0]->Ddystrophy; if($Ddystrophy =='No'){echo 'checked';} ?> name="Dystrophy" value="No" id="DystrophyNo">
			<label class="form-check-label" for="DystrophyNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>
			</div>
			

			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Astrophy</label>
			</div>
			</div>


			

			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $astrophy = $student[0]->astrophy; if($astrophy =='Yes'){echo 'checked';} ?> name="Astrophy" value="Yes" id="radioDanger1">
			<label class="form-check-label" for="radioDanger1">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $astrophy = $student[0]->astrophy; if($astrophy =='No'){echo 'checked';} ?> name="Astrophy" value="No" id="radioDanger2">
			<label class="form-check-label" for="radioDanger2">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>
			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group ">
			<label for="exampleInputEmail1">Endurance</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $endurance = $student[0]->endurance; if($endurance =='Good'){echo 'checked';} ?> name="Endurance" value="Good" id="EnduranceGood">
			<label class="form-check-label" for="EnduranceGood">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $endurance = $student[0]->endurance; if($endurance =='Normal'){echo 'checked';} ?> name="Endurance" value="Normal" id="EnduranceNormal">
			<label class="form-check-label" for="EnduranceNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $endurance = $student[0]->endurance; if($endurance =='Weak'){echo 'checked';} ?> name="Endurance" value="Weak" id="EnduranceWeak">
			<label class="form-check-label" for="EnduranceWeak">
			Weak
			</label>
			</div>
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group ">
			<label for="exampleInputEmail1">Stamina</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $stamina = $student[0]->stamina; if($stamina =='Good'){echo 'checked';} ?> name="Stamina" value="Good" id="StaminaGood">
			<label class="form-check-label" for="StaminaGood">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $stamina = $student[0]->stamina; if($stamina =='Normal'){echo 'checked';} ?> name="Stamina" value="Normal" id="StaminaNormal">
			<label class="form-check-label" for="StaminaNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $stamina = $student[0]->stamina; if($stamina =='Weak'){echo 'checked';} ?> name="Stamina" value="Weak" id="StaminaWeak">
			<label class="form-check-label" for="StaminaWeak">
			Weak
			</label>
			</div>
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group ">
			<label for="exampleInputEmail1">Pain</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $pain = $student[0]->pain; if($pain =='Muscular'){echo 'checked';} ?> name="Pain" value="Muscular" id="PainMuscular">
			<label class="form-check-label" for="PainMuscular">
			Muscular
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $pain = $student[0]->pain; if($pain =='Normal'){echo 'checked';} ?> name="Pain" value="Normal" id="PainNormal">
			<label class="form-check-label" for="PainNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $pain = $student[0]->pain; if($pain =='Weak'){echo 'checked';} ?> name="Pain" value="Weak" id="PainWeak">
			<label class="form-check-label" for="PainWeak">
			Weak
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $pain = $student[0]->pain; if($pain =='No_Pain'){echo 'checked';} ?> name="Pain" value="No_Pain" id="NoPain">
			<label class="form-check-label" for="NoPain">
			No Pain
			</label>
			</div>
			
			</div>
			
			</div>

	

			</div>
			
			
			
			
			
			<div class="row rowMargin" id="pain-position" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Pain Position</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Pain_Position" value="<?php echo $student[0]->pain_Position; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group ">
			<label for="exampleInputEmail1">Spasm</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $spasm = $student[0]->spasm; if($spasm =='Mild'){echo 'checked';} ?> name="Spasm" value="Mild" id="SpasmMild">
			<label class="form-check-label" for="SpasmMild">
			Mild
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $spasm = $student[0]->spasm; if($spasm =='Heavy'){echo 'checked';} ?> name="Spasm" value="Heavy" id="SpasmHeavy">
			<label class="form-check-label" for="SpasmHeavy">
			Heavy
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $spasm = $student[0]->spasm; if($spasm =='No_Spasm'){echo 'checked';} ?> name="Spasm" value="No_Spasm" id="NoSpasm">
			<label class="form-check-label" for="NoSpasm">
			No Spasm
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $spasm = $student[0]->spasm; if($spasm =='No_Pain'){echo 'checked';} ?> name="Spasm" value="No_Pain" id="SpasmNoPain">
			<label class="form-check-label" for="SpasmNoPain">
			No Pain
			</label>
			</div>
			
			</div>
			
			</div>

	

			</div>
			
			
			
			
			
			<div class="row rowMargin" id="spasm_position" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Spasm Position</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Spasm_Position" value="<?php echo $student[0]->spasm_Position; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Advice</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Physical_advice" value="<?php echo $student[0]->physical_advice; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Remark</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control"  id="Physical_remark" value="<?php echo $student[0]->physical_remark; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
       
        <!-- /.row -->
      </div>
	  
    </section>
		
	  </div>
			  
			 
		  <div class="tab-pane fade" id="vert-tabs-experience" role="tabpanel" aria-labelledby="vert-tabs-experience-tab">

 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">Eye & Vision Assessment</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			<div class="row">
			
			<div class="col-md-3">
			
			</div>
			
			<div class="col-md-4">
			<div class="form-group">
			<label for="Left_Vision">Left Vision</label>
			</div>
			</div>
			
			<div class="col-md-5">
			<div class="form-group">
			<label for="Right_Vision">Right Vision</label>
			</div>
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="Vision">Vision</label>

			</div>
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="LeftVision" value="<?php echo $student[0]->leftVision; ?>">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="RightVision" value="<?php echo $student[0]->rightVision; ?>">
                  </div>
              </div>
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Refraction</label>

			</div>
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="LeftRefraction" value="<?php echo $student[0]->leftRefraction; ?>">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="RightRefraction" value="<?php echo $student[0]->rightRefraction; ?>">
                  </div>
              </div>
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Color Vision</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftColorVision = $student[0]->leftColorVision; if($leftColorVision =='Good'){echo 'checked';} ?> name="LeftColorVision" value="Good" id="GoodVisionLeft">
			<label class="form-check-label" for="GoodVisionLeft">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftColorVision = $student[0]->leftColorVision; if($leftColorVision =='Bad'){echo 'checked';} ?> name="LeftColorVision" value="Bad" id="BadVisionLeft">
			<label class="form-check-label" for="BadVisionLeft">
			Bad
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightColorVision = $student[0]->rightColorVision; if($rightColorVision =='Good'){echo 'checked';} ?> name="RightColorVision" value="Good" id="GoodVisionRight">
			<label class="form-check-label" for="GoodVisionRight">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightColorVision = $student[0]->rightColorVision; if($rightColorVision =='Bad'){echo 'checked';} ?> name="RightColorVision" value="Bad" id="BadVisionRight">
			<label class="form-check-label" for="BadVisionRight">
			Bad
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Disease</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftDisease = $student[0]->leftDisease; if($leftDisease =='Yes'){echo 'checked';} ?> name="LeftDisease" value="Yes" id="YesDiseaseLeft">
			<label class="form-check-label" for="YesDiseaseLeft">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftDisease = $student[0]->leftDisease; if($leftDisease =='No'){echo 'checked';} ?> name="LeftDisease" value="No" id="NoDiseaseLeft">
			<label class="form-check-label" for="NoDiseaseLeft">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightDisease = $student[0]->rightDisease; if($rightDisease =='Yes'){echo 'checked';} ?> name="RightDisease" value="Yes" id="RightDiseaseYes">
			<label class="form-check-label" for="RightDiseaseYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightDisease = $student[0]->rightDisease; if($rightDisease =='No'){echo 'checked';} ?> name="RightDisease" value="No" id="RightDiseaseNo">
			<label class="form-check-label" for="RightDiseaseNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Squint</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftSquint = $student[0]->leftSquint; if($leftSquint =='Yes'){echo 'checked';} ?> name="LeftSquint" value="Yes" id="LeftSquintYes">
			<label class="form-check-label" for="LeftSquintYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftSquint = $student[0]->leftSquint; if($leftSquint =='No'){echo 'checked';} ?> name="LeftSquint" value="No" id="LeftSquintNo">
			<label class="form-check-label" for="LeftSquintNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightSquint = $student[0]->rightSquint; if($rightSquint =='Yes'){echo 'checked';} ?> name="RightSquint" value="Yes" id="RightSquintYes">
			<label class="form-check-label" for="RightSquintYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightSquint = $student[0]->rightSquint; if($rightSquint =='No'){echo 'checked';} ?> name="RightSquint" value="No" id="RightSquintNo">
			<label class="form-check-label" for="RightSquintNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Ptosis</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftPtosis = $student[0]->leftPtosis; if($leftPtosis =='Yes'){echo 'checked';} ?> name="LeftPtosis" value="Yes" id="LeftPtosisYes">
			<label class="form-check-label" for="LeftPtosisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftPtosis = $student[0]->leftPtosis; if($leftPtosis =='No'){echo 'checked';} ?> name="LeftPtosis" value="No" id="LeftPtosisNo">
			<label class="form-check-label" for="LeftPtosisNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightPtosis = $student[0]->rightPtosis; if($rightPtosis =='Yes'){echo 'checked';} ?> name="RightPtosis" value="Yes" id="RightPtosisYes">
			<label class="form-check-label" for="RightPtosisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightPtosis = $student[0]->rightPtosis; if($rightPtosis =='No'){echo 'checked';} ?> name="RightPtosis" value="No" id="RightPtosisNo">
			<label class="form-check-label" for="RightPtosisNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Nystugmus</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftNystugmus = $student[0]->leftNystugmus; if($leftNystugmus =='Yes'){echo 'checked';} ?> name="LeftNystugmus" value="Yes" id="LeftNystugmusYes">
			<label class="form-check-label" for="LeftNystugmusYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftNystugmus = $student[0]->leftNystugmus; if($leftNystugmus =='No'){echo 'checked';} ?> name="LeftNystugmus" value="No" id="LeftNystugmusNo">
			<label class="form-check-label" for="LeftNystugmusNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightNystugmus = $student[0]->rightNystugmus; if($rightNystugmus =='Yes'){echo 'checked';} ?> name="RightNystugmus" value="Yes" id="RightNystugmusYes">
			<label class="form-check-label" for="RightNystugmusYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightNystugmus = $student[0]->rightNystugmus; if($rightNystugmus =='No'){echo 'checked';} ?> name="RightNystugmus" value="No" id="RightNystugmusNo">
			<label class="form-check-label" for="RightNystugmusNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Cataract</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftCataract = $student[0]->leftCataract; if($leftCataract =='Yes'){echo 'checked';} ?> name="LeftCataract" value="Yes" id="LeftCataractYes">
			<label class="form-check-label" for="LeftCataractYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftCataract = $student[0]->leftCataract; if($leftCataract =='No'){echo 'checked';} ?> name="LeftCataract" value="No" id="LeftCataractNo">
			<label class="form-check-label" for="LeftCataractNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightCataract = $student[0]->rightCataract; if($rightCataract =='Yes'){echo 'checked';} ?> name="RightCataract" value="Yes" id="RightCataractYes">
			<label class="form-check-label" for="RightCataractYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightCataract = $student[0]->rightCataract; if($rightCataract =='No'){echo 'checked';} ?> name="RightCataract" value="No" id="RightCataractNo">
			<label class="form-check-label" for="RightCataractNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Micro Eye Ball</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftEyeBall = $student[0]->leftEyeBall; if($leftEyeBall =='Yes'){echo 'checked';} ?> name="LeftEyeBall" value="Yes" id="LeftEyeBallYes">
			<label class="form-check-label" for="LeftEyeBallYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftEyeBall = $student[0]->leftEyeBall; if($leftEyeBall =='No'){echo 'checked';} ?> name="LeftEyeBall" value="No" id="LeftEyeBallNo">
			<label class="form-check-label" for="LeftEyeBallNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightEyeBall = $student[0]->rightEyeBall; if($rightEyeBall =='Yes'){echo 'checked';} ?> name="RightEyeBall" value="Yes" id="RightEyeBallYes">
			<label class="form-check-label" for="RightEyeBallYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightEyeBall = $student[0]->rightEyeBall; if($rightEyeBall =='No'){echo 'checked';} ?> name="RightEyeBall" value="No" id="RightEyeBallNo">
			<label class="form-check-label" for="RightEyeBallNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>

			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Itching</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftItching = $student[0]->leftItching; if($leftItching =='No_Pain'){echo 'Yes';} ?> name="LeftItching" value="Yes" id="LeftItchingYes">
			<label class="form-check-label" for="LeftItchingYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftItching = $student[0]->leftItching; if($leftItching =='No_Pain'){echo 'No';} ?> name="LeftItching" value="No" id="LeftItchingNo">
			<label class="form-check-label" for="LeftItchingNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightItching = $student[0]->rightItching; if($rightItching =='Yes'){echo 'checked';} ?> name="RightItching" value="Yes" id="RightItchingYes">
			<label class="form-check-label" for="RightItchingYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightItching = $student[0]->rightItching; if($rightItching =='No'){echo 'checked';} ?> name="RightItching" value="No" id="RightItchingNo">
			<label class="form-check-label" for="RightItchingNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Dryness</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftDryness = $student[0]->leftDryness; if($leftDryness =='Yes'){echo 'checked';} ?> name="LeftDryness" value="Yes" id="LeftDrynessYes">
			<label class="form-check-label" for="LeftDrynessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftDryness = $student[0]->leftDryness; if($leftDryness =='No'){echo 'checked';} ?> name="LeftDryness" value="No" id="LeftDrynessNo">
			<label class="form-check-label" for="LeftDrynessNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightDryness = $student[0]->rightDryness; if($rightDryness =='Yes'){echo 'checked';} ?> name="RightDryness" value="Yes" id="RightDrynessYes">
			<label class="form-check-label" for="RightDrynessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightDryness = $student[0]->rightDryness; if($rightDryness =='No'){echo 'checked';} ?> name="RightDryness" value="No" id="RightDrynessNo">
			<label class="form-check-label" for="RightDrynessNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>


			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Frequent Tears</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftTears = $student[0]->leftTears; if($leftTears =='Yes'){echo 'checked';} ?> name="LeftTears" value="Yes" id="LeftTearsYes">
			<label class="form-check-label" for="LeftTearsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftTears = $student[0]->leftTears; if($leftTears =='No'){echo 'checked';} ?> name="LeftTears" value="No" id="LeftTearsNo">
			<label class="form-check-label" for="LeftTearsNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightTears = $student[0]->rightTears; if($rightTears =='Yes'){echo 'checked';} ?> name="RightTears" value="Yes" id="RightTearsYes">
			<label class="form-check-label" for="RightTearsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightTears = $student[0]->rightTears; if($rightTears =='No'){echo 'checked';} ?> name="RightTears" value="No" id="RightTearsNo">
			<label class="form-check-label" for="RightTearsNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Red Eyes</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftRedEyes = $student[0]->leftRedEyes; if($leftRedEyes =='Yes'){echo 'checked';} ?> name="LeftRedEyes" value="Yes" id="LeftRedEyesYes">
			<label class="form-check-label" for="LeftRedEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftRedEyes = $student[0]->leftRedEyes; if($leftRedEyes =='No'){echo 'checked';} ?> name="LeftRedEyes" value="No" id="LeftRedEyesNo">
			<label class="form-check-label" for="LeftRedEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightRedEyes = $student[0]->rightRedEyes; if($rightRedEyes =='Yes'){echo 'checked';} ?> name="RightRedEyes" value="Yes" id="RightRedEyesYes">
			<label class="form-check-label" for="RightRedEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightRedEyes = $student[0]->rightRedEyes; if($rightRedEyes =='No'){echo 'checked';} ?> name="RightRedEyes" value="No" id="RightRedEyesNo">
			<label class="form-check-label" for="RightRedEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Yellowish Eyes</label>

			</div>
			
			<div class="col-sm-4">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $leftYellowishEyes = $student[0]->leftYellowishEyes; if($leftYellowishEyes =='Yes'){echo 'checked';} ?> name="LeftYellowishEyes" value="Yes" id="LeftYellowishEyesYes">
			<label class="form-check-label" for="LeftYellowishEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $leftYellowishEyes = $student[0]->leftYellowishEyes; if($leftYellowishEyes =='No'){echo 'checked';} ?> name="LeftYellowishEyes" value="No" id="LeftYellowishEyesNo">
			<label class="form-check-label" for="LeftYellowishEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $rightYellowishEyes = $student[0]->rightYellowishEyes; if($rightYellowishEyes =='Yes'){echo 'checked';} ?> name="RightYellowishEyes" value="Yes" id="RightYellowishEyesYes">
			<label class="form-check-label" for="RightYellowishEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $rightYellowishEyes = $student[0]->rightYellowishEyes; if($rightYellowishEyes =='No'){echo 'checked';} ?> name="RightYellowishEyes" value="No" id="RightYellowishEyesNo">
			<label class="form-check-label" for="RightYellowishEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>


			</div>
			
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Advice</label>

			</div>
			
			<div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Left_Eye_Advice" value="<?php echo $student[0]->left_Eye_Advice; ?>">
                  </div>
            </div>
			  
			  <!--<div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Right_Eye_Advice" value="<?php echo $student[0]->right_Eye_Advice; ?>">
                  </div>
              </div> -->
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Remark</label>

			</div>
			
			<div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control"  id="Left_Eye_Remark" value="<?php echo $student[0]->left_Eye_Remark; ?>">
                  </div>
            </div>
			  
			  <!--<div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Right_Eye_Remark" value="<?php echo $student[0]->right_Eye_Remark; ?>">
                  </div>
              </div> -->
			
			</div>





			</div>
			
			
			
			
			
			
			
			
			
			
       
        <!-- /.row -->
      </div>
	  
    </section>
			</div> 
			
			
			  <div class="tab-pane fade" id="vert-tabs-oral" role="tabpanel" aria-labelledby="vert-tabs-oral-tab">
				
			  <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">Dental And Oral Assessment</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Dental Caries</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $caries = $student[0]->caries; if($caries =='Initial'){echo 'checked';} ?> name="Caries" value="Initial" id="InitialCaries">
			<label class="form-check-label" for="InitialCaries">
			Initial
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $caries = $student[0]->caries; if($caries =='Moderate'){echo 'checked';} ?> name="Caries" value="Moderate" id="ModerateCaries">
			<label class="form-check-label" for="ModerateCaries">
			Moderate
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $caries = $student[0]->caries; if($caries =='Average'){echo 'checked';} ?> name="Caries" value="Average" id="AverageCaries">
			<label class="form-check-label" for="AverageCaries">
			Average
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $caries = $student[0]->caries; if($caries =='No Caries'){echo 'checked';} ?> name="Caries" value="No Caries" id="NoCariesCaries">
			<label class="form-check-label" for="NoCariesCaries">
			No Caries
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div id="PeriodontalText" class="row rowMargin" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="Periodontal">Periodontal</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Periodontal_text" value="<?php echo $student[0]->periodontal_text; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Orthodontic Correction</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $orthodontic = $student[0]->orthodontic; if($orthodontic =='Advised'){echo 'checked';} ?> name="Orthodontic" value="Advised" id="Advised">
			<label class="form-check-label" for="Advised">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $orthodontic = $student[0]->orthodontic; if($orthodontic =='Not Advised'){echo 'checked';} ?> name="Orthodontic" value="Not Advised" id="NotAdvised">
			<label class="form-check-label" for="NotAdvised">
			Not Advised
			</label>
			</div>
			
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Extraction</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $extraction = $student[0]->extraction; if($extraction =='Advised'){echo 'checked';} ?> name="Extraction" value="Advised" id="AdvisedExtraction">
			<label class="form-check-label" for="AdvisedExtraction">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $extraction = $student[0]->extraction; if($extraction =='Not Advised'){echo 'checked';} ?> name="Extraction" value="Not Advised" id="NotAdvisedExtraction">
			<label class="form-check-label" for="NotAdvisedExtraction">
			Not Advised
			</label>
			</div>
			
			
			
			</div>
			
			</div>

	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Space Maintainer</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $spaceMaintainer = $student[0]->spaceMaintainer; if($spaceMaintainer =='Advised'){echo 'checked';} ?> name="SpaceMaintainer" value="Advised" id="AdvisedSpaceMaintainer">
			<label class="form-check-label" for="AdvisedSpaceMaintainer">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $spaceMaintainer = $student[0]->spaceMaintainer; if($spaceMaintainer =='Not Advised'){echo 'checked';} ?> name="SpaceMaintainer" value="Not Advised" id="NotAdvisedSpaceMaintainer">
			<label class="form-check-label" for="NotAdvisedSpaceMaintainer">
			Not Advised
			</label>
			</div>
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Oral Hygiene Status</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $oralHygieneStatus = $student[0]->oralHygieneStatus; if($oralHygieneStatus =='Good'){echo 'checked';} ?> name="OralHygieneStatus" value="Good" id="GoodOralHygieneStatus">
			<label class="form-check-label" for="GoodOralHygieneStatus">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $oralHygieneStatus = $student[0]->oralHygieneStatus; if($oralHygieneStatus =='Bad'){echo 'checked';} ?> name="OralHygieneStatus" value="Bad" id="BadOralHygieneStatus">
			<label class="form-check-label" for="BadOralHygieneStatus">
			Bad
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $oralHygieneStatus = $student[0]->oralHygieneStatus; if($oralHygieneStatus =='Average'){echo 'checked';} ?> name="OralHygieneStatus" value="Average" id="AverageOralHygieneStatus">
			<label class="form-check-label" for="AverageOralHygieneStatus">
			Average
			</label>
			</div>
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="Sugar_Intake">Sugar Intake</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $sugarIntake = $student[0]->sugarIntake; if($sugarIntake =='Yes'){echo 'checked';} ?> name="SugarIntake" value="Yes" id="SugarIntakeYes">
			<label class="form-check-label" for="SugarIntakeYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $sugarIntake = $student[0]->sugarIntake; if($sugarIntake =='No'){echo 'checked';} ?> name="SugarIntake" value="No" id="SugarIntakeNo">
			<label class="form-check-label" for="SugarIntakeNo">
			No
			</label>
			</div>
			

			
			</div>
			
			</div>

	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="Time_Brushed">No Of Time Brushed</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $brushed = $student[0]->brushed; if($brushed =='Once Daily'){echo 'checked';} ?> name="Brushed" value="Once Daily" id="OnceBrushed">
			<label class="form-check-label" for="OnceBrushed">
			Once Daily
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $brushed = $student[0]->brushed; if($brushed =='Twice Daily'){echo 'checked';} ?> name="Brushed" value="Twice Daily" id="TwiceBrushed">
			<label class="form-check-label" for="TwiceBrushed">
			Twice Daily
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $brushed = $student[0]->brushed; if($brushed =='Not Brushed'){echo 'checked';} ?> name="Brushed" value="Not Brushed" id="NotBrushed">
			<label class="form-check-label" for="NotBrushed">
			Not Brushed
			</label>
			</div>
			

			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Malpositioned Tooth / Teeth</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $malpositioned = $student[0]->malpositioned; if($malpositioned =='Yes'){echo 'checked';} ?> name="Malpositioned" value="Yes" id="MalpositionedYes">
			<label class="form-check-label" for="MalpositionedYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $malpositioned = $student[0]->malpositioned; if($malpositioned =='No'){echo 'checked';} ?> name="Malpositioned" value="No" id="MalpositionedNo">
			<label class="form-check-label" for="MalpositionedNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin" id="SpecifyTooth" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Specify</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control"  id="Malpositioned_Specify_text" value="<?php echo $student[0]->malpositioned_Specify_text; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Advice</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Dental_Advice" value="<?php echo $student[0]->dental_Advice; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Remark</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Dental_Remark" value="<?php echo $student[0]->dental_Remark; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
       
        <!-- /.row -->
      </div>
	  
    </section>
				
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-health" role="tabpanel" aria-labelledby="vert-tabs-health-tab">
			   
			   <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">Audiometry And Speech Assessment</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="Speech_Milestone">Speech Milestone</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Speech_Milestone" value="<?php echo $studentFirst[0]->speech_Milestone; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Comprehension</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Comprehension" <?php $comprehension = $studentFirst[0]->comprehension; if($comprehension =='Verbal'){echo 'checked';} ?> value="Verbal" id="VerbalComprehension">
			<label class="form-check-label" for="VerbalComprehension">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" <?php $comprehension = $studentFirst[0]->comprehension; if($comprehension =='Non Verbal'){echo 'checked';} ?> value="Non Verbal" id="NonVerbalComprehension">
			<label class="form-check-label" for="NonVerbalComprehension">
			Non Verbal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" <?php $comprehension = $studentFirst[0]->comprehension; if($comprehension =='Gesture'){echo 'checked';} ?> value="Gesture" id="GestureComprehension">
			<label class="form-check-label" for="GestureComprehension">
			Gesture
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" <?php $comprehension = $studentFirst[0]->comprehension; if($comprehension =='Language Age'){echo 'checked';} ?> value="Language Age" id="LanguageComprehension">
			<label class="form-check-label" for="LanguageComprehension">
			Language Age
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Expression</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Expression" <?php $expression = $studentFirst[0]->expression; if($expression =='Verbal'){echo 'checked';} ?> value="Verbal" id="VerbalExpression">
			<label class="form-check-label" for="VerbalExpression">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" <?php $expression = $studentFirst[0]->expression; if($expression =='Non Verbal'){echo 'checked';} ?> value="Non Verbal" id="NonVerbalExpression">
			<label class="form-check-label" for="NonVerbalExpression">
			Non Verbal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" <?php $expression = $studentFirst[0]->expression; if($expression =='Gesture'){echo 'checked';} ?> value="Gesture" id="GestureExpression">
			<label class="form-check-label" for="GestureExpression">
			Gesture
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" <?php $expression = $studentFirst[0]->expression; if($expression =='Language Age'){echo 'checked';} ?> value="Language Age" id="LanguageExpression">
			<label class="form-check-label" for="LanguageExpression">
			Language Age
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Mode Of Communication</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Communication" <?php $communication = $studentFirst[0]->communication; if($communication =='Verbal'){echo 'checked';} ?> value="Verbal" id="VerbalCommunication">
			<label class="form-check-label" for="VerbalCommunication">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Communication" <?php $communication = $studentFirst[0]->communication; if($communication =='Non Verbal'){echo 'checked';} ?> value="Non Verbal" id="NonVerbalCommunication">
			<label class="form-check-label" for="NonVerbalCommunication">
			Non Verbal
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Auditory Skill</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Auditory" <?php $auditory = $studentFirst[0]->auditory; if($auditory =='Proper'){echo 'checked';} ?> value="Proper" id="ProperAuditory">
			<label class="form-check-label" for="ProperAuditory">
			Proper 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Auditory" <?php $auditory = $studentFirst[0]->auditory; if($auditory =='Improper'){echo 'checked';} ?> value="Improper" id="ImproperAuditory">
			<label class="form-check-label" for="ImproperAuditory">
			Improper 
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Hearing Loss</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			
			<div class="icheck-primary d-inline  radiocssfirst">
			<input type="radio" name="HearingLoss" <?php $hearingLoss = $studentFirst[0]->hearingLoss; if($hearingLoss =='Yes'){echo 'checked';} ?> value="Yes" id="HearingYes">
			<label class="form-check-label" for="HearingYes">
			Yes 
			</label>
			</div>
			 
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="HearingLoss" <?php $hearingLoss = $studentFirst[0]->hearingLoss; if($hearingLoss =='No'){echo 'checked';} ?> value="No" id="HearingNo">
			<label class="form-check-label" for="HearingNo">
			No 
			</label>
			</div>
			
			
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="HearingLoss" <?php $hearingLoss = $studentFirst[0]->hearingLoss; if($hearingLoss =='Static'){echo 'checked';} ?> value="Static" id="HearingStatic">
			<label class="form-check-label" for="HearingStatic">
			Static 
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="HearingLoss" <?php $hearingLoss = $studentFirst[0]->hearingLoss; if($hearingLoss =='Progressive'){echo 'checked';} ?> value="Progressive" id="HearingProgressive">
			<label class="form-check-label" for="HearingProgressive">
			Progressive 
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Tinnitus</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			
			
			<div class="icheck-primary d-inline  radiocssfirst">
			<input type="radio" name="Tinnitus" <?php $tinnitus = $studentFirst[0]->tinnitus; if($tinnitus =='Yes'){echo 'checked';} ?> value="Yes" id="YesTinnitus">
			<label class="form-check-label" for="YesTinnitus">
			Yes 
			</label>
			</div>
			 
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Tinnitus" <?php $tinnitus = $studentFirst[0]->tinnitus; if($tinnitus =='No'){echo 'checked';} ?> value="No" id="NoTinnitus">
			<label class="form-check-label" for="NoTinnitus">
			No 
			</label>
			</div>
			
			
			
			</div>
			
			</div>

	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Ear Perforation</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Ear" <?php $ear = $studentFirst[0]->ear; if($ear =='Yes'){echo 'checked';} ?> value="Yes" id="YesEar">
			<label class="form-check-label" for="YesEar">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ear" <?php $ear = $studentFirst[0]->ear; if($ear =='No'){echo 'checked';} ?> value="No" id="NoEar">
			<label class="form-check-label" for="NoEar">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin" id="whichearcol" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Which  Ear ?</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="WhichEar" <?php $whichEar = $studentFirst[0]->whichEar; if($whichEar =='Right'){echo 'checked';} ?> value="Right" id="WhichEarRight">
			<label class="form-check-label" for="WhichEarRight">
			Right 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WhichEar" <?php $whichEar = $studentFirst[0]->whichEar; if($whichEar =='Left'){echo 'checked';} ?> value="Left" id="WhichEarLeft">
			<label class="form-check-label" for="WhichEarLeft">
			Left
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WhichEar" <?php $whichEar = $studentFirst[0]->whichEar; if($whichEar =='Both'){echo 'checked';} ?> value="Both" id="WhichEarBoth">
			<label class="form-check-label" for="WhichEarBoth">
			Both
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Respond On Named Call</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Call" <?php $calling = $studentFirst[0]->calling; if($calling =='Yes'){echo 'checked';} ?> value="Yes" id="YesCall">
			<label class="form-check-label" for="YesCall">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Call" <?php $calling = $studentFirst[0]->calling; if($calling =='No'){echo 'checked';} ?> value="No" id="NoCall">
			<label class="form-check-label" for="NoCall">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Hearing Assessment Result</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Hearing" <?php $hearing = $studentFirst[0]->hearing; if($hearing =='PTA'){echo 'checked';} ?> value="PTA" id="PTAHearing">
			<label class="form-check-label" for="PTAHearing">
			PTA 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" <?php $hearing = $studentFirst[0]->hearing; if($hearing =='BOA'){echo 'checked';} ?> value="BOA" id="BOAHearing">
			<label class="form-check-label" for="BOAHearing">
			BOA
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" <?php $hearing = $studentFirst[0]->hearing; if($hearing =='VRA'){echo 'checked';} ?> value="VRA" id="VRAHearing">
			<label class="form-check-label" for="VRAHearing">
			VRA
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" <?php $hearing = $studentFirst[0]->hearing; if($hearing =='AVR'){echo 'checked';} ?> value="AVR" id="AVRHearing">
			<label class="form-check-label" for="AVRHearing">
			AVR
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Bilateral Wax</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Bilateral" <?php $bilateral = $studentFirst[0]->bilateral; if($bilateral =='Yes'){echo 'checked';} ?> value="Yes" id="YesBilateral">
			<label class="form-check-label" for="YesBilateral">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bilateral" <?php $bilateral = $studentFirst[0]->bilateral; if($bilateral =='No'){echo 'checked';} ?> value="No" id="NoBilateral">
			<label class="form-check-label" for="NoBilateral">
			No 
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Medical History</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="MedicalHistory" <?php $medicalHistory = $studentFirst[0]->medicalHistory; if($medicalHistory =='Yes'){echo 'checked';} ?> value="Yes" id="YesMedicalHistory">
			<label class="form-check-label" for="YesMedicalHistory">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MedicalHistory" <?php $medicalHistory = $studentFirst[0]->medicalHistory; if($medicalHistory =='No'){echo 'checked';} ?> value="No" id="NoMedicalHistory">
			<label class="form-check-label" for="NoMedicalHistory">
			No 
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Advice</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Speech_Advice" value="<?php echo $studentFirst[0]->speech_Advice; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Remark</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Speech_Remark" value="<?php echo $studentFirst[0]->speech_Remark; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div> 
			
       
        <!-- /.row -->
      </div>
	  
    </section>
	  
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-records" role="tabpanel" aria-labelledby="vert-tabs-records-tab">
			   
			 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">Nutritional Assessment</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Pale Or Yellowish Skin</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="PaleSkin" <?php $paleSkin = $student[0]->paleSkin; if($paleSkin =='Yes'){echo 'checked';} ?> value="Yes" id="PaleSkinYes">
			<label class="form-check-label" for="PaleSkinYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PaleSkin" <?php $paleSkin = $student[0]->paleSkin; if($paleSkin =='No'){echo 'checked';} ?> value="No" id="PaleSkinNo">
			<label class="form-check-label" for="PaleSkinNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Irregular Heartbeats</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Heartbeats" <?php $heartbeats = $student[0]->heartbeats; if($heartbeats =='Yes'){echo 'checked';} ?> value="Yes" id="HeartbeatsYes">
			<label class="form-check-label" for="HeartbeatsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Heartbeats" <?php $heartbeats = $student[0]->heartbeats; if($heartbeats =='No'){echo 'checked';} ?> value="No" id="HeartbeatsNo">
			<label class="form-check-label" for="HeartbeatsNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Shortness Of Breath</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Shortness" <?php $shortness = $student[0]->shortness; if($shortness =='Yes'){echo 'checked';} ?> value="Yes" id="ShortnessYes">
			<label class="form-check-label" for="ShortnessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Shortness" <?php $shortness = $student[0]->shortness; if($shortness =='No'){echo 'checked';} ?> value="No" id="ShortnessNo">
			<label class="form-check-label" for="ShortnessNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Dizziness/ Light Headedness</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Dizziness" <?php $dizziness = $student[0]->dizziness; if($dizziness =='Yes'){echo 'checked';} ?> value="Yes" id="DizzinessYes">
			<label class="form-check-label" for="DizzinessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Dizziness" <?php $dizziness = $student[0]->dizziness; if($dizziness =='No'){echo 'checked';} ?> value="No" id="DizzinessNo">
			<label class="form-check-label" for="DizzinessNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Cold Hands / Feet</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="ColdHands" <?php $coldHands = $student[0]->coldHands; if($coldHands =='Yes'){echo 'checked';} ?> value="Yes" id="ColdHandsYes">
			<label class="form-check-label" for="ColdHandsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ColdHands" <?php $coldHands = $student[0]->coldHands; if($coldHands =='No'){echo 'checked';} ?> value="No" id="ColdHandsNo">
			<label class="form-check-label" for="ColdHandsNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
				<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Anemia</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Anemia" <?php $anemia = $student[0]->anemia; if($anemia =='Symptomatic'){echo 'checked';} ?> value="Symptomatic" id="AnemiaSymptomaticYes">
			<label class="form-check-label" for="AnemiaSymptomaticYes">
			Symptomatic
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Anemia" <?php $anemia = $student[0]->anemia; if($anemia =='No'){echo 'checked';} ?> value="No" id="AnemiaNo">
			<label class="form-check-label" for="AnemiaNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Fatigue</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Fatigue" <?php $fatigue = $student[0]->fatigue; if($fatigue =='Yes'){echo 'checked';} ?> value="Yes" id="FatigueYes">
			<label class="form-check-label" for="FatigueYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Fatigue" <?php $fatigue = $student[0]->fatigue; if($fatigue =='No'){echo 'checked';} ?> value="No" id="FatigueNo">
			<label class="form-check-label" for="FatigueNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Vitamin D Deficiency</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Deficiency" <?php $deficiency = $student[0]->deficiency; if($deficiency =='Symptomatic'){echo 'checked';} ?> value="Symptomatic" id="DeficiencySymptomatic">
			<label class="form-check-label" for="DeficiencySymptomatic">
			Symptomatic
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deficiency" <?php $deficiency = $student[0]->deficiency; if($deficiency =='No'){echo 'checked';} ?> value="No" id="DeficiencyNo">
			<label class="form-check-label" for="DeficiencyNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Obesity</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Obesity" <?php $obesity = $student[0]->obesity; if($obesity =='Yes'){echo 'checked';} ?> value="Yes" id="ObesityYes">
			<label class="form-check-label" for="ObesityYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Obesity" <?php $obesity = $student[0]->obesity; if($obesity =='No'){echo 'checked';} ?> value="No" id="ObesityNo">
			<label class="form-check-label" for="ObesityNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Ideal Body Weight</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Ideal_Body_Weight" value="<?php echo $student[0]->ideal_Body_Weight; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Ideal Calories Estimation / Day</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Ideal_Calories" value="<?php echo $student[0]->ideal_Calories; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<!--<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Micro Nutrient Distribution</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="MicroNutrient" <?php $microNutrient = $student[0]->microNutrient; if($microNutrient =='GM Fats'){echo 'checked';} ?> value="GM Fats" id="MicroNutrientFats">
			<label class="form-check-label" for="MicroNutrientFats">
			GM Fats
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MicroNutrient" <?php $microNutrient = $student[0]->microNutrient; if($microNutrient =='GM Protien'){echo 'checked';} ?> value="GM Protien" id="MicroNutrientProtien">
			<label class="form-check-label" for="MicroNutrientProtien">
			GM Protien
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MicroNutrient" <?php $microNutrient = $student[0]->microNutrient; if($microNutrient =='GM Carbohydrates'){echo 'checked';} ?> value="GM Carbohydrates" id="MicroNutrientCarbohydrates">
			<label class="form-check-label" for="MicroNutrientCarbohydrates">
			GM Carbohydrates
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Fluid Estimation Required</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="FluidEstimation" <?php $fluidEstimation = $student[0]->fluidEstimation; if($fluidEstimation =='ML/Day'){echo 'checked';} ?> value="ML/Day" id="MLFluidEstimation">
			<label class="form-check-label" for="MLFluidEstimation">
			ML/Day
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="FluidEstimation" <?php $fluidEstimation = $student[0]->fluidEstimation; if($fluidEstimation =='Glasses'){echo 'checked';} ?> value="Glasses" id="GLASSESFluidEstimation">
			<label class="form-check-label" for="GLASSESFluidEstimation">
			Glasses
			</label>
			</div>
			
			</div>
			
			</div>

			</div> -->
			
			
			<div class="row rowMargin" style="display:none;" id="FluidEstimationVal">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Fluid Estimation</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Fluid_Estimation" value="<?php echo $student[0]->fluid_Estimation; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Advice</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="Nutrition_Advice" value="<?php echo $student[0]->nutrition_Advice; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Remark</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control"  id="Nutrition_Remark" value="<?php echo $student[0]->nutrition_Remark; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
       
        
      </div>
	  
    </section>
			   
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-medical" role="tabpanel" aria-labelledby="vert-tabs-medical-tab">
			   
				
				
				<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">General Assessment</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Chest Auscultation</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Chest" <?php $chest = $studentFirst[0]->chest; if($chest =='Clear'){echo 'checked';} ?> value="Clear" id="ChestClear">
			<label class="form-check-label" for="ChestClear">
			Clear
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Chest" <?php $chest = $studentFirst[0]->chest; if($chest =='Not Clear'){echo 'checked';} ?> value="Not Clear" id="ChestNotClear">
			<label class="form-check-label" for="ChestNotClear">
			Not Clear
			</label>
			</div>
			
			
			</div>
			
			</div>
			
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Abdominal Palpitation</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Abdomen" <?php $abdomen = $studentFirst[0]->abdomen; if($abdomen =='Tender'){echo 'checked';} ?> value="Tender" id="AbdomenTender">
			<label class="form-check-label" for="AbdomenTender">
			Tender
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" <?php $abdomen = $studentFirst[0]->abdomen; if($abdomen =='Soft'){echo 'checked';} ?> value="Soft" id="AbdomenSoft">
			<label class="form-check-label" for="AbdomenSoft">
			Soft
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" <?php $abdomen = $studentFirst[0]->abdomen; if($abdomen =='Distended'){echo 'checked';} ?> value="Distended" id="AbdomenDistended">
			<label class="form-check-label" for="AbdomenDistended">
			Distended
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" <?php $abdomen = $studentFirst[0]->abdomen; if($abdomen =='Normal'){echo 'checked';} ?> value="Normal" id="AbdomenNormal">
			<label class="form-check-label" for="AbdomenNormal">
			Normal
			</label>
			</div>
			
			
			</div>
			
			</div>
			
			</div>
			
			
			
			
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Active Infectious Disease</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Active_Infectious_Disease" value="<?php echo $studentFirst[0]->active_Infectious_Disease; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Cleft Lip/Palate</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Cleft" <?php $cleft = $studentFirst[0]->cleft; if($cleft =='Yes'){echo 'checked';} ?> value="Yes" id="CleftYes">
			<label class="form-check-label" for="CleftYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Cleft" <?php $cleft = $studentFirst[0]->cleft; if($cleft =='No'){echo 'checked';} ?> value="No" id="CleftNo">
			<label class="form-check-label" for="CleftNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Club Foot</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Club" <?php $club = $studentFirst[0]->club; if($club =='Yes'){echo 'checked';} ?> value="Yes" id="ClubYes">
			<label class="form-check-label" for="ClubYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Club" <?php $club = $studentFirst[0]->club; if($club =='No'){echo 'checked';} ?> value="No" id="ClubNo">
			<label class="form-check-label" for="ClubNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Congenital Cataract</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Congenital" <?php $congenital = $studentFirst[0]->congenital; if($congenital =='Yes'){echo 'checked';} ?> value="Yes" id="CongenitalYes">
			<label class="form-check-label" for="CongenitalYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Congenital" <?php $congenital = $studentFirst[0]->congenital; if($congenital =='No'){echo 'checked';} ?> value="No" id="CongenitalNo">
			<label class="form-check-label" for="CongenitalNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Congenital Deafness</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Deafness" <?php $deafness = $studentFirst[0]->deafness; if($deafness =='Yes'){echo 'checked';} ?> value="Yes" id="DeafnessYes">
			<label class="form-check-label" for="DeafnessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deafness" <?php $deafness = $studentFirst[0]->deafness; if($deafness =='No'){echo 'checked';} ?> value="No" id="DeafnessNo">
			<label class="form-check-label" for="DeafnessNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Skin Condition</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="SkinCondition" <?php $skinCondition = $studentFirst[0]->skinCondition; if($skinCondition =='Yes'){echo 'checked';} ?> value="Yes" id="YesSkinCondition">
			<label class="form-check-label" for="YesSkinCondition">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SkinCondition" <?php $skinCondition = $studentFirst[0]->skinCondition; if($skinCondition =='No'){echo 'checked';} ?> value="No" id="NoSkinCondition">
			<label class="form-check-label" for="NoSkinCondition">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Otitis Media</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Otitis" <?php $otitis = $studentFirst[0]->otitis; if($otitis =='Yes'){echo 'checked';} ?> value="Yes" id="OtitisYes">
			<label class="form-check-label" for="OtitisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Otitis" <?php $otitis = $studentFirst[0]->otitis; if($otitis =='No'){echo 'checked';} ?> value="No" id="OtitisNo">
			<label class="form-check-label" for="OtitisNo">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Neuro Motor Ippairment</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="NeuroMotor" <?php $neuroMotor = $studentFirst[0]->neuroMotor; if($neuroMotor =='Yes'){echo 'checked';} ?> value="Yes" id="YesNeuroMotor">
			<label class="form-check-label" for="YesNeuroMotor">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeuroMotor" <?php $neuroMotor = $studentFirst[0]->neuroMotor; if($neuroMotor =='No'){echo 'checked';} ?> value="No" id="NoNeuroMotor">
			<label class="form-check-label" for="NoNeuroMotor">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Body Type</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="BodyType" <?php $bodyType = $studentFirst[0]->bodyType; if($bodyType =='Thin'){echo 'checked';} ?>  value="Thin" id="BodyTypeThin">
			<label class="form-check-label" for="BodyTypeThin">
			Thin
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="BodyType" <?php $bodyType = $studentFirst[0]->bodyType; if($bodyType =='Average'){echo 'checked';} ?> value="Average" id="BodyTypeAverage">
			<label class="form-check-label" for="BodyTypeAverage">
			Average
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="BodyType" <?php $bodyType = $studentFirst[0]->bodyType; if($bodyType =='Faty'){echo 'checked';} ?> value="Faty" id="FatyBodyType">
			<label class="form-check-label" for="FatyBodyType">
			Faty
			</label>
			</div>
			
			
			</div>
			
			</div>

			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Advice</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="General_Advice" value="<?php echo $studentFirst[0]->general_Advice; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Remark</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="General_Remark" value="<?php echo $studentFirst[0]->general_Remark; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div> 
			
       
        
      </div>
	  
    </section>
			   
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-medicines" role="tabpanel" aria-labelledby="vert-tabs-medicines-tab">
				
				
				
				<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
          <div class="card-header headertop">
            <h3 class="card-title">Psychological Assessment</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Easily Getting Annoyed</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $annoyed = $student[0]->annoyed; if($annoyed =='Yes'){echo 'checked';} ?> name="Annoyed" value="Yes" id="YesAnnoyed">
			<label class="form-check-label" for="YesAnnoyed">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $annoyed = $student[0]->annoyed; if($annoyed =='No'){echo 'checked';} ?> name="Annoyed" value="No" id="NoAnnoyed">
			<label class="form-check-label" for="NoAnnoyed">
			No
			</label>
			</div>
			
			
			</div>
			
			</div>

	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Often Appearing Angry</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $angry = $student[0]->angry; if($angry =='Yes'){echo 'checked';} ?> name="Angry" value="Yes" id="YesAngry">
			<label class="form-check-label" for="YesAngry">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $angry = $student[0]->angry; if($angry =='No'){echo 'checked';} ?> name="Angry" value="No" id="NoAngry">
			<label class="form-check-label" for="NoAngry">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Putting Blame On Others</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $blame = $student[0]->blame; if($blame =='Yes'){echo 'checked';} ?> name="Blame" value="Yes" id="YesBlame">
			<label class="form-check-label" for="YesBlame">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $blame = $student[0]->blame; if($blame =='No'){echo 'checked';} ?> name="Blame" value="No" id="NoBlame">
			<label class="form-check-label" for="NoBlame">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Refusing To Follow Rules Or Questioning Authorities</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $authorities = $student[0]->authorities; if($authorities =='Yes'){echo 'checked';} ?> name="Authorities" value="Yes" id="YesAuthorities">
			<label class="form-check-label" for="YesAuthorities">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $authorities = $student[0]->authorities; if($authorities =='No'){echo 'checked';} ?> name="Authorities" value="No" id="NoAuthorities">
			<label class="form-check-label" for="NoAuthorities">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Arguing And Throwing Temper Tantrums</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $tantrums = $student[0]->tantrums; if($tantrums =='Yes'){echo 'checked';} ?> name="Tantrums" value="Yes" id="YesTantrums">
			<label class="form-check-label" for="YesTantrums">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $tantrums = $student[0]->tantrums; if($tantrums =='No'){echo 'checked';} ?> name="Tantrums" value="No" id="NoTantrums">
			<label class="form-check-label" for="NoTantrums">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Having Difficulty In Handling Frustations</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $frustations = $student[0]->frustations; if($frustations =='Yes'){echo 'checked';} ?> name="Frustations" value="Yes" id="YesFrustations">
			<label class="form-check-label" for="YesFrustations">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $frustations = $student[0]->frustations; if($frustations =='No'){echo 'checked';} ?> name="Frustations" value="No" id="NoFrustations">
			<label class="form-check-label" for="NoFrustations">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Behaviour Disorder</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $behaviour = $student[0]->behaviour; if($behaviour =='Yes'){echo 'checked';} ?> name="Behaviour" value="Yes" id="YesBehaviour">
			<label class="form-check-label" for="YesBehaviour">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $behaviour = $student[0]->behaviour; if($behaviour =='No'){echo 'checked';} ?> name="Behaviour" value="No" id="NoBehaviour">
			<label class="form-check-label" for="NoBehaviour">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Spelling The Word Accurately</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $spelling = $student[0]->spelling; if($spelling =='Yes'){echo 'checked';} ?> name="Spelling" value="Yes" id="YesSpelling">
			<label class="form-check-label" for="YesSpelling">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $spelling = $student[0]->spelling; if($spelling =='No'){echo 'checked';} ?> name="Behaviour" value="No" id="NoSpelling">
			<label class="form-check-label" for="NoSpelling">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Summarizing, Paraphrasing, Answering Application Problem Or Question In Test</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $paraphrasing = $student[0]->paraphrasing; if($paraphrasing =='Yes'){echo 'checked';} ?> name="Paraphrasing" value="Yes" id="YesParaphrasing">
			<label class="form-check-label" for="YesParaphrasing">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $paraphrasing = $student[0]->paraphrasing; if($paraphrasing =='No'){echo 'checked';} ?> name="Paraphrasing" value="No" id="NoParaphrasing">
			<label class="form-check-label" for="NoParaphrasing">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Poor Memory</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $poorMemory = $student[0]->poorMemory; if($poorMemory =='Yes'){echo 'checked';} ?> name="PoorMemory" value="Yes" id="YesPoorMemory">
			<label class="form-check-label" for="YesPoorMemory">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $poorMemory = $student[0]->poorMemory; if($poorMemory =='No'){echo 'checked';} ?> name="PoorMemory" value="No" id="NoPoorMemory">
			<label class="form-check-label" for="NoPoorMemory">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Adjusting To New Surroundings</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $surroundings = $student[0]->surroundings; if($surroundings =='Friendly'){echo 'checked';} ?> name="Surroundings" value="Friendly" id="FriendlySurroundings">
			<label class="form-check-label" for="FriendlySurroundings">
			Friendly
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $surroundings = $student[0]->surroundings; if($surroundings =='Not Friendly'){echo 'checked';} ?> name="Surroundings" value="Not Friendly" id="NotSurroundings">
			<label class="form-check-label" for="NotSurroundings">
			Not Friendly
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Being Unable To Sit Still, Especially In Calm Or Quite Surrounding</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $quite = $student[0]->quite; if($quite =='Yes'){echo 'checked';} ?> name="Quite" value="Yes" id="QuiteYes">
			<label class="form-check-label" for="QuiteYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $quite = $student[0]->quite; if($quite =='No'){echo 'checked';} ?> name="Quite"  value="No" id="QuiteNo">
			<label class="form-check-label" for="QuiteNo">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Constantly Fidgetting</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $fidgetting = $student[0]->fidgetting; if($fidgetting =='Yes'){echo 'checked';} ?> name="Fidgetting" value="Yes" id="YesFidgetting">
			<label class="form-check-label" for="YesFidgetting">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $fidgetting = $student[0]->fidgetting; if($fidgetting =='No'){echo 'checked';} ?> name="Fidgetting" value="No" id="NoFidgetting">
			<label class="form-check-label" for="NoFidgetting">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Being Unable To Concentrate On Task</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $concentrateOnTask = $student[0]->concentrateOnTask; if($concentrateOnTask =='Yes'){echo 'checked';} ?> name="ConcentrateOnTask" value="Yes" id="YesConcentrateOnTask">
			<label class="form-check-label" for="YesConcentrateOnTask">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $concentrateOnTask = $student[0]->concentrateOnTask; if($concentrateOnTask =='No'){echo 'checked';} ?> name="ConcentrateOnTask" value="No" id="NoConcentrateOnTask">
			<label class="form-check-label" for="NoConcentrateOnTask">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Excessive Physical Movements</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $physicalMovements = $student[0]->physicalMovements; if($physicalMovements =='Yes'){echo 'checked';} ?> name="PhysicalMovements" value="Yes" id="YesPhysicalMovements">
			<label class="form-check-label" for="YesPhysicalMovements">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $physicalMovements = $student[0]->physicalMovements; if($physicalMovements =='No'){echo 'checked';} ?> name="PhysicalMovements" value="No" id="NoPhysicalMovements">
			<label class="form-check-label" for="NoPhysicalMovements">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Excessive Talking</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $excessiveTalking = $student[0]->excessiveTalking; if($excessiveTalking =='Yes'){echo 'checked';} ?> name="ExcessiveTalking" value="Yes" id="YesExcessiveTalking">
			<label class="form-check-label" for="YesExcessiveTalking">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $excessiveTalking = $student[0]->excessiveTalking; if($excessiveTalking =='No'){echo 'checked';} ?> name="ExcessiveTalking" value="No" id="NoExcessiveTalking">
			<label class="form-check-label" for="NoExcessiveTalking">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Being Unable To Wait Untill Their Turn</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $wait = $student[0]->wait; if($wait =='Yes'){echo 'checked';} ?> name="Wait" value="Yes" id="YesWait">
			<label class="form-check-label" for="YesWait">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $wait = $student[0]->wait; if($wait =='No'){echo 'checked';} ?> name="Wait" value="No" id="NoWait">
			<label class="form-check-label" for="NoWait">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Acting Without Thinking</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $acting = $student[0]->acting; if($acting =='Yes'){echo 'checked';} ?> name="Acting" value="Yes" id="YesActing">
			<label class="form-check-label" for="YesActing">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $acting = $student[0]->acting; if($acting =='No'){echo 'checked';} ?> name="Acting" value="No" id="NoActing">
			<label class="form-check-label" for="NoActing">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Interruption Conversion</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $interruption = $student[0]->interruption; if($interruption =='Yes'){echo 'checked';} ?> name="Interruption" value="Yes" id="YesInterruption">
			<label class="form-check-label" for="YesInterruption">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $interruption = $student[0]->interruption; if($interruption =='No'){echo 'checked';} ?> name="Interruption" value="No" id="NoInterruption">
			<label class="form-check-label" for="NoInterruption">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Attention Deficit Hyperactivity Disorder </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $deficite = $student[0]->deficite; if($deficite =='Yes'){echo 'checked';} ?> name="Deficite" value="Yes" id="YesDeficite">
			<label class="form-check-label" for="YesDeficite">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $deficite = $student[0]->deficite; if($deficite =='No'){echo 'checked';} ?> name="Deficite" value="No" id="NoDeficite">
			<label class="form-check-label" for="NoDeficite">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Low Self Esteem </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $selfEsteem = $student[0]->selfEsteem; if($selfEsteem =='Yes'){echo 'checked';} ?> name="SelfEsteem" value="Yes" id="YesSelfEsteem">
			<label class="form-check-label" for="YesSelfEsteem">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $selfEsteem = $student[0]->selfEsteem; if($selfEsteem =='No'){echo 'checked';} ?> name="SelfEsteem" value="No" id="NoSelfEsteem">
			<label class="form-check-label" for="NoSelfEsteem">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Irritable Actions </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $irritableActions = $student[0]->irritableActions; if($irritableActions =='Yes'){echo 'checked';} ?> name="IrritableActions" value="Yes" id="YesIrritableActions">
			<label class="form-check-label" for="YesIrritableActions">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $irritableActions = $student[0]->irritableActions; if($irritableActions =='No'){echo 'checked';} ?> name="IrritableActions" value="No" id="NoIrritableActions">
			<label class="form-check-label" for="NoIrritableActions">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Sudden Anger </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $suddenAnger = $student[0]->suddenAnger; if($suddenAnger =='Yes'){echo 'checked';} ?> name="SuddenAnger" value="Yes" id="YesSuddenAnger">
			<label class="form-check-label" for="YesSuddenAnger">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $suddenAnger = $student[0]->suddenAnger; if($suddenAnger =='No'){echo 'checked';} ?> name="SuddenAnger" value="No" id="NoSuddenAnger">
			<label class="form-check-label" for="NoSuddenAnger">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Frequent Absence </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $frequentAbsence = $student[0]->frequentAbsence; if($frequentAbsence =='Yes'){echo 'checked';} ?> name="FrequentAbsence" value="Yes" id="YesFrequentAbsence">
			<label class="form-check-label" for="YesFrequentAbsence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $frequentAbsence = $student[0]->frequentAbsence; if($frequentAbsence =='No'){echo 'checked';} ?> name="FrequentAbsence" value="No" id="NoFrequentAbsence">
			<label class="form-check-label" for="NoFrequentAbsence">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Thought Of Suicide </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $suicide = $student[0]->suicide; if($suicide =='Yes'){echo 'checked';} ?> name="Suicide" value="Yes" id="YesSuicide">
			<label class="form-check-label" for="YesSuicide">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $suicide = $student[0]->suicide; if($suicide =='No'){echo 'checked';} ?> name="Suicide" value="No" id="NoSuicide">
			<label class="form-check-label" for="NoSuicide">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Reckless Behaviour </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $recklessBehaviour = $student[0]->recklessBehaviour; if($recklessBehaviour =='Yes'){echo 'checked';} ?> name="RecklessBehaviour" value="Yes" id="YesRecklessBehaviour">
			<label class="form-check-label" for="YesRecklessBehaviour">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $recklessBehaviour = $student[0]->recklessBehaviour; if($recklessBehaviour =='No'){echo 'checked';} ?> name="RecklessBehaviour" value="No" id="NoRecklessBehaviour">
			<label class="form-check-label" for="NoRecklessBehaviour">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Crying Frequently </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $cryingFrequently = $student[0]->cryingFrequently; if($cryingFrequently =='Yes'){echo 'checked';} ?> name="CryingFrequently" value="Yes" id="YesCryingFrequently">
			<label class="form-check-label" for="YesCryingFrequently">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $cryingFrequently = $student[0]->cryingFrequently; if($cryingFrequently =='No'){echo 'checked';} ?> name="CryingFrequently" value="No" id="NoCryingFrequently">
			<label class="form-check-label" for="NoCryingFrequently">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Depression </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $depression = $studentFirst[0]->depression; if($depression =='Yes'){echo 'checked';} ?> name="Depression" value="Yes" id="YesDepression">
			<label class="form-check-label" for="YesDepression">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $depression = $studentFirst[0]->depression; if($depression =='No'){echo 'checked';} ?> name="Depression" value="No" id="NoDepression">
			<label class="form-check-label" for="NoDepression">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Contant Feel on Edge And Uneasy </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $edge = $studentFirst[0]->edge; if($edge =='Yes'){echo 'checked';} ?> name="Edge" value="Yes" id="YesEdge">
			<label class="form-check-label" for="YesEdge">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $edge = $studentFirst[0]->edge; if($edge =='No'){echo 'checked';} ?> name="Edge" value="No" id="NoEdge">
			<label class="form-check-label" for="NoEdge">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Social Changes</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $socialChanges = $studentFirst[0]->socialChanges; if($socialChanges =='Yes'){echo 'checked';} ?> name="SocialChanges" value="Yes" id="YesSocialChanges">
			<label class="form-check-label" for="YesSocialChanges">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $socialChanges = $studentFirst[0]->socialChanges; if($socialChanges =='No'){echo 'checked';} ?> name="SocialChanges" value="No" id="NoSocialChanges">
			<label class="form-check-label" for="NoSocialChanges">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Physical Changes</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $physicalChanges = $studentFirst[0]->physicalChanges; if($physicalChanges =='Yes'){echo 'checked';} ?> name="PhysicalChanges" value="Yes" id="YesPhysicalChanges">
			<label class="form-check-label" for="YesPhysicalChanges">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $physicalChanges = $studentFirst[0]->physicalChanges; if($physicalChanges =='No'){echo 'checked';} ?> name="PhysicalChanges" value="No" id="NoPhysicalChanges">
			<label class="form-check-label" for="NoPhysicalChanges">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Sleep Disturbance</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $sleepDisturbance = $studentFirst[0]->sleepDisturbance; if($sleepDisturbance =='Yes'){echo 'checked';} ?> name="SleepDisturbance" value="Yes" id="YesSleepDisturbance">
			<label class="form-check-label" for="YesSleepDisturbance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $sleepDisturbance = $studentFirst[0]->sleepDisturbance; if($sleepDisturbance =='No'){echo 'checked';} ?> name="SleepDisturbance" value="No" id="NoSleepDisturbance">
			<label class="form-check-label" for="NoSleepDisturbance">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Poor School Performance</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $poorSchool = $studentFirst[0]->poorSchool; if($poorSchool =='Yes'){echo 'checked';} ?> name="PoorSchool" value="Yes" id="YesPoorSchool">
			<label class="form-check-label" for="YesPoorSchool">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $poorSchool = $studentFirst[0]->poorSchool; if($poorSchool =='No'){echo 'checked';} ?> name="PoorSchool" value="No" id="NoPoorSchool">
			<label class="form-check-label" for="NoPoorSchool">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Panic Attack</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $panicAttack = $studentFirst[0]->panicAttack; if($panicAttack =='Yes'){echo 'checked';} ?> name="PanicAttack" value="Yes" id="YesPanicAttack">
			<label class="form-check-label" for="YesPanicAttack">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $panicAttack = $studentFirst[0]->panicAttack; if($panicAttack =='No'){echo 'checked';} ?> name="PanicAttack" value="No" id="NoPanicAttack">
			<label class="form-check-label" for="NoPanicAttack">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Anxiety</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $anxiety = $studentFirst[0]->anxiety; if($anxiety =='Yes'){echo 'checked';} ?> name="Anxiety" value="Yes" id="YesAnxiety">
			<label class="form-check-label" for="YesAnxiety">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $anxiety = $studentFirst[0]->anxiety; if($anxiety =='No'){echo 'checked';} ?> name="Anxiety" value="No" id="NoAnxiety">
			<label class="form-check-label" for="NoAnxiety">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Sudden Change In Attitude Performance</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $performance = $studentFirst[0]->performance; if($performance =='Yes'){echo 'checked';} ?> name="Performance" value="Yes" id="YesPerformance">
			<label class="form-check-label" for="YesPerformance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $performance = $studentFirst[0]->performance; if($performance =='No'){echo 'checked';} ?> name="Performance" value="No" id="NoPerformance">
			<label class="form-check-label" for="NoPerformance">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Mood Affected By Thought About Appearence</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $aboutAppearence = $studentFirst[0]->aboutAppearence; if($aboutAppearence =='Yes'){echo 'checked';} ?> name="AboutAppearence" value="Yes" id="YesAboutAppearence">
			<label class="form-check-label" for="YesAboutAppearence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $aboutAppearence = $studentFirst[0]->aboutAppearence; if($aboutAppearence =='No'){echo 'checked';} ?> name="AboutAppearence" value="No" id="NoAboutAppearence">
			<label class="form-check-label" for="NoAboutAppearence">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Constantly Compares Self To Others</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $comparesSelf = $studentFirst[0]->comparesSelf; if($comparesSelf =='Yes'){echo 'checked';} ?> name="ComparesSelf" value="Yes" id="YesComparesSelf">
			<label class="form-check-label" for="YesComparesSelf">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $comparesSelf = $studentFirst[0]->comparesSelf; if($comparesSelf =='No'){echo 'checked';} ?> name="ComparesSelf" value="No" id="NoComparesSelf">
			<label class="form-check-label" for="NoComparesSelf">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Refer To Self As Fat, Gross, Ugly</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $ugly = $studentFirst[0]->ugly; if($ugly =='Yes'){echo 'checked';} ?> name="Ugly" value="Yes" id="YesUgly">
			<label class="form-check-label" for="YesUgly">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $ugly = $studentFirst[0]->ugly; if($ugly =='No'){echo 'checked';} ?> name="Ugly" value="No" id="NoUgly">
			<label class="form-check-label" for="NoUgly">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin" id="self_specify" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Specify</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Specify_ugly" value="<?php echo $studentFirst[0]->specify_ugly; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Strive To Create A Perfect Image</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $perfectImage = $studentFirst[0]->perfectImage; if($perfectImage =='Yes'){echo 'checked';} ?> name="PerfectImage" value="Yes" id="YesPerfectImage">
			<label class="form-check-label" for="YesPerfectImage">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $perfectImage = $studentFirst[0]->perfectImage; if($perfectImage =='No'){echo 'checked';} ?> name="PerfectImage" value="No" id="NoPerfectImage">
			<label class="form-check-label" for="NoPerfectImage">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Incessant Task About Food</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $incessant = $studentFirst[0]->incessant; if($incessant =='Yes'){echo 'checked';} ?> name="Incessant" value="Yes" id="YesIncessant">
			<label class="form-check-label" for="YesIncessant">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $incessant = $studentFirst[0]->incessant; if($incessant =='No'){echo 'checked';} ?> name="Incessant" value="No" id="NoIncessant">
			<label class="form-check-label" for="NoIncessant">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Emotions Are Flat/Absent</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $emotions = $studentFirst[0]->emotions; if($emotions =='Yes'){echo 'checked';} ?> name="Emotions" value="Yes" id="YesEmotions">
			<label class="form-check-label" for="YesEmotions">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $emotions = $studentFirst[0]->emotions; if($emotions =='No'){echo 'checked';} ?> name="Emotions" value="No" id="NoEmotions">
			<label class="form-check-label" for="NoEmotions">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Intolerence For ImPerfection In Academics, Eating, Social Life Etc</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $intolerence = $studentFirst[0]->intolerence; if($intolerence =='Yes'){echo 'checked';} ?> name="Intolerence" value="Yes" id="YesIntolerence">
			<label class="form-check-label" for="YesIntolerence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $intolerence = $studentFirst[0]->intolerence; if($intolerence =='No'){echo 'checked';} ?> name="Intolerence" value="No" id="NoIntolerence">
			<label class="form-check-label" for="NoIntolerence">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin" id="intolerence_specify" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Specify</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Specify_tolerance" value="<?php echo $studentFirst[0]->specify_tolerance; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Spend Increasing Amount Of Time Alone</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $timeAlone = $studentFirst[0]->timeAlone; if($timeAlone =='Yes'){echo 'checked';} ?> name="TimeAlone" value="Yes" id="YesTimeAlone">
			<label class="form-check-label" for="YesTimeAlone">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $timeAlone = $studentFirst[0]->timeAlone; if($timeAlone =='No'){echo 'checked';} ?> name="TimeAlone" value="No" id="NoTimeAlone">
			<label class="form-check-label" for="NoTimeAlone">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Pulls Back From Friend</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $pullsBack = $studentFirst[0]->pullsBack; if($pullsBack =='Yes'){echo 'checked';} ?> name="PullsBack" value="Yes" id="YesPullsBack">
			<label class="form-check-label" for="YesPullsBack">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $pullsBack = $studentFirst[0]->pullsBack; if($pullsBack =='No'){echo 'checked';} ?> name="PullsBack" value="No" id="NoPullsBack">
			<label class="form-check-label" for="NoPullsBack">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Is Obsessed With Maintaining Unhealthy Eating Habits To Inhance Performance In Sports, Dance, Acting Or Modelling</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $modelling = $studentFirst[0]->modelling; if($modelling =='Yes'){echo 'checked';} ?> name="Modelling" value="Yes" id="YesModelling">
			<label class="form-check-label" for="YesModelling">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $modelling = $studentFirst[0]->modelling; if($modelling =='No'){echo 'checked';} ?> name="Modelling" value="No" id="NoModelling">
			<label class="form-check-label" for="NoModelling">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row rowMargin" id="obsessed_specify" style="display:none;">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Specify</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Specify_obessed" value="<?php echo $studentFirst[0]->specify_obessed; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Reluctant To Ask For Help</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $ask = $studentFirst[0]->ask; if($ask =='Yes'){echo 'checked';} ?> name="Ask" value="Yes" id="YesAsk">
			<label class="form-check-label" for="YesAsk">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $ask = $studentFirst[0]->ask; if($ask =='No'){echo 'checked';} ?> name="Ask" value="No" id="NoAsk">
			<label class="form-check-label" for="NoAsk">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Sudden Weight Loss / Weight Gain Or Fluctuation In Short Time </label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $weightGain = $studentFirst[0]->weightGain; if($weightGain =='Yes'){echo 'checked';} ?> name="WeightGain" value="Yes" id="YesWeightGain">
			<label class="form-check-label" for="YesWeightGain">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $weightGain = $studentFirst[0]->weightGain; if($weightGain =='No'){echo 'checked';} ?> name="WeightGain" value="No" id="NoWeightGain">
			<label class="form-check-label" for="NoWeightGain">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Complaints Of Abdominal Plain</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $abdominal = $studentFirst[0]->abdominal; if($abdominal =='Yes'){echo 'checked';} ?> name="Abdominal" value="Yes" id="YesAbdominal">
			<label class="form-check-label" for="YesAbdominal">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $abdominal = $studentFirst[0]->abdominal; if($abdominal =='No'){echo 'checked';} ?> name="Abdominal" value="No" id="NoAbdominal">
			<label class="form-check-label" for="NoAbdominal">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Feeling Full Or Bloated</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $bloated = $studentFirst[0]->bloated; if($bloated =='Yes'){echo 'checked';} ?> name="Bloated" value="Yes" id="YesBloated">
			<label class="form-check-label" for="YesBloated">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $bloated = $studentFirst[0]->bloated; if($bloated =='No'){echo 'checked';} ?> name="Bloated" value="No" id="NoBloated">
			<label class="form-check-label" for="NoBloated">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Dark Circles Under The Eyes</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $circles = $studentFirst[0]->circles; if($circles =='Yes'){echo 'checked';} ?> name="Circles" value="Yes" id="YesCircles">
			<label class="form-check-label" for="YesCircles">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $circles = $studentFirst[0]->circles; if($circles =='No'){echo 'checked';} ?> name="Circles" value="No" id="NoCircles">
			<label class="form-check-label" for="NoCircles">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Make Frequent Bathroom Trips</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $bathroom = $studentFirst[0]->bathroom; if($bathroom =='Yes'){echo 'checked';} ?> name="Bathroom" value="Yes" id="YesBathroom">
			<label class="form-check-label" for="YesBathroom">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $bathroom = $studentFirst[0]->bathroom; if($bathroom =='No'){echo 'checked';} ?> name="Bathroom" value="No" id="NoBathroom">
			<label class="form-check-label" for="NoBathroom">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Any School Phobia</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $phobia = $studentFirst[0]->phobia; if($phobia =='Yes'){echo 'checked';} ?> name="Phobia" value="Yes" id="YesPhobia">
			<label class="form-check-label" for="YesPhobia">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $phobia = $studentFirst[0]->phobia; if($phobia =='No'){echo 'checked';} ?> name="Phobia" value="No" id="NoPhobia">
			<label class="form-check-label" for="NoPhobia">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Mobile Addiction</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $mobileAddiction = $studentFirst[0]->mobileAddiction; if($mobileAddiction =='Yes'){echo 'checked';} ?> name="MobileAddiction" value="Yes" id="YesMobileAddiction">
			<label class="form-check-label" for="YesMobileAddiction">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $mobileAddiction = $studentFirst[0]->mobileAddiction; if($mobileAddiction =='No'){echo 'checked';} ?> name="MobileAddiction" value="No" id="NoMobileAddiction">
			<label class="form-check-label" for="NoMobileAddiction">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Short Term Memory Loss</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $memoryLoss = $studentFirst[0]->memoryLoss; if($memoryLoss =='Yes'){echo 'checked';} ?> name="MemoryLoss" value="Yes" id="YesMemoryLoss">
			<label class="form-check-label" for="YesMemoryLoss">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $memoryLoss = $studentFirst[0]->memoryLoss; if($memoryLoss =='No'){echo 'checked';} ?> name="MemoryLoss" value="No" id="NoMemoryLoss">
			<label class="form-check-label" for="NoMemoryLoss">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Substance Abuse</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $substance = $studentFirst[0]->substance; if($substance =='Yes'){echo 'checked';} ?> name="Substance" value="Yes" id="YesSubstance">
			<label class="form-check-label" for="YesSubstance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $substance = $studentFirst[0]->substance; if($substance =='No'){echo 'checked';} ?> name="Substance" value="No" id="NoSubstance">
			<label class="form-check-label" for="NoSubstance">
			No
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $substance = $studentFirst[0]->substance; if($substance =='Not applicable'){echo 'checked';} ?> name="Substance" value="Not applicable" id="NotSubstance">
			<label class="form-check-label" for="NotSubstance">
			Not applicable
			</label>
			</div>
			
			
			
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Delay In Measuration Cycle</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $measurationCycle = $studentFirst[0]->measurationCycle; if($measurationCycle =='Yes'){echo 'checked';} ?> name="MeasurationCycle" value="Yes" id="YesMeasurationCycle">
			<label class="form-check-label" for="YesMeasurationCycle">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $measurationCycle = $studentFirst[0]->measurationCycle; if($measurationCycle =='No'){echo 'checked';} ?> name="MeasurationCycle" value="No" id="NoMeasurationCycle">
			<label class="form-check-label" for="NoMeasurationCycle">
			No
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $measurationCycle = $studentFirst[0]->measurationCycle; if($measurationCycle =='Not applicable'){echo 'checked';} ?> name="MeasurationCycle" value="Not applicable" id="NotMeasurationCycle">
			<label class="form-check-label" for="NotMeasurationCycle">
			Not applicable
			</label>
			</div>
			
			</div>
			</div>
			</div>
			
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Irregular Period</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $irregularPeriod = $studentFirst[0]->irregularPeriod; if($irregularPeriod =='Yes'){echo 'checked';} ?> name="IrregularPeriod" value="Yes" id="YesIrregularPeriod">
			<label class="form-check-label" for="YesIrregularPeriod">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $irregularPeriod = $studentFirst[0]->irregularPeriod; if($irregularPeriod =='No'){echo 'checked';} ?> name="IrregularPeriod" value="No" id="NoIrregularPeriod">
			<label class="form-check-label" for="NoIrregularPeriod">
			No
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $irregularPeriod = $studentFirst[0]->irregularPeriod; if($irregularPeriod =='Not applicable'){echo 'checked';} ?> name="IrregularPeriod" value="Not applicable" id="NotIrregularPeriod">
			<label class="form-check-label" for="NotIrregularPeriod">
			Not applicable
			</label>
			</div>
			
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Pain During Mensuration</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $painDuring = $studentFirst[0]->painDuring; if($painDuring =='Yes'){echo 'checked';} ?> name="PainDuring" value="Yes" id="YesPainDuring">
			<label class="form-check-label" for="YesPainDuring">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $painDuring = $studentFirst[0]->painDuring; if($painDuring =='No'){echo 'checked';} ?> name="PainDuring" value="No" id="NoPainDuring">
			<label class="form-check-label" for="NoPainDuring">
			No
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $painDuring = $studentFirst[0]->painDuring; if($painDuring =='Not applicable'){echo 'checked';} ?> name="PainDuring" value="Not applicable" id="NotPainDuring">
			<label class="form-check-label" for="NotPainDuring">
			Not applicable
			</label>
			</div>
			
			
			</div>
			</div>
			</div>
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Pain Or Burning Sensation While Urination</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" <?php $urination = $studentFirst[0]->urination; if($urination =='Yes'){echo 'checked';} ?> name="Urination" value="Yes" id="YesUrination">
			<label class="form-check-label" for="YesUrination">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" <?php $urination = $studentFirst[0]->urination; if($urination =='No'){echo 'checked';} ?> name="Urination" value="No" id="NoUrination">
			<label class="form-check-label" for="NoUrination">
			No
			</label>
			</div>
			</div>
			</div>
			</div>
			
			
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Advice</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="psycology_Advice" value="<?php echo $studentFirst[0]->psycology_Advice; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Remark</label>
			</div>
			</div>


			 <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="psycology_Remark" value="<?php echo $studentFirst[0]->psycology_Remark; ?>">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div> 
			
       
        
      </div>
	  
    </section>
				
				
			 </div>
			 
			 
			  <div class="tab-pane fade" id="vert-tabs-availability" role="tabpanel" aria-labelledby="vert-tabs-availability-tab">
             
			
        <div class="card card-primary card-outline">
          <div class="card-header">
            
          </div>
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-monday-tab" data-toggle="pill" href="#custom-content-below-monday" role="tab" aria-controls="custom-content-below-monday" aria-selected="true">Monday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-tuesday-tab" data-toggle="pill" href="#custom-content-below-tuesday" role="tab" aria-controls="custom-content-below-tuesday" aria-selected="false">Tuesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-wednesday-tab" data-toggle="pill" href="#custom-content-below-wednesday" role="tab" aria-controls="custom-content-below-wednesday" aria-selected="false">Wednesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-thursday-tab" data-toggle="pill" href="#custom-content-below-thursday" role="tab" aria-controls="custom-content-below-thursday" aria-selected="false">Thursday</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" id="custom-content-below-friday-tab" data-toggle="pill" href="#custom-content-below-friday" role="tab" aria-controls="custom-content-below-friday" aria-selected="false">Friday</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" id="custom-content-below-saturday-tab" data-toggle="pill" href="#custom-content-below-saturday" role="tab" aria-controls="custom-content-below-saturday" aria-selected="false">Saturday</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" id="custom-content-below-sunday-tab" data-toggle="pill" href="#custom-content-below-sunday" role="tab" aria-controls="custom-content-below-sunday" aria-selected="false">Sunday</a>
              </li>
			 
            
			
			</ul>
            <div class="tab-content available-time-height" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-monday" role="tabpanel" aria-labelledby="custom-content-below-monday-tab">
				
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				
				
			 </div>
              <div class="tab-pane fade" id="custom-content-below-tuesday" role="tabpanel" aria-labelledby="custom-content-below-tuesday-tab">


				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
			  </div>
			  
			  <div class="tab-pane fade" id="custom-content-below-wednesday" role="tabpanel" aria-labelledby="custom-content-below-wednesday-tab">

				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				
			  </div>
			  
			  <div class="tab-pane fade" id="custom-content-below-thursday" role="tabpanel" aria-labelledby="custom-content-below-thursday-tab">

				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				
			  </div>
			  
			  <div class="tab-pane fade" id="custom-content-below-friday" role="tabpanel" aria-labelledby="custom-content-below-friday-tab">

				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				
			  </div>
			  
			  <div class="tab-pane fade" id="custom-content-below-saturday" role="tabpanel" aria-labelledby="custom-content-below-saturday-tab">

				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				
				
			  </div>
			  
			  <div class="tab-pane fade" id="custom-content-below-sunday" role="tabpanel" aria-labelledby="custom-content-below-sunday-tab">

				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				<small class="available-time"><b>10:00 Am - 12:00 Pm</b></small>
				
				
			  </div>
			  

            </div>
           
			
          </div>
          <!-- /.card -->
        </div>
        
			 
			 </div>
			 
			
			</div>
		  </div>
		</div>
			
			
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
		
		
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

 <div class="modal fade" id="user-otp">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Verify OTP</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
            <div class="row">
              <div class="col-md-12">
               
               
               <div class="form-group">
                    <p>Please enter the OTP sent to 9989096124</p>
                    <input type="number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "4" value="Enter OTP">
                  </div>
              </div>
             
            </div>
            
            
			
			 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Verify</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>


	
	  
	  
	  <div class="modal fade" id="modal-add-services">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:20px;" class="modal-title">Add Services</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Services</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Services">
                  </div>
              </div>
            </div>
          </div>
            </section>
            
			
			 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" style="margin-left:33px;" class="btn btn-primary">Add</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  <div class="modal fade" id="modal-add-department">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:20px;" class="modal-title">Add Department</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Department</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Department">
                  </div>
              </div>
            </div>
          </div>
            </section>
            
			
			 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" style="margin-left:33px;" class="btn btn-primary">Add</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	   <div class="modal fade" id="modal-add-medicines">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:20px;" class="modal-title">Add Medicines</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Medicines</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medicines">
                  </div>
              </div>
            </div>
          </div>
            </section>
            
			
			 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" style="margin-left:33px;" class="btn btn-primary">Add</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  <div class="modal fade" id="modal-reject-document">
	  
        <div class="modal-dialog modal-lg">
		
		
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:25px;" class="modal-title">Reason For Rejection</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
			
			<div class="col-sm-12">
			<!-- radio -->
			<div class="form-group">
			<div class="custom-control custom-radio">
			
			<input class="form-check-input" type="radio" id="image-not-clear" name="reject-document">
			<label class="form-check-label">Image not clear</label>
			
			
			</div>
			</div>
			</div>
			
			<div class="col-sm-12">
			<!-- radio -->
			<div class="form-group">
			<div class="custom-control custom-radio">
			
			<input class="form-check-input" type="radio" id="incomplete-document" name="reject-document">
			<label class="form-check-label">Incomplete Document</label>
			
			</div>
			</div>
			</div>
			
			<div class="col-sm-12">
			<!-- radio -->
			<div class="form-group">
			<div class="custom-control custom-radio">
			<input class="form-check-input" type="radio" id="Others" name="reject-document">
			<label class="form-check-label">Others</label>
			</div>
			</div>
			</div>
			
              <div id="rejection-text" style="display:none;"  class="col-md-12">
                <div class="form-group">
				<input type="text" class="form-control" name="description" value="Enter Reason ...">
				</div>
              </div>
            </div>
          </div>
           
            
			
			 
            </div>
            <div class="modal-footer justify-content-between">
			<button style="margin-left:15px;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary">Submit</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
     


	 </div>
	  
	  
	  
      </div>
	  
	  
	  
	  <div class="modal fade" id="modal-test-details">
        <div class="modal-dialog modal-xl">
		
		
          
		  
		  <div class="modal-content">
		  
		  
		  
		  
		  
		  
		  
            <div class="modal-header">
			  <h4 class="modal-title">Endoscopy</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			 
			 
			 
			 
			 
			<div class="row">
			 
			  
			 
          <div class="col-12 col-sm-12">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" style="border-bottom: none;" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Test Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Description</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Instruction</a>
                  </li>
                  
                </ul>
              </div>
			  
			
			  
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

			<section class="content">
             <div class="row">
			
              <div class="col-md-3">
                <div class="form-group">
                  <p><label>Test Name</label></p>
                  <p>Endoscopy</p>
                </div>
              </div>
			 
			  <div class="col-md-3">
                <div class="form-group">
                  <p><label>MRP Price	</label></p>
                  <p><i class="fa fa-inr"></i> <del style="margin-right:5px;">330</del><i class="fa fa-inr"></i>200</p>
                </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                  <p><label>Category</label></p>
                  <p>EGD</p>
                </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                  <p><label>Sub-category</label></p>
                  <p>Gastroscopy</p>
                </div>
              </div>
			  
            </div>
           
          </section>


                  </div>
				  
				  
				  
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">


			<section class="content">
               
            <div class="row">
			
              <div class="col-md-12">
                <div class="form-group">
                  
                  <p>The definition of diagnostic is something related to the identification of a problem or disease. ... An example of diagnostic is a symptom that is characteristic of a particular disease and that helps doctors to recognize that illness.</p>
                </div>
              </div>
			 
            </div>
           
        </section>


                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">

 <section class="content">
      
            <div class="row">
			
              <div class="col-md-12">
                <div class="form-group">
                  
                  <p>The definition of diagnostic is something related to the identification of a problem or disease. ... An example of diagnostic is a symptom that is characteristic of a particular disease and that helps doctors to recognize that illness.</p>
                </div>
              </div>
			 
            </div>
           
      
      </section>

                  </div>
                 
                </div>
              </div>
              <!-- /.card -->
          </div>
			  
    
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
		
		
		   <div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
      </div>
      
	  </div>
      </div>
	  
	  
	  
	  
	  <div class="modal fade" id="modal-test-package-details">
        <div class="modal-dialog modal-xl">
          
		  
		  
		  
		 <div class="modal-content">
		  
		  
		  
		  
		  
		  
		  
            <div class="modal-header">
			  <h4 style="margin-left:0px;" class="modal-title">Endoscopy</h4>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			 
			 
			 
			 
			 
			<div class="row">
			 
			  
			 
          <div class="col-12 col-sm-12">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" style="border-bottom: none;" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home1-tab" data-toggle="pill" href="#custom-tabs-one-home1" role="tab" aria-controls="custom-tabs-one-home1" aria-selected="true">Test Package Details</a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-testno-tab" data-toggle="pill" href="#custom-tabs-one-testno" role="tab" aria-controls="custom-tabs-one-testno" aria-selected="false">Test</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile1-tab" data-toggle="pill" href="#custom-tabs-one-profile1" role="tab" aria-controls="custom-tabs-one-profile1" aria-selected="false">Description</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages1-tab" data-toggle="pill" href="#custom-tabs-one-messages1" role="tab" aria-controls="custom-tabs-one-messages1" aria-selected="false">Instruction</a>
                  </li>
                  
                </ul>
              </div>
			  
			
			  
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home1" role="tabpanel" aria-labelledby="custom-tabs-one-home1-tab">

			<section class="content">
             <div class="row">
			
              <div class="col-md-3">
                <div class="form-group">
                  <p><label>Test Package Name</label></p>
                  <p>Endoscopy</p>
                </div>
              </div>
			 
			  <div class="col-md-3">
                <div class="form-group">
                  <p><label>MRP Price	</label></p>
                  <p><i class="fa fa-inr"></i> <del style="margin-right:5px;">330</del><i class="fa fa-inr"></i>200</p>
                </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                  <p><label>Category</label></p>
                  <p>EGD</p>
                </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                  <p><label>Sub-category</label></p>
                  <p>Gastroscopy</p>
                </div>
              </div>
			  
            </div>
           
          </section>


                  </div>
				  
				<div class="tab-pane fade show" id="custom-tabs-one-testno" role="tabpanel" aria-labelledby="custom-tabs-one-testno-tab">
				<ul>
				<li>Biopsy</li>
				<li>Endoscopy</li>
				<li>Platelet count</li>
				</ul>
				
				</div>
				  
                  <div class="tab-pane fade" id="custom-tabs-one-profile1" role="tabpanel" aria-labelledby="custom-tabs-one-profile1-tab">


			<section class="content">
               
            <div class="row">
			
              <div class="col-md-12">
                <div class="form-group">
                  
                  <p>The definition of diagnostic is something related to the identification of a problem or disease. ... An example of diagnostic is a symptom that is characteristic of a particular disease and that helps doctors to recognize that illness.</p>
                </div>
              </div>
			 
            </div>
           
        </section>


                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages1" role="tabpanel" aria-labelledby="custom-tabs-one-messages1-tab">

 <section class="content">
      
            <div class="row">
			
              <div class="col-md-12">
                <div class="form-group">
                  
                  <p>The definition of diagnostic is something related to the identification of a problem or disease. ... An example of diagnostic is a symptom that is characteristic of a particular disease and that helps doctors to recognize that illness.</p>
                </div>
              </div>
			 
            </div>
           
      
      </section>

                  </div>
                 
                </div>
              </div>
              <!-- /.card -->
          </div>
			  
    
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
		
		
		 <div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
		
      </div>
	  
	  
	  </div>
      </div>
	  
	  
	  
	 <div class="modal fade" id="modal-add-image">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:25px;" class="modal-title">Add Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
			

<div class="col-md-6">
		<div class="form-group">
				<label for="exampleInputEmail1">Image Type</label>
				  <select name="demo" class="form-control select2">
					  <option value="3" selected >Select</option>
					  <option value="1">Profile Photo</option>
					  <option value="2">Banner Images</option>
				  </select> 
		</div>
		</div>


<div class="col-md-6">
 <div class="form-group">
<label for="exampleInputFile">File input</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
</div>
</div>
</div> 
</div>
 </div>
          </div>
           
            </div>
            <div class="modal-footer justify-content-between">
			<button style="margin-left:15px;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary">Upload</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	   <div class="modal fade" id="modal-add-facilities">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:25px;" class="modal-title">Add Facilites</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
			

<div class="col-md-6">
		<div class="form-group">
				<label for="exampleInputEmail1">Facilites</label>
				  <select name="demo" class="form-control select2">
					  <option value="3" selected >Select</option>
					  <option value="1">Dental</option>
					  <option value="1">OPD</option>
					  <option value="2">Physiotherapy</option>
				  </select> 
		</div>
		</div>
			
            </div>
          </div>
           
            
			
			 
            </div>
            <div class="modal-footer justify-content-between">
			<button style="margin-left:15px;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary">Upload</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  <div class="modal fade" id="modal-add-doctors">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="margin-left:25px;" class="modal-title">Add Doctors</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
          
          <div class="card-body">
            <div class="row">
			

    <div class="col-md-4">
		<div class="form-group">
		<label for="exampleInputPassword1">Full Name</label>
		<input type="text" class="form-control" id="exampleInputPassword1" value="Full Name">
		</div>
		</div>
		
		
		<div class="col-md-4">
		<div class="form-group">
				<label for="exampleInputEmail1">Gender</label>
				  <select name="demo" class="form-control select2">
					  <option value="3" selected >Select</option>
					  <option value="1">Male</option>
					  <option value="2">Female</option>
				  </select> 
		</div>
		</div>
		
		<div class="col-md-4">
		<div class="form-group">
				<label for="exampleInputEmail1">Department</label>
				  <select name="demo" class="form-control select2">
					  <option value="3" selected >Select</option>
					  <option value="1">Paramedical</option>
					  <option value="2">Rehabilitation</option>
				  </select> 
		</div>
		</div>
		
		<div class="col-md-4">
		<div class="form-group">
		<label for="exampleInputPassword1">Experience</label>
		<input type="number" class="form-control" id="exampleInputPassword1" value="Years">
		</div>
		</div>
		

		<div class="col-md-4">
		 <div class="form-group">
		<label for="exampleInputFile">Photo</label>
		<div class="input-group">
		<div class="custom-file">
		<input type="file" class="custom-file-input" id="exampleInputFile">
		<label class="custom-file-label" for="exampleInputFile">Choose file</label>
		</div>
		<div class="input-group-append">
		</div>
		</div>
		</div> 
		</div>
			
            </div>
			 </div>
           
            </div>
            <div class="modal-footer justify-content-between">
			<button style="margin-left:15px;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary">Upload</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  
					<script>
					$(document).ready(function(){
					$("#document").change(function(){
					var DocumentVal = $('#document').val();
					if(DocumentVal=='Rejected'){
						$('#modal-reject-document').modal('show');
					}
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#PainMuscular").click(function(){
					$("#pain-position").css('display', 'block');
					});

					});
					</script>
					
					
					<script>
					$(document).ready(function(){
					$("#PainNormal").click(function(){
					$("#pain-position").css('display', 'block');
					});

					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#PainWeak").click(function(){
					$("#pain-position").css('display', 'block');
					});

					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#NoPain").click(function(){
					$("#pain-position").css('display', 'none');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#SpasmMild").click(function(){
					$("#spasm_position").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#SpasmHeavy").click(function(){
					$("#spasm_position").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#NoSpasm").click(function(){
					$("#spasm_position").css('display', 'none');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#SpasmNoPain").click(function(){
					$("#spasm_position").css('display', 'none');
					});
					});
					</script>
					
					
					<script>
					$(document).ready(function(){
					$("#InitialCaries").click(function(){
					$("#PeriodontalText").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#ModerateCaries").click(function(){
					$("#PeriodontalText").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#AverageCaries").click(function(){
					$("#PeriodontalText").css('display', 'block');
					});
					});
					</script>
					
					
					<script>
					$(document).ready(function(){
					$("#NoCariesCaries").click(function(){
					$("#PeriodontalText").css('display', 'none');
					});
					});
					</script>
					
					
	
	
					<script>
					$(document).ready(function(){
					$("#vert-tabs-home").click(function(){
					$("#vert-tabs-profile-tab").addClass("active");
					$("#vert-tabs-home-tab").removeClass("active");
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#save-experience").click(function(){
					$("#vert-tabs-experience-tab").addClass("active");
					$("#vert-tabs-profile-tab").removeClass("active");
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#MalpositionedYes").click(function(){
					$("#SpecifyTooth").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#MalpositionedNo").click(function(){
					$("#SpecifyTooth").css('display', 'none');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#YesEar").click(function(){
					$("#whichearcol").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#NoEar").click(function(){
					$("#whichearcol").css('display', 'none');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#GLASSESFluidEstimation").click(function(){
					$("#FluidEstimationVal").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#MLFluidEstimation").click(function(){
					$("#FluidEstimationVal").css('display', 'none');
					});
					});
					</script>
					
					
					<script>
					$(document).ready(function(){
					$("#YesUgly").click(function(){
						
					$("#self_specify").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#NoUgly").click(function(){
					$("#self_specify").css('display', 'none');
					});
					});
					</script>
					
					
					<script>
					$(document).ready(function(){
					$("#YesIntolerence").click(function(){
					$("#intolerence_specify").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#NoIntolerence").click(function(){
					$("#intolerence_specify").css('display', 'none');
					});
					});
					</script>
					
					
					<script>
					$(document).ready(function(){
					$("#YesModelling").click(function(){
					$("#obsessed_specify").css('display', 'block');
					});
					});
					</script>
					
					<script>
					$(document).ready(function(){
					$("#NoModelling").click(function(){
					$("#obsessed_specify").css('display', 'none');
					});
					});
					</script>
					
					
					
					
				
					<script>
					$(document).ready(function(){
					$("#saveButton").click(function(){
					
					//profile form
					
					var Student_Name =$('#Student_Name').val();
					var Gender=$('#Gender').val();
					var Address=$('#Address').val();
					var Email=$('#Email').val();
					var Emergency=$('#Emergency').val();
					var Father_Name=$('#Father_Name').val();
					var Birth =$('#Birth').val();
					var Mother_Name=$('#Mother_Name').val();
					var School_Name=$('#School_Name').val();
					var StudentClass= $('#Class').val();
					var Section = $('#Section').val();
					var Siblings = $('#Siblings').val();
					
					//physical assessment form
					
					var Height= $('#Height').val();
					var Weight= $('#Weight').val();
					var BMI= $('#BMI').val();
					var Body_Temperature = $('#Body_Temperature').val();
					var Body_Temperature_value= $('#Body_Temperature_value').val();
					var Blood_Pressure_Systolic= $('#Blood_Pressure_Systolic').val();
					var Blood_Pressure_Diastolic= $('#Blood_Pressure_Diastolic').val();
					var Pulse_Rate= $('#Pulse_Rate').val();
					var Oxygen_Saturation= $('#Oxygen_Saturation').val();
					var PostureValue = $("input[name='Posture']:checked").val();
					var UpperLimb= $("input[name='UpperLimb']:checked").val();
					var NeckLimb= $("input[name='NeckLimb']:checked").val();
					var Both= $("input[name='Both']:checked").val();
					var Dystrophy= $("input[name='Dystrophy']:checked").val();
					var Astrophy= $("input[name='Astrophy']:checked").val();
					var Endurance= $("input[name='Endurance']:checked").val();
					var Stamina= $("input[name='Stamina']:checked").val();
					var Pain= $("input[name='Pain']:checked").val();
					var Pain_Position= $('#Pain_Position').val();
					var Spasm = $("input[name='Spasm']:checked").val();
					var Spasm_Position = $('#Spasm_Position').val();
					var Physical_advice= $('#Physical_advice').val();
					var Physical_remark = $('#Physical_remark').val();
					var studentCity = $('#studentCity').val();
					var studentState = $('#studentState').val();
					
					//Eye Vision form
					
					var RightVision= $('#RightVision').val();
					var LeftVision = $('#LeftVision').val();
					var LeftRefraction = $('#LeftRefraction').val();
					var RightRefraction = $('#RightRefraction').val();
					var LeftColorVision = $("input[name='LeftColorVision']:checked").val();
					var RightColorVision= $("input[name='RightColorVision']:checked").val();
					var LeftDisease= $("input[name='LeftDisease']:checked").val();
					var RightDisease= $("input[name='RightDisease']:checked").val();
					var LeftSquint= $("input[name='LeftSquint']:checked").val();
					var RightSquint= $("input[name='RightSquint']:checked").val();
					var LeftPtosis= $("input[name='LeftPtosis']:checked").val();
					var RightPtosis= $("input[name='RightPtosis']:checked").val();
					var LeftNystugmus= $("input[name='LeftNystugmus']:checked").val();
					var RightNystugmus= $("input[name='RightNystugmus']:checked").val();
					var LeftCataract= $("input[name='LeftCataract']:checked").val();
					var RightCataract= $("input[name='RightCataract']:checked").val();
					var LeftEyeBall= $("input[name='LeftEyeBall']:checked").val();
					var RightEyeBall= $("input[name='RightEyeBall']:checked").val();
					var LeftItching= $("input[name='LeftItching']:checked").val();
					var RightItching= $("input[name='RightItching']:checked").val();
					var LeftDryness= $("input[name='LeftDryness']:checked").val();
					var RightDryness= $("input[name='RightDryness']:checked").val();
					var LeftTears= $("input[name='LeftTears']:checked").val();
					var RightTears= $("input[name='RightTears']:checked").val();
					var LeftRedEyes= $("input[name='LeftRedEyes']:checked").val();
					var RightRedEyes= $("input[name='RightRedEyes']:checked").val();
					var LeftYellowishEyes= $("input[name='LeftYellowishEyes']:checked").val();
					var RightYellowishEyes= $("input[name='RightYellowishEyes']:checked").val();
					var Left_Eye_Advice= $('#Left_Eye_Advice').val();
					var Right_Eye_Advice= $('#Right_Eye_Advice').val();
					var Left_Eye_Remark= $('#Left_Eye_Remark').val();
					var Right_Eye_Remark= $('#Right_Eye_Remark').val();
					
					//Dental
					var Caries = $("input[name='Caries']:checked").val();
					var Periodontal_text = $('#Periodontal_text').val();
					var Orthodontic = $("input[name='Orthodontic']:checked").val();
					var Extraction = $("input[name='Extraction']:checked").val();
					var SpaceMaintainer = $("input[name='SpaceMaintainer']:checked").val();
					var OralHygieneStatus = $("input[name='OralHygieneStatus']:checked").val();
					var SugarIntake = $("input[name='SugarIntake']:checked").val();
					var Brushed = $("input[name='Brushed']:checked").val();
					var Malpositioned = $("input[name='Malpositioned']:checked").val();
					var Malpositioned_Specify_text = $('#Malpositioned_Specify_text').val();
					var Dental_Advice = $('#Dental_Advice').val();
					var Dental_Remark = $('#Dental_Remark').val();
					
					//Nutrition Assessment
					
					var PaleSkin = $("input[name='PaleSkin']:checked").val();
					var Heartbeats = $("input[name='Heartbeats']:checked").val();
					var Shortness = $("input[name='Shortness']:checked").val();
					var Dizziness = $("input[name='Dizziness']:checked").val();
					var ColdHands = $("input[name='ColdHands']:checked").val();
					var Anemia = $("input[name='Anemia']:checked").val();
					var Fatigue = $("input[name='Fatigue']:checked").val();
					var Deficiency = $("input[name='Deficiency']:checked").val();
					var Obesity = $("input[name='Obesity']:checked").val();
					var Ideal_Body_Weight = $('#Ideal_Body_Weight').val();
					var Ideal_Calories = $('#Ideal_Calories').val();
					var MicroNutrient = $("input[name='MicroNutrient']:checked").val();
					var FluidEstimation = $("input[name='FluidEstimation']:checked").val();
					var Fluid_Estimation = $('#Fluid_Estimation').val();
					var Nutrition_Advice = $('#Nutrition_Advice').val();
					var Nutrition_Remark = $('#Nutrition_Remark').val();
					
					//Psycological asessment
					var Annoyed = $("input[name='Annoyed']:checked").val();
					var Angry = $("input[name='Angry']:checked").val();
					var Blame = $("input[name='Blame']:checked").val();
					var Authorities = $("input[name='Authorities']:checked").val();
					var Tantrums = $("input[name='Tantrums']:checked").val();
					var Frustations = $("input[name='Frustations']:checked").val();
					var Behaviour = $("input[name='Behaviour']:checked").val();
					var Spelling = $("input[name='Spelling']:checked").val();
					var Paraphrasing = $("input[name='Paraphrasing']:checked").val();
					var PoorMemory = $("input[name='PoorMemory']:checked").val();
					var Surroundings = $("input[name='Surroundings']:checked").val();
					var Quite = $("input[name='Quite']:checked").val();
					var Fidgetting = $("input[name='Fidgetting']:checked").val();
					var ConcentrateOnTask = $("input[name='ConcentrateOnTask']:checked").val();
					var PhysicalMovements = $("input[name='PhysicalMovements']:checked").val();
					var ExcessiveTalking = $("input[name='ExcessiveTalking']:checked").val();
					var Wait = $("input[name='Wait']:checked").val();
					var Acting = $("input[name='Acting']:checked").val();
					var Interruption = $("input[name='Interruption']:checked").val();
					var Deficite = $("input[name='Deficite']:checked").val();
					var SelfEsteem = $("input[name='SelfEsteem']:checked").val();
					var IrritableActions = $("input[name='IrritableActions']:checked").val();
					var SuddenAnger = $("input[name='SuddenAnger']:checked").val();
					var FrequentAbsence = $("input[name='FrequentAbsence']:checked").val();
					var Suicide = $("input[name='Suicide']:checked").val();
					var RecklessBehaviour = $("input[name='RecklessBehaviour']:checked").val();
					var CryingFrequently = $("input[name='CryingFrequently']:checked").val();
					var Depression = $("input[name='Depression']:checked").val();
					var Edge = $("input[name='Edge']:checked").val();
					var SocialChanges = $("input[name='SocialChanges']:checked").val();
					var PhysicalChanges = $("input[name='PhysicalChanges']:checked").val();
					var SleepDisturbance = $("input[name='SleepDisturbance']:checked").val();
					var PoorSchool = $("input[name='PoorSchool']:checked").val();
					var PanicAttack = $("input[name='PanicAttack']:checked").val();
					var Anxiety = $("input[name='Anxiety']:checked").val();
					var Performance = $("input[name='Performance']:checked").val();
					var AboutAppearence = $("input[name='AboutAppearence']:checked").val();
					var ComparesSelf = $("input[name='ComparesSelf']:checked").val();
					var Ugly = $("input[name='Ugly']:checked").val();
					var Specify_ugly = $('#Specify_ugly').val();
					var PerfectImage = $("input[name='PerfectImage']:checked").val();
					var Incessant = $("input[name='Incessant']:checked").val();
					var Emotions = $("input[name='Emotions']:checked").val();
					var Intolerence = $("input[name='Intolerence']:checked").val();
					var Specify_tolerance = $('#Specify_tolerance').val();
					
					var TimeAlone = $("input[name='TimeAlone']:checked").val();
					var PullsBack = $("input[name='PullsBack']:checked").val();
					var Modelling = $("input[name='Modelling']:checked").val();
					var Specify_obessed = $('#Specify_obessed').val();
					var Ask = $("input[name='Ask']:checked").val();
					var WeightGain = $("input[name='WeightGain']:checked").val();
					var Abdominal = $("input[name='Abdominal']:checked").val();
					var Bloated = $("input[name='Bloated']:checked").val();
					var Circles = $("input[name='Circles']:checked").val();
					var Bathroom = $("input[name='Bathroom']:checked").val();
					var Phobia = $("input[name='Phobia']:checked").val();
					var MobileAddiction = $("input[name='MobileAddiction']:checked").val();
					var MemoryLoss = $("input[name='MemoryLoss']:checked").val();
					var Substance = $("input[name='Substance']:checked").val();
					var MeasurationCycle = $("input[name='MeasurationCycle']:checked").val();
					var IrregularPeriod = $("input[name='IrregularPeriod']:checked").val();
					var PainDuring = $("input[name='PainDuring']:checked").val();
					var Urination = $("input[name='Urination']:checked").val();
					var psycology_Advice = $('#psycology_Advice').val();
					var psycology_Remark = $('#psycology_Remark').val();
					
					//General asessment
					var Chest = $("input[name='Chest']:checked").val();
					var Abdomen = $("input[name='Abdomen']:checked").val();
					var Active_Infectious_Disease = $('#Active_Infectious_Disease').val();
					var Cleft = $("input[name='Cleft']:checked").val();
					var Club = $("input[name='Club']:checked").val();
					var Congenital = $("input[name='Congenital']:checked").val();
					var Deafness = $("input[name='Deafness']:checked").val();
					var SkinCondition = $("input[name='SkinCondition']:checked").val();
					var Otitis = $("input[name='Otitis']:checked").val();
					var NeuroMotor = $("input[name='NeuroMotor']:checked").val();
					var BodyType = $("input[name='BodyType']:checked").val();
					var General_Advice = $('#General_Advice').val();
					var General_Remark = $('#General_Remark').val();
					var Student_id = $('#Student_id').val();
					
					//Audiometry
					var Speech_Milestone = $('#Speech_Milestone').val();
					var Comprehension = $("input[name='Comprehension']:checked").val();
					var Expression = $("input[name='Expression']:checked").val();
					var Communication = $("input[name='Communication']:checked").val();
					var Auditory = $("input[name='Auditory']:checked").val();
					var HearingLoss = $("input[name='HearingLoss']:checked").val();
					var Tinnitus = $("input[name='Tinnitus']:checked").val();
					var Ear = $("input[name='Ear']:checked").val();
					var WhichEar = $("input[name='WhichEar']:checked").val();
					var Call = $("input[name='Call']:checked").val();
					var Hearing = $("input[name='Hearing']:checked").val();
					var Bilateral = $("input[name='Bilateral']:checked").val();
					var MedicalHistory = $("input[name='MedicalHistory']:checked").val();
					var Speech_Advice = $('#Speech_Advice').val();
					var Speech_Remark = $('#Speech_Remark').val();
					
					
					
					$.ajax({
					url:'{{url("update-student-details")}}',
					method:'POST',
					data:{Student_Name:Student_Name,Gender:Gender,Student_id:Student_id,
 					Address:Address,Email:Email,Emergency:Emergency,Father_Name:Father_Name,Birth:Birth,
					Mother_Name:Mother_Name,School_Name:School_Name,StudentClass:StudentClass,
					Section:Section,Siblings:Siblings,Height:Height,Weight:Weight,
					BMI:BMI,Body_Temperature:Body_Temperature,Body_Temperature_value:Body_Temperature_value,
					Blood_Pressure_Systolic:Blood_Pressure_Systolic,Blood_Pressure_Diastolic:Blood_Pressure_Diastolic,
					Pulse_Rate:Pulse_Rate,Oxygen_Saturation:Oxygen_Saturation,
					PostureValue:PostureValue,UpperLimb:UpperLimb,NeckLimb:NeckLimb,
					Both:Both,Dystrophy:Dystrophy,Astrophy:Astrophy,Endurance:Endurance,
					Stamina:Stamina,Pain:Pain,Pain_Position:Pain_Position,Spasm:Spasm,
					Spasm_Position:Spasm_Position,Physical_advice:Physical_advice,Physical_remark:Physical_remark,
					LeftVision:LeftVision,
					RightVision:RightVision,
					LeftRefraction:LeftRefraction,
					RightRefraction:RightRefraction,
					LeftColorVision:LeftColorVision,
					RightColorVision:RightColorVision,
					LeftDisease:LeftDisease,
					RightDisease:RightDisease,
					LeftSquint:LeftSquint,
					RightSquint:RightSquint,
					LeftPtosis:LeftPtosis,
					RightPtosis:RightPtosis,
					LeftNystugmus:LeftNystugmus,
					RightNystugmus:RightNystugmus,
					LeftCataract:LeftCataract,
					RightCataract:RightCataract,
					LeftEyeBall:LeftEyeBall,
					RightEyeBall:RightEyeBall,
					LeftItching:LeftItching,
					RightItching:RightItching,
					LeftDryness:LeftDryness,
					RightDryness:RightDryness,
					LeftTears:LeftTears,
					RightTears:RightTears,
					LeftRedEyes:LeftRedEyes,
					RightRedEyes:RightRedEyes,
					LeftYellowishEyes:LeftYellowishEyes,
					RightYellowishEyes:RightYellowishEyes,
					Left_Eye_Advice:Left_Eye_Advice,
					Right_Eye_Advice:Right_Eye_Advice,
					Left_Eye_Remark:Left_Eye_Remark,
					Right_Eye_Remark:Right_Eye_Remark,
					Caries:Caries,
					Periodontal_text:Periodontal_text,
					Orthodontic:Orthodontic,
					Extraction:Extraction,
					SpaceMaintainer:SpaceMaintainer,
					OralHygieneStatus:OralHygieneStatus,
					SugarIntake:SugarIntake,
					Brushed:Brushed,
					Malpositioned:Malpositioned,
					Malpositioned_Specify_text:Malpositioned_Specify_text,
					Dental_Advice:Dental_Advice,
					Dental_Remark:Dental_Remark,
					
                    PaleSkin:PaleSkin,
					Heartbeats:Heartbeats,
					Shortness:Shortness,
					Dizziness:Dizziness,
					ColdHands:ColdHands,
					Anemia:Anemia,
					Fatigue:Fatigue,
					Deficiency:Deficiency,
					Obesity:Obesity,
					Ideal_Body_Weight:Ideal_Body_Weight,
					Ideal_Calories:Ideal_Calories,
					MicroNutrient:MicroNutrient,
					FluidEstimation:FluidEstimation,
					Fluid_Estimation:Fluid_Estimation,
					Nutrition_Advice:Nutrition_Advice,
					Nutrition_Remark:Nutrition_Remark,
					
					Annoyed:Annoyed,
					Angry:Angry,
					Blame:Blame,
					Authorities:Authorities,
					Tantrums:Tantrums,
					Frustations:Frustations,
					Behaviour:Behaviour,
					Spelling:Spelling,
					Paraphrasing:Paraphrasing,
					PoorMemory:PoorMemory,
					Surroundings:Surroundings,
					Quite:Quite,
					Fidgetting:Fidgetting,
					ConcentrateOnTask:ConcentrateOnTask,
					PhysicalMovements:PhysicalMovements,
					ExcessiveTalking:ExcessiveTalking,
					Wait:Wait,
					Acting:Acting,
					Interruption:Interruption,
					Deficite:Deficite,
					SelfEsteem:SelfEsteem,
					IrritableActions:IrritableActions,
					SuddenAnger:SuddenAnger,
					FrequentAbsence:FrequentAbsence,
					Suicide:Suicide,
					RecklessBehaviour:RecklessBehaviour,
					CryingFrequently:CryingFrequently,
					Depression:Depression,
					Edge:Edge,
					SocialChanges:SocialChanges,
					
					PhysicalChanges:PhysicalChanges,
					SleepDisturbance:SleepDisturbance,
					PoorSchool:PoorSchool,
					PanicAttack:PanicAttack,
					Anxiety:Anxiety,
					Performance:Performance,
					AboutAppearence:AboutAppearence,
					ComparesSelf:ComparesSelf,
					Ugly:Ugly,
					Specify_ugly:Specify_ugly,
					PerfectImage:PerfectImage,
					Incessant:Incessant,
					Emotions:Emotions,
					Intolerence:Intolerence,
					Specify_tolerance:Specify_tolerance,
					TimeAlone:TimeAlone,
					PullsBack:PullsBack,
					Modelling:Modelling,
					Specify_obessed:Specify_obessed,
					Ask:Ask,
					WeightGain:WeightGain,
					Abdominal:Abdominal,
					Bloated:Bloated,
					Circles:Circles,
					Bathroom:Bathroom,
					Phobia:Phobia,
					MobileAddiction:MobileAddiction,
					MemoryLoss:MemoryLoss,
					Substance:Substance,
					MeasurationCycle:MeasurationCycle,
					IrregularPeriod:IrregularPeriod,
					PainDuring:PainDuring,
					Urination:Urination,
					psycology_Advice:psycology_Advice,
					psycology_Remark:psycology_Remark,
					
					Chest:Chest,
					Abdomen:Abdomen,
					Active_Infectious_Disease:Active_Infectious_Disease,
					Cleft:Cleft,
					Club:Club,
					Congenital:Congenital,
					Deafness:Deafness,
					SkinCondition:SkinCondition,
					Otitis:Otitis,
					NeuroMotor:NeuroMotor,
					BodyType:BodyType,
					General_Advice:General_Advice,
					General_Remark:General_Remark,
					
					Speech_Milestone:Speech_Milestone,
					Comprehension:Comprehension,
					Expression:Expression,
					Communication:Communication,
					Auditory:Auditory,
					HearingLoss:HearingLoss,
					Tinnitus:Tinnitus,
					Ear:Ear,
					WhichEar:WhichEar,
					Call:Call,
					Hearing:Hearing,
					Bilateral:Bilateral,
					MedicalHistory:MedicalHistory,
					Speech_Advice:Speech_Advice,
					Speech_Remark:Speech_Remark,
					studentCity:studentCity,
					studentState:studentState,
					'_token':"{{csrf_token()}}"},
					success:function(data){
					//alert(data);
					//exit();
					//$('#Done').modal('show');
					toastr.success('Data Updated successfully');
					setTimeout(function() { 
					
					location.reload();
					}, 2000);
					
					
					//$('#child_id').html(data);
					}
					});

					});

					});
					</script>
					
					<div class="modal fade" id="Done">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      
            <div class="row">
			
			  
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Form Submitted Successfully</label>
                  </div>
              </div>
			  
			  
			  
            </div>
           </section>
			 
			 
          </div>
		  
		   <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
					
					
					
				
					
					
				
				
				

  @endsection