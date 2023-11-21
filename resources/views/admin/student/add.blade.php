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
              Add Student
            </h3>
			<div class="card-tools" style="margin-right:9px;">
			<button id="saveButton" type="button" class="btn  bg-gradient-primary btn-position">Save </button>	
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
                    <label for="Student">Student Name *</label>
                    <input type="text" maxLength="50" class="form-control" id="Student_Name" placeholder="Student Name">
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="School">School Name *</label>
					  <select name="demo" id="School_Name" class="form-control select2">
						  <option value=""  >Select</option>
						 @foreach($school as $key => $orderDetails) 
                          <option value="{{$orderDetails->id}}" >{{$orderDetails->school_name}}</option>
						  @endforeach 
					  </select> 
		        </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="Gender">Gender</label>
					  <select name="demo" id="Gender" class="form-control select2">
                          <option value=""  >Select</option>
                          <option value="Male"  >Male</option>
                          <option value="Female">Female</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" maxLength="50" id="Address" class="form-control" id="exampleInputEmail1" placeholder="Address">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" maxLength="50" id="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Emergency">Emergency Contact No</label>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="10" id="Emergency" class="form-control" placeholder="989855666">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Date">D.O.B</label>
                    <input type="date" id="Birth" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
              </div>
			  
			   
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="Father">Father Name</label>
                    <input type="text" maxLength="50" id="Father_Name" class="form-control" id="exampleInputEmail1" placeholder="Father Name">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Mother">Mother Name</label>
                    <input type="text" maxLength="50" id="Mother_Name" class="form-control" id="exampleInputEmail1" placeholder="Mother Name">
                  </div>
              </div>
			  
			 
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Class">Class</label>
					  <select name="demo" id="Class" class="form-control select2">
                          <option value=""  >Select</option>
                           @foreach($StudentClass as $key => $orderDetails) 
                          <option value="{{$orderDetails->id}}" >{{$orderDetails->std_class}}</option>
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
                          <option value="{{$orderDetails->id}}" >{{$orderDetails->section}}</option>
						  @endforeach
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="Siblings">Siblings</label>
                    <input type="number" maxLength="2" id="Siblings" class="form-control"  placeholder="2">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" maxlength = "100" class="form-control" id="studentCity" placeholder="City" required>
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" name="state" maxlength = "100" class="form-control" id="studentState" placeholder="State" required>
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
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Height" placeholder="Height in cm">
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
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Weight" placeholder="Weight in kg">
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
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="BMI" placeholder="BMI in kg/m2">
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
                          <option value="3"  >Select </option>
                          <option value="3"  >Celcius</option>
                          <option value="1">Farenheit</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="3" class="form-control" id="Body_Temperature_value" placeholder="Temperature">
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
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Blood_Pressure_Systolic" placeholder="Systolic">
                  </div>
              </div>
			  
			   <div class="col-md-3">
                <div class="form-group">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Blood_Pressure_Diastolic" placeholder="Diastolic">
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
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1'); this.value = this.value.slice(0, this.maxLength); "  maxLength="4" class="form-control" id="Pulse_Rate" placeholder="Eg. 85">
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
                    <input type="text" class="form-control" id="Oxygen_Saturation" placeholder="Eg. 95%">
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
			<input type="radio" name="Posture" value="Good" id="GoodPosture">
			<label class="form-check-label" for="GoodPosture">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Posture" value="Bad" id="BadPosture">
			<label class="form-check-label" for="BadPosture">
			Bad
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Posture" value="Worst" id="WorstPosture">
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
			<label for="exampleInputEmail1">Upper Limb ROM</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="UpperLimb" value="Normal" id="UpperNormal">
			<label class="form-check-label" for="UpperNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="UpperLimb" value="Restricted"  id="UpperRestricted">
			<label class="form-check-label" for="UpperRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="UpperLimb" value="Hypermoves" id="UpperHypermoves">
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
			<label for="exampleInputEmail1">Neck ROM</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="NeckLimb" value="Normal" id="NeckNormal">
			<label class="form-check-label" for="NeckNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeckLimb" value="Restricted" id="NeckRestricted">
			<label class="form-check-label" for="NeckRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeckLimb" value="Hypermoves" id="NeckHypermoves">
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
			<label for="exampleInputEmail1">Lower Limb ROM</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Both" value="Normal" id="BothNormal">
			<label class="form-check-label" for="BothNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Both" value="Restricted" id="BothRestricted">
			<label class="form-check-label" for="BothRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Both" value="Hypermoves" id="BothHypermoves">
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
			<input type="radio" name="Dystrophy" value="Yes" id="DystrophyYes">
			<label class="form-check-label" for="DystrophyYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Dystrophy" value="No" id="DystrophyNo">
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
			<label for="exampleInputEmail1">Atrophy</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Astrophy" value="Yes" id="radioDanger1">
			<label class="form-check-label" for="radioDanger1">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Astrophy" value="No" id="radioDanger2">
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
			<input type="radio" name="Endurance" value="Good" id="EnduranceGood">
			<label class="form-check-label" for="EnduranceGood">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Endurance" value="Normal" id="EnduranceNormal">
			<label class="form-check-label" for="EnduranceNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Endurance" value="Weak" id="EnduranceWeak">
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
			<input type="radio" name="Stamina" value="Good" id="StaminaGood">
			<label class="form-check-label" for="StaminaGood">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Stamina" value="Normal" id="StaminaNormal">
			<label class="form-check-label" for="StaminaNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Stamina" value="Weak" id="StaminaWeak">
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
			<input type="radio" name="Pain" value="Muscular" id="PainMuscular">
			<label class="form-check-label" for="PainMuscular">
			Muscular
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Pain" value="Normal" id="PainNormal">
			<label class="form-check-label" for="PainNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Pain" value="Weak" id="PainWeak">
			<label class="form-check-label" for="PainWeak">
			Weak
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Pain" value="No_Pain" id="NoPain">
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
                    <input type="text" class="form-control" id="Pain_Position" placeholder="Pain Position">
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
			<input type="radio" name="Spasm" value="Mild" id="SpasmMild">
			<label class="form-check-label" for="SpasmMild">
			Mild
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Spasm" value="Heavy" id="SpasmHeavy">
			<label class="form-check-label" for="SpasmHeavy">
			Heavy
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Spasm" value="No_Spasm" id="NoSpasm">
			<label class="form-check-label" for="NoSpasm">
			No Spasm
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Spasm" value="No_Pain" id="SpasmNoPain">
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
                    <input type="text" class="form-control" id="Spasm_Position" placeholder="Spasm Position">
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
                    <input type="text" class="form-control" id="Physical_advice" placeholder="Advice">
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
                    <input type="text" class="form-control"  id="Physical_remark" placeholder="Remark">
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
                    <input type="text" class="form-control" id="LeftVision" placeholder="Left Vision">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="RightVision" placeholder="Right Vision">
                  </div>
              </div>
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Refraction</label>

			</div>
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="LeftRefraction" placeholder="Left Refraction">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="RightRefraction" placeholder="Right Refraction">
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
			<input type="radio" name="LeftColorVision" value="Good" id="GoodVisionLeft">
			<label class="form-check-label" for="GoodVisionLeft">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftColorVision" value="Bad" id="BadVisionLeft">
			<label class="form-check-label" for="BadVisionLeft">
			Bad
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightColorVision" value="Good" id="GoodVisionRight">
			<label class="form-check-label" for="GoodVisionRight">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightColorVision" value="Bad" id="BadVisionRight">
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
			<input type="radio" name="LeftDisease" value="Yes" id="YesDiseaseLeft">
			<label class="form-check-label" for="YesDiseaseLeft">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftDisease" value="No" id="NoDiseaseLeft">
			<label class="form-check-label" for="NoDiseaseLeft">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightDisease" value="Yes" id="RightDiseaseYes">
			<label class="form-check-label" for="RightDiseaseYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightDisease" value="No" id="RightDiseaseNo">
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
			<input type="radio" name="LeftSquint" value="Yes" id="LeftSquintYes">
			<label class="form-check-label" for="LeftSquintYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftSquint" value="No" id="LeftSquintNo">
			<label class="form-check-label" for="LeftSquintNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightSquint" value="Yes" id="RightSquintYes">
			<label class="form-check-label" for="RightSquintYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightSquint" value="No" id="RightSquintNo">
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
			<input type="radio" name="LeftPtosis" value="Yes" id="LeftPtosisYes">
			<label class="form-check-label" for="LeftPtosisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftPtosis" value="No" id="LeftPtosisNo">
			<label class="form-check-label" for="LeftPtosisNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightPtosis" value="Yes" id="RightPtosisYes">
			<label class="form-check-label" for="RightPtosisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightPtosis" value="No" id="RightPtosisNo">
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
			<input type="radio" name="LeftNystugmus" value="Yes" id="LeftNystugmusYes">
			<label class="form-check-label" for="LeftNystugmusYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftNystugmus" value="No" id="LeftNystugmusNo">
			<label class="form-check-label" for="LeftNystugmusNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightNystugmus" value="Yes" id="RightNystugmusYes">
			<label class="form-check-label" for="RightNystugmusYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightNystugmus" value="No" id="RightNystugmusNo">
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
			<input type="radio" name="LeftCataract" value="Yes" id="LeftCataractYes">
			<label class="form-check-label" for="LeftCataractYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftCataract" value="No" id="LeftCataractNo">
			<label class="form-check-label" for="LeftCataractNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightCataract" value="Yes" id="RightCataractYes">
			<label class="form-check-label" for="RightCataractYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightCataract" value="No" id="RightCataractNo">
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
			<input type="radio" name="LeftEyeBall" value="Yes" id="LeftEyeBallYes">
			<label class="form-check-label" for="LeftEyeBallYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftEyeBall" value="No" id="LeftEyeBallNo">
			<label class="form-check-label" for="LeftEyeBallNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightEyeBall" value="Yes" id="RightEyeBallYes">
			<label class="form-check-label" for="RightEyeBallYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightEyeBall" value="No" id="RightEyeBallNo">
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
			<input type="radio" name="LeftItching" value="Yes" id="LeftItchingYes">
			<label class="form-check-label" for="LeftItchingYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftItching" value="No" id="LeftItchingNo">
			<label class="form-check-label" for="LeftItchingNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightItching" value="Yes" id="RightItchingYes">
			<label class="form-check-label" for="RightItchingYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightItching" value="No" id="RightItchingNo">
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
			<input type="radio" name="LeftDryness" value="Yes" id="LeftDrynessYes">
			<label class="form-check-label" for="LeftDrynessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftDryness" value="No" id="LeftDrynessNo">
			<label class="form-check-label" for="LeftDrynessNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightDryness" value="Yes" id="RightDrynessYes">
			<label class="form-check-label" for="RightDrynessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightDryness" value="No" id="RightDrynessNo">
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
			<input type="radio" name="LeftTears" value="Yes" id="LeftTearsYes">
			<label class="form-check-label" for="LeftTearsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftTears" value="No" id="LeftTearsNo">
			<label class="form-check-label" for="LeftTearsNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightTears" value="Yes" id="RightTearsYes">
			<label class="form-check-label" for="RightTearsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightTears" value="No" id="RightTearsNo">
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
			<input type="radio" name="LeftRedEyes" value="Yes" id="LeftRedEyesYes">
			<label class="form-check-label" for="LeftRedEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftRedEyes" value="No" id="LeftRedEyesNo">
			<label class="form-check-label" for="LeftRedEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightRedEyes" value="Yes" id="RightRedEyesYes">
			<label class="form-check-label" for="RightRedEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightRedEyes" value="No" id="RightRedEyesNo">
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
			<input type="radio" name="LeftYellowishEyes" value="Yes" id="LeftYellowishEyesYes">
			<label class="form-check-label" for="LeftYellowishEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftYellowishEyes" value="No" id="LeftYellowishEyesNo">
			<label class="form-check-label" for="LeftYellowishEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightYellowishEyes" value="Yes" id="RightYellowishEyesYes">
			<label class="form-check-label" for="RightYellowishEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightYellowishEyes" value="No" id="RightYellowishEyesNo">
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
                    <input type="text" class="form-control" id="Left_Eye_Advice" placeholder="Advice">
                  </div>
            </div>
			  
			 <!-- <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Right_Eye_Advice" placeholder="Right Advice">
                  </div>
              </div> -->
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Remark</label>

			</div>
			
			<div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control"  id="Left_Eye_Remark" placeholder="Remark">
                  </div>
            </div>
			  
			 <!-- <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="Right_Eye_Remark" placeholder="Right Remark">
                  </div>
              </div>-->
			
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
			<input type="radio" name="Caries" value="Initial" id="InitialCaries">
			<label class="form-check-label" for="InitialCaries">
			Initial
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Caries" value="Moderate" id="ModerateCaries">
			<label class="form-check-label" for="ModerateCaries">
			Moderate
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Caries" value="Average" id="AverageCaries">
			<label class="form-check-label" for="AverageCaries">
			Average
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Caries" value="No Caries" id="NoCariesCaries">
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
                    <input type="text" class="form-control" id="Periodontal_text" placeholder="Periodontal">
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
			<input type="radio" name="Orthodontic" value="Advised" id="Advised">
			<label class="form-check-label" for="Advised">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Orthodontic" value="Not Advised" id="NotAdvised">
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
			<input type="radio" name="Extraction" value="Advised" id="AdvisedExtraction">
			<label class="form-check-label" for="AdvisedExtraction">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Extraction" value="Not Advised" id="NotAdvisedExtraction">
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
			<input type="radio" name="SpaceMaintainer" value="Advised" id="AdvisedSpaceMaintainer">
			<label class="form-check-label" for="AdvisedSpaceMaintainer">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SpaceMaintainer" value="Not Advised" id="NotAdvisedSpaceMaintainer">
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
			<input type="radio" name="OralHygieneStatus" value="Good" id="GoodOralHygieneStatus">
			<label class="form-check-label" for="GoodOralHygieneStatus">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="OralHygieneStatus" value="Bad" id="BadOralHygieneStatus">
			<label class="form-check-label" for="BadOralHygieneStatus">
			Bad
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="OralHygieneStatus" value="Average" id="AverageOralHygieneStatus">
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
			<input type="radio" name="SugarIntake" value="Yes" id="SugarIntakeYes">
			<label class="form-check-label" for="SugarIntakeYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SugarIntake" value="No" id="SugarIntakeNo">
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
			<input type="radio" name="Brushed" value="Once Daily" id="OnceBrushed">
			<label class="form-check-label" for="OnceBrushed">
			Once Daily
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Brushed" value="Twice Daily" id="TwiceBrushed">
			<label class="form-check-label" for="TwiceBrushed">
			Twice Daily
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Brushed" value="Not Brushed" id="NotBrushed">
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
			<input type="radio" name="Malpositioned" value="Yes" id="MalpositionedYes">
			<label class="form-check-label" for="MalpositionedYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Malpositioned" value="No" id="MalpositionedNo">
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
                    <input type="text" class="form-control"  id="Malpositioned_Specify_text" placeholder="Specify">
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
                    <input type="text" class="form-control" id="Dental_Advice" placeholder="Advice">
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
                    <input type="text" class="form-control" id="Dental_Remark" placeholder="Remark">
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
                    <input type="text" class="form-control" id="Speech_Milestone" placeholder="Speech Milestone">
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
			<input type="radio" name="Comprehension" value="Verbal" id="VerbalComprehension">
			<label class="form-check-label" for="VerbalComprehension">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" value="Non Verbal" id="NonVerbalComprehension">
			<label class="form-check-label" for="NonVerbalComprehension">
			Non Verbal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" value="Gesture" id="GestureComprehension">
			<label class="form-check-label" for="GestureComprehension">
			Gesture
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" value="Language Age" id="LanguageComprehension">
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
			<input type="radio" name="Expression" value="Verbal" id="VerbalExpression">
			<label class="form-check-label" for="VerbalExpression">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" value="Non Verbal" id="NonVerbalExpression">
			<label class="form-check-label" for="NonVerbalExpression">
			Non Verbal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" value="Gesture" id="GestureExpression">
			<label class="form-check-label" for="GestureExpression">
			Gesture
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" value="Language Age" id="LanguageExpression">
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
			<input type="radio" name="Communication" value="Verbal" id="VerbalCommunication">
			<label class="form-check-label" for="VerbalCommunication">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Communication" value="Non Verbal" id="NonVerbalCommunication">
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
			<input type="radio" name="Auditory" value="Proper" id="ProperAuditory">
			<label class="form-check-label" for="ProperAuditory">
			Proper 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Auditory" value="Improper" id="ImproperAuditory">
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
			<input type="radio" name="HearingLoss" value="Yes" id="HearingYes">
			<label class="form-check-label" for="HearingYes">
			Yes 
			</label>
			</div>
			 
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="HearingLoss" value="No" id="HearingNo">
			<label class="form-check-label" for="HearingNo">
			No 
			</label>
			</div>
			
			
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="HearingLoss" value="Static" id="HearingStatic">
			<label class="form-check-label" for="HearingStatic">
			Static 
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="HearingLoss" value="Progressive" id="HearingProgressive">
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
			<input type="radio" name="Tinnitus" value="Yes" id="YesTinnitus">
			<label class="form-check-label" for="YesTinnitus">
			Yes 
			</label>
			</div>
			 
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Tinnitus" value="No" id="NoTinnitus">
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
			<input type="radio" name="Ear" value="Yes" id="YesEar">
			<label class="form-check-label" for="YesEar">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ear" value="No" id="NoEar">
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
			<input type="radio" name="WhichEar" value="Right" id="WhichEarRight">
			<label class="form-check-label" for="WhichEarRight">
			Right 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WhichEar" value="Left" id="WhichEarLeft">
			<label class="form-check-label" for="WhichEarLeft">
			Left
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WhichEar" value="Both" id="WhichEarBoth">
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
			<input type="radio" name="Call" value="Yes" id="YesCall">
			<label class="form-check-label" for="YesCall">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Call" value="No" id="NoCall">
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
			<input type="radio" name="Hearing" value="PTA" id="PTAHearing">
			<label class="form-check-label" for="PTAHearing">
			PTA 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" value="BOA" id="BOAHearing">
			<label class="form-check-label" for="BOAHearing">
			BOA
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" value="VRA" id="VRAHearing">
			<label class="form-check-label" for="VRAHearing">
			VRA
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" value="AVR" id="AVRHearing">
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
			<input type="radio" name="Bilateral" value="Yes" id="YesBilateral">
			<label class="form-check-label" for="YesBilateral">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bilateral" value="No" id="NoBilateral">
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
			<input type="radio" name="MedicalHistory" value="Yes" id="YesMedicalHistory">
			<label class="form-check-label" for="YesMedicalHistory">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MedicalHistory" value="No" id="NoMedicalHistory">
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
                    <input type="text" class="form-control" id="Speech_Advice" placeholder="Advice">
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
                    <input type="text" class="form-control" id="Speech_Remark" placeholder="Remark">
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
			<input type="radio" name="PaleSkin" value="Yes" id="PaleSkinYes">
			<label class="form-check-label" for="PaleSkinYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PaleSkin" value="No" id="PaleSkinNo">
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
			<input type="radio" name="Heartbeats" value="Yes" id="HeartbeatsYes">
			<label class="form-check-label" for="HeartbeatsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Heartbeats" value="No" id="HeartbeatsNo">
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
			<input type="radio" name="Shortness" value="Yes" id="ShortnessYes">
			<label class="form-check-label" for="ShortnessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Shortness" value="No" id="ShortnessNo">
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
			<input type="radio" name="Dizziness" value="Yes" id="DizzinessYes">
			<label class="form-check-label" for="DizzinessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Dizziness" value="No" id="DizzinessNo">
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
			<input type="radio" name="ColdHands" value="Yes" id="ColdHandsYes">
			<label class="form-check-label" for="ColdHandsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ColdHands" value="No" id="ColdHandsNo">
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
			<input type="radio" name="Anemia" value="Symptomatic" id="AnemiaSymptomaticYes">
			<label class="form-check-label" for="AnemiaSymptomaticYes">
			Symptomatic
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Anemia" value="No" id="AnemiaNo">
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
			<input type="radio" name="Fatigue" value="Yes" id="FatigueYes">
			<label class="form-check-label" for="FatigueYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Fatigue" value="No" id="FatigueNo">
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
			<input type="radio" name="Deficiency" value="Symptomatic" id="DeficiencySymptomatic">
			<label class="form-check-label" for="DeficiencySymptomatic">
			Symptomatic
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deficiency" value="No" id="DeficiencyNo">
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
			<input type="radio" name="Obesity" value="Yes" id="ObesityYes">
			<label class="form-check-label" for="ObesityYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Obesity" value="No" id="ObesityNo">
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
                    <input type="text" class="form-control" id="Ideal_Body_Weight" placeholder="Ideal Body Weight">
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
                    <input type="text" class="form-control" id="Ideal_Calories" placeholder="KCAL/DAY">
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
			<input type="radio" name="MicroNutrient" value="GM Fats" id="MicroNutrientFats">
			<label class="form-check-label" for="MicroNutrientFats">
			GM Fats
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MicroNutrient" value="GM Protien" id="MicroNutrientProtien">
			<label class="form-check-label" for="MicroNutrientProtien">
			GM Protien
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MicroNutrient" value="GM Carbohydrates" id="MicroNutrientCarbohydrates">
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
			<input type="radio" name="FluidEstimation" value="ML/Day" id="MLFluidEstimation">
			<label class="form-check-label" for="MLFluidEstimation">
			ML/Day
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="FluidEstimation" value="Glasses" id="GLASSESFluidEstimation">
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
                    <input type="text" class="form-control" id="Fluid_Estimation" placeholder="ML">
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
                    <input type="text" class="form-control" id="Nutrition_Advice" placeholder="Advice">
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
                    <input type="text" class="form-control"  id="Nutrition_Remark" placeholder="Remark">
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
			<input type="radio" name="Chest" value="Clear" id="ChestClear">
			<label class="form-check-label" for="ChestClear">
			Clear
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Chest" value="Not Clear" id="ChestNotClear">
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
			<input type="radio" name="Abdomen" value="Tender" id="AbdomenTender">
			<label class="form-check-label" for="AbdomenTender">
			Tender
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" value="Soft" id="AbdomenSoft">
			<label class="form-check-label" for="AbdomenSoft">
			Soft
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" value="Distended" id="AbdomenDistended">
			<label class="form-check-label" for="AbdomenDistended">
			Distended
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" value="Normal" id="AbdomenNormal">
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
                    <input type="text" class="form-control" id="Active_Infectious_Disease" placeholder="Disease">
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
			<input type="radio" name="Cleft" value="Yes" id="CleftYes">
			<label class="form-check-label" for="CleftYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Cleft" value="No" id="CleftNo">
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
			<input type="radio" name="Club" value="Yes" id="ClubYes">
			<label class="form-check-label" for="ClubYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Club" value="No" id="ClubNo">
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
			<input type="radio" name="Congenital" value="Yes" id="CongenitalYes">
			<label class="form-check-label" for="CongenitalYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Congenital" value="No" id="CongenitalNo">
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
			<input type="radio" name="Deafness" value="Yes" id="DeafnessYes">
			<label class="form-check-label" for="DeafnessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deafness" value="No" id="DeafnessNo">
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
			<input type="radio" name="SkinCondition" value="Yes" id="YesSkinCondition">
			<label class="form-check-label" for="YesSkinCondition">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SkinCondition" value="No" id="NoSkinCondition">
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
			<input type="radio" name="Otitis" value="Yes" id="OtitisYes">
			<label class="form-check-label" for="OtitisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Otitis" value="No" id="OtitisNo">
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
			<input type="radio" name="NeuroMotor" value="Yes" id="YesNeuroMotor">
			<label class="form-check-label" for="YesNeuroMotor">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeuroMotor" value="No" id="NoNeuroMotor">
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
			<input type="radio" name="BodyType"  value="Thin" id="BodyTypeThin">
			<label class="form-check-label" for="BodyTypeThin">
			Thin
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="BodyType" value="Average" id="BodyTypeAverage">
			<label class="form-check-label" for="BodyTypeAverage">
			Average
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="BodyType" value="Faty" id="FatyBodyType">
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
                    <input type="text" class="form-control" id="General_Advice" placeholder="Advice">
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
                    <input type="text" class="form-control" id="General_Remark" placeholder="Remark">
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
			<input type="radio" name="Annoyed" value="Yes" id="YesAnnoyed">
			<label class="form-check-label" for="YesAnnoyed">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Annoyed" value="No" id="NoAnnoyed">
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
			<input type="radio" name="Angry" value="Yes" id="YesAngry">
			<label class="form-check-label" for="YesAngry">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Angry" value="No" id="NoAngry">
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
			<input type="radio" name="Blame" value="Yes" id="YesBlame">
			<label class="form-check-label" for="YesBlame">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Blame" value="No" id="NoBlame">
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
			<input type="radio" name="Authorities" value="Yes" id="YesAuthorities">
			<label class="form-check-label" for="YesAuthorities">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Authorities" value="No" id="NoAuthorities">
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
			<input type="radio" name="Tantrums" value="Yes" id="YesTantrums">
			<label class="form-check-label" for="YesTantrums">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Tantrums" value="No" id="NoTantrums">
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
			<input type="radio" name="Frustations" value="Yes" id="YesFrustations">
			<label class="form-check-label" for="YesFrustations">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Frustations" value="No" id="NoFrustations">
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
			<input type="radio" name="Behaviour" value="Yes" id="YesBehaviour">
			<label class="form-check-label" for="YesBehaviour">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Behaviour" value="No" id="NoBehaviour">
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
			<input type="radio" name="Spelling" value="Yes" id="YesSpelling">
			<label class="form-check-label" for="YesSpelling">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Behaviour" value="No" id="NoSpelling">
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
			<input type="radio" name="Paraphrasing" value="Yes" id="YesParaphrasing">
			<label class="form-check-label" for="YesParaphrasing">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Paraphrasing" value="No" id="NoParaphrasing">
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
			<input type="radio" name="PoorMemory" value="Yes" id="YesPoorMemory">
			<label class="form-check-label" for="YesPoorMemory">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PoorMemory" value="No" id="NoPoorMemory">
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
			<input type="radio" name="Surroundings" value="Friendly" id="FriendlySurroundings">
			<label class="form-check-label" for="FriendlySurroundings">
			Friendly
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Surroundings" value="Not Friendly" id="NotSurroundings">
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
			<input type="radio" name="Quite" value="Yes" id="QuiteYes">
			<label class="form-check-label" for="QuiteYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Quite"  value="No" id="QuiteNo">
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
			<input type="radio" name="Fidgetting" value="Yes" id="YesFidgetting">
			<label class="form-check-label" for="YesFidgetting">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Fidgetting" value="No" id="NoFidgetting">
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
			<input type="radio" name="ConcentrateOnTask" value="Yes" id="YesConcentrateOnTask">
			<label class="form-check-label" for="YesConcentrateOnTask">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ConcentrateOnTask" value="No" id="NoConcentrateOnTask">
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
			<input type="radio" name="PhysicalMovements" value="Yes" id="YesPhysicalMovements">
			<label class="form-check-label" for="YesPhysicalMovements">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PhysicalMovements" value="No" id="NoPhysicalMovements">
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
			<input type="radio" name="ExcessiveTalking" value="Yes" id="YesExcessiveTalking">
			<label class="form-check-label" for="YesExcessiveTalking">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ExcessiveTalking" value="No" id="NoExcessiveTalking">
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
			<input type="radio" name="Wait" value="Yes" id="YesWait">
			<label class="form-check-label" for="YesWait">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Wait" value="No" id="NoWait">
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
			<input type="radio" name="Acting" value="Yes" id="YesActing">
			<label class="form-check-label" for="YesActing">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Acting" value="No" id="NoActing">
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
			<input type="radio" name="Interruption" value="Yes" id="YesInterruption">
			<label class="form-check-label" for="YesInterruption">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Interruption" value="No" id="NoInterruption">
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
			<input type="radio" name="Deficite" value="Yes" id="YesDeficite">
			<label class="form-check-label" for="YesDeficite">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deficite" value="No" id="NoDeficite">
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
			<input type="radio" name="SelfEsteem" value="Yes" id="YesSelfEsteem">
			<label class="form-check-label" for="YesSelfEsteem">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SelfEsteem" value="No" id="NoSelfEsteem">
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
			<input type="radio" name="IrritableActions" value="Yes" id="YesIrritableActions">
			<label class="form-check-label" for="YesIrritableActions">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="IrritableActions" value="No" id="NoIrritableActions">
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
			<input type="radio" name="SuddenAnger" value="Yes" id="YesSuddenAnger">
			<label class="form-check-label" for="YesSuddenAnger">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SuddenAnger" value="No" id="NoSuddenAnger">
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
			<input type="radio" name="FrequentAbsence" value="Yes" id="YesFrequentAbsence">
			<label class="form-check-label" for="YesFrequentAbsence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="FrequentAbsence" value="No" id="NoFrequentAbsence">
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
			<input type="radio" name="Suicide" value="Yes" id="YesSuicide">
			<label class="form-check-label" for="YesSuicide">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Suicide" value="No" id="NoSuicide">
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
			<input type="radio" name="RecklessBehaviour" value="Yes" id="YesRecklessBehaviour">
			<label class="form-check-label" for="YesRecklessBehaviour">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RecklessBehaviour" value="No" id="NoRecklessBehaviour">
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
			<input type="radio" name="CryingFrequently" value="Yes" id="YesCryingFrequently">
			<label class="form-check-label" for="YesCryingFrequently">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="CryingFrequently" value="No" id="NoCryingFrequently">
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
			<input type="radio" name="Depression" value="Yes" id="YesDepression">
			<label class="form-check-label" for="YesDepression">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Depression" value="No" id="NoDepression">
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
			<input type="radio" name="Edge" value="Yes" id="YesEdge">
			<label class="form-check-label" for="YesEdge">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Edge" value="No" id="NoEdge">
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
			<input type="radio" name="SocialChanges" value="Yes" id="YesSocialChanges">
			<label class="form-check-label" for="YesSocialChanges">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SocialChanges" value="No" id="NoSocialChanges">
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
			<input type="radio" name="PhysicalChanges" value="Yes" id="YesPhysicalChanges">
			<label class="form-check-label" for="YesPhysicalChanges">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PhysicalChanges" value="No" id="NoPhysicalChanges">
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
			<input type="radio" name="SleepDisturbance" value="Yes" id="YesSleepDisturbance">
			<label class="form-check-label" for="YesSleepDisturbance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SleepDisturbance" value="No" id="NoSleepDisturbance">
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
			<input type="radio" name="PoorSchool" value="Yes" id="YesPoorSchool">
			<label class="form-check-label" for="YesPoorSchool">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PoorSchool" value="No" id="NoPoorSchool">
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
			<input type="radio" name="PanicAttack" value="Yes" id="YesPanicAttack">
			<label class="form-check-label" for="YesPanicAttack">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PanicAttack" value="No" id="NoPanicAttack">
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
			<input type="radio" name="Anxiety" value="Yes" id="YesAnxiety">
			<label class="form-check-label" for="YesAnxiety">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Anxiety" value="No" id="NoAnxiety">
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
			<input type="radio" name="Performance" value="Yes" id="YesPerformance">
			<label class="form-check-label" for="YesPerformance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Performance" value="No" id="NoPerformance">
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
			<input type="radio" name="AboutAppearence" value="Yes" id="YesAboutAppearence">
			<label class="form-check-label" for="YesAboutAppearence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="AboutAppearence" value="No" id="NoAboutAppearence">
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
			<input type="radio" name="ComparesSelf" value="Yes" id="YesComparesSelf">
			<label class="form-check-label" for="YesComparesSelf">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ComparesSelf" value="No" id="NoComparesSelf">
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
			<input type="radio" name="Ugly" value="Yes" id="YesUgly">
			<label class="form-check-label" for="YesUgly">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ugly" value="No" id="NoUgly">
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
                    <input type="text" class="form-control" id="Specify_ugly" placeholder="Specify">
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
			<input type="radio" name="PerfectImage" value="Yes" id="YesPerfectImage">
			<label class="form-check-label" for="YesPerfectImage">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PerfectImage" value="No" id="NoPerfectImage">
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
			<input type="radio" name="Incessant" value="Yes" id="YesIncessant">
			<label class="form-check-label" for="YesIncessant">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Incessant" value="No" id="NoIncessant">
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
			<input type="radio" name="Emotions" value="Yes" id="YesEmotions">
			<label class="form-check-label" for="YesEmotions">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Emotions" value="No" id="NoEmotions">
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
			<input type="radio" name="Intolerence" value="Yes" id="YesIntolerence">
			<label class="form-check-label" for="YesIntolerence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Intolerence" value="No" id="NoIntolerence">
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
                    <input type="text" class="form-control" id="Specify_tolerance" placeholder="Specify">
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
			<input type="radio" name="TimeAlone" value="Yes" id="YesTimeAlone">
			<label class="form-check-label" for="YesTimeAlone">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="TimeAlone" value="No" id="NoTimeAlone">
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
			<input type="radio" name="PullsBack" value="Yes" id="YesPullsBack">
			<label class="form-check-label" for="YesPullsBack">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PullsBack" value="No" id="NoPullsBack">
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
			<input type="radio" name="Modelling" value="Yes" id="YesModelling">
			<label class="form-check-label" for="YesModelling">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Modelling" value="No" id="NoModelling">
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
                    <input type="text" class="form-control" id="Specify_obessed" placeholder="Specify">
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
			<input type="radio" name="Ask" value="Yes" id="YesAsk">
			<label class="form-check-label" for="YesAsk">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ask" value="No" id="NoAsk">
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
			<input type="radio" name="WeightGain" value="Yes" id="YesWeightGain">
			<label class="form-check-label" for="YesWeightGain">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WeightGain" value="No" id="NoWeightGain">
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
			<input type="radio" name="Abdominal" value="Yes" id="YesAbdominal">
			<label class="form-check-label" for="YesAbdominal">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdominal" value="No" id="NoAbdominal">
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
			<input type="radio" name="Bloated" value="Yes" id="YesBloated">
			<label class="form-check-label" for="YesBloated">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bloated" value="No" id="NoBloated">
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
			<input type="radio" name="Circles" value="Yes" id="YesCircles">
			<label class="form-check-label" for="YesCircles">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Circles" value="No" id="NoCircles">
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
			<input type="radio" name="Bathroom" value="Yes" id="YesBathroom">
			<label class="form-check-label" for="YesBathroom">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bathroom" value="No" id="NoBathroom">
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
			<input type="radio" name="Phobia" value="Yes" id="YesPhobia">
			<label class="form-check-label" for="YesPhobia">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Phobia" value="No" id="NoPhobia">
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
			<input type="radio" name="MobileAddiction" value="Yes" id="YesMobileAddiction">
			<label class="form-check-label" for="YesMobileAddiction">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MobileAddiction" value="No" id="NoMobileAddiction">
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
			<input type="radio" name="MemoryLoss" value="Yes" id="YesMemoryLoss">
			<label class="form-check-label" for="YesMemoryLoss">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MemoryLoss" value="No" id="NoMemoryLoss">
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
			<input type="radio" name="Substance" value="Yes" id="YesSubstance">
			<label class="form-check-label" for="YesSubstance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Substance" value="No" id="NoSubstance">
			<label class="form-check-label" for="NoSubstance">
			No
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Substance" value="Not applicable" id="NotSubstance">
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
			<input type="radio" name="MeasurationCycle" value="Yes" id="YesMeasurationCycle">
			<label class="form-check-label" for="YesMeasurationCycle">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MeasurationCycle" value="No" id="NoMeasurationCycle">
			<label class="form-check-label" for="NoMeasurationCycle">
			No
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MeasurationCycle" value="Not applicable" id="NotMeasurationCycle">
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
			<input type="radio" name="IrregularPeriod" value="Yes" id="YesIrregularPeriod">
			<label class="form-check-label" for="YesIrregularPeriod">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="IrregularPeriod" value="No" id="NoIrregularPeriod">
			<label class="form-check-label" for="NoIrregularPeriod">
			No
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="IrregularPeriod" value="Not applicable" id="NotIrregularPeriod">
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
			<input type="radio" name="PainDuring" value="Yes" id="YesPainDuring">
			<label class="form-check-label" for="YesPainDuring">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PainDuring" value="No" id="NoPainDuring">
			<label class="form-check-label" for="NoPainDuring">
			No
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PainDuring" value="Not applicable" id="NotPainDuring">
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
			<input type="radio" name="Urination" value="Yes" id="YesUrination">
			<label class="form-check-label" for="YesUrination">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Urination" value="No" id="NoUrination">
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
                    <input type="text" class="form-control" id="psycology_Advice" placeholder="Advice">
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
                    <input type="text" class="form-control" id="psycology_Remark" placeholder="Remark">
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
                    <input type="number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "4" placeholder="Enter OTP">
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
				<input type="text" class="form-control" name="description" placeholder="Enter Reason ...">
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
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
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
		<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Years">
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
					var School_Name=$('#School_Name').val();
					
					if(Student_Name == ''){
					toastr.warning('Student Name Should Not be Empty');
					exit();					
					}
					
					if(School_Name == ''){
					toastr.warning('School Name Should Not be Empty');
					exit();					
					}
					
					
					var Gender=$('#Gender').val();
					var Address=$('#Address').val();
					var Email=$('#Email').val();
					var Emergency=$('#Emergency').val();
					var Father_Name=$('#Father_Name').val();
					var Birth =$('#Birth').val();
					var Mother_Name=$('#Mother_Name').val();
					
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
					url:'{{url("add-student-details")}}',
					method:'POST',
					data:{Student_Name:Student_Name,Gender:Gender,
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
					
                    PaleSkin:PaleSkin,
					Heartbeats:Heartbeats,
					Shortness:Shortness,
					Dizziness:Dizziness,
					Anemia:Anemia,
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
					toastr.success('Data Saved successfully');
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