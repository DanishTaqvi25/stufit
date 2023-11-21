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
              Saif Khan (PA768332)
            </h3>
			<div class="card-tools" style="margin-right:9px;">
			<button type="button" class="btn  bg-gradient-primary btn-position">Update</button>	
			</div> 
          </div>
          <div class="card-body">
            <h4></h4>
            <div class="row">
              <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link side-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false"  >Profile</a>
					
					<a class="nav-link side-link" id="vert-tabs-profile-tab"  data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Physical Assessment</a>
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
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Saif Khan">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  selected>Male</option>
                          <option value="1">Female</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="A-8/15, Gomti Nager, Lucknow">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="saif@gmail.com">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Emergency Contact No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" value="989855666">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">D.O.B</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" value="Email">
                  </div>
              </div>
			  
			   
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Father Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Mohd Anwar Khan">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mother Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Noor Bano">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">School Name</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Jaipuria School</option>
                          <option value="1">L.P.S</option>
                          <option value="2">Kidzee</option>
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Section</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >A</option>
                          <option value="1">B</option>
                          <option value="2">C</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Siblings</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" value="2">
                  </div>
              </div>
			  
			  
			  
            </div>
		  
		  
        </div>
       
        <!-- /.row -->
      </div>
	  
    </section>
	
	
		  </div>
		  
	  <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                
		 <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="400">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="90">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="3">
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
					  <select name="demo" class="form-control select2">
                          <option value="3" Selected >Celcius</option>
                          <option value="1">Farenheit</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="23">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="80">
                  </div>
              </div>
			  
			   <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="120">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="85">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="95%">
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
			<input type="radio" name="Posture" id="GoodPosture">
			<label class="form-check-label" for="GoodPosture">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Posture" id="BadPosture">
			<label class="form-check-label" for="BadPosture">
			Bad
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Posture" id="WorstPosture">
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
			<input type="radio" name="UpperLimb" id="UpperNormal">
			<label class="form-check-label" for="UpperNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="UpperLimb" id="UpperRestricted">
			<label class="form-check-label" for="UpperRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="UpperLimb" id="UpperHypermoves">
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
			<input type="radio" name="NeckLimb" id="NeckNormal">
			<label class="form-check-label" for="NeckNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeckLimb" id="NeckRestricted">
			<label class="form-check-label" for="NeckRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeckLimb" id="NeckHypermoves">
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
			<input type="radio" name="Both" id="BothNormal">
			<label class="form-check-label" for="BothNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Both" id="BothRestricted">
			<label class="form-check-label" for="BothRestricted">
			Restricted
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Both" id="BothHypermoves">
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
			<input type="radio" name="Dystrophy" id="DystrophyYes">
			<label class="form-check-label" for="DystrophyYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Dystrophy" id="DystrophyNo">
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
			<input type="radio" name="Astrophy" id="radioDanger1">
			<label class="form-check-label" for="radioDanger1">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Astrophy" id="radioDanger2">
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
			<input type="radio" name="Endurance" id="EnduranceGood">
			<label class="form-check-label" for="EnduranceGood">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Endurance" id="EnduranceNormal">
			<label class="form-check-label" for="EnduranceNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Endurance" id="EnduranceWeak">
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
			<input type="radio" name="Stamina" id="StaminaGood">
			<label class="form-check-label" for="StaminaGood">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Stamina" id="StaminaNormal">
			<label class="form-check-label" for="StaminaNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Stamina" id="StaminaWeak">
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
			<input type="radio" name="Pain" id="PainMuscular">
			<label class="form-check-label" for="PainMuscular">
			Muscular
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Pain" id="PainNormal">
			<label class="form-check-label" for="PainNormal">
			Normal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Pain" id="PainWeak">
			<label class="form-check-label" for="PainWeak">
			Weak
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Pain" id="NoPain">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Pain Position">
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
			<input type="radio" name="Spasm" id="SpasmMild">
			<label class="form-check-label" for="SpasmMild">
			Mild
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Spasm" id="SpasmHeavy">
			<label class="form-check-label" for="SpasmHeavy">
			Heavy
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Spasm" id="NoSpasm">
			<label class="form-check-label" for="NoSpasm">
			No Spasm
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Spasm" id="SpasmNoPain">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Spasm Position">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medical requirements may change based on the conditions">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Good Recovery">
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
			<label for="exampleInputEmail1">Left Vision</label>
			</div>
			</div>
			
			<div class="col-md-5">
			<div class="form-group">
			<label for="exampleInputEmail1">Right Vision</label>
			</div>
			</div>


			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Vision</label>

			</div>
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Normal">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Normal">
                  </div>
              </div>
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Refraction</label>

			</div>
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Normal">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Critical Damage">
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
			<input type="radio" name="LeftVision" id="GoodVisionLeft">
			<label class="form-check-label" for="GoodVisionLeft">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftVision" id="BadVisionLeft">
			<label class="form-check-label" for="BadVisionLeft">
			Bad
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightVision" id="GoodVisionRight">
			<label class="form-check-label" for="GoodVisionRight">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightVision" id="BadVisionRight">
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
			<input type="radio" name="LeftDisease" id="YesDiseaseLeft">
			<label class="form-check-label" for="YesDiseaseLeft">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftDisease" id="NoDiseaseLeft">
			<label class="form-check-label" for="NoDiseaseLeft">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightDisease" id="RightDiseaseYes">
			<label class="form-check-label" for="RightDiseaseYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightDisease" id="RightDiseaseNo">
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
			<input type="radio" name="LeftSquint" id="LeftSquintYes">
			<label class="form-check-label" for="LeftSquintYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftSquint" id="LeftSquintNo">
			<label class="form-check-label" for="LeftSquintNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightSquint" id="RightSquintYes">
			<label class="form-check-label" for="RightSquintYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightSquint" id="RightSquintNo">
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
			<input type="radio" name="LeftPtosis" id="LeftPtosisYes">
			<label class="form-check-label" for="LeftPtosisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftPtosis" id="LeftPtosisNo">
			<label class="form-check-label" for="LeftPtosisNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightPtosis" id="RightPtosisYes">
			<label class="form-check-label" for="RightPtosisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightPtosis" id="RightPtosisNo">
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
			<input type="radio" name="LeftNystugmus" id="LeftNystugmusYes">
			<label class="form-check-label" for="LeftNystugmusYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftNystugmus" id="LeftNystugmusNo">
			<label class="form-check-label" for="LeftNystugmusNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightNystugmus" id="RightNystugmusYes">
			<label class="form-check-label" for="RightNystugmusYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightNystugmus" id="RightNystugmusNo">
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
			<input type="radio" name="LeftCataract" id="LeftCataractYes">
			<label class="form-check-label" for="LeftCataractYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftCataract" id="LeftCataractNo">
			<label class="form-check-label" for="LeftCataractNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightCataract" id="RightCataractYes">
			<label class="form-check-label" for="RightCataractYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightCataract" id="RightCataractNo">
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
			<input type="radio" name="LeftEyeBall" id="LeftEyeBallYes">
			<label class="form-check-label" for="LeftEyeBallYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftEyeBall" id="LeftEyeBallNo">
			<label class="form-check-label" for="LeftEyeBallNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightEyeBall" id="RightEyeBallYes">
			<label class="form-check-label" for="RightEyeBallYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightEyeBall" id="RightEyeBallNo">
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
			<input type="radio" name="LeftItching" id="LeftItchingYes">
			<label class="form-check-label" for="LeftItchingYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftItching" id="LeftItchingNo">
			<label class="form-check-label" for="LeftItchingNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightItching" id="RightItchingYes">
			<label class="form-check-label" for="RightItchingYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightItching" id="RightItchingNo">
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
			<input type="radio" name="LeftDryness" id="LeftDrynessYes">
			<label class="form-check-label" for="LeftDrynessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftDryness" id="LeftDrynessNo">
			<label class="form-check-label" for="LeftDrynessNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightDryness" id="RightDrynessYes">
			<label class="form-check-label" for="RightDrynessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightDryness" id="RightDrynessNo">
			<label class="form-check-label" for="RightDryness
			No">
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
			<input type="radio" name="LeftTears" id="LeftTearsYes">
			<label class="form-check-label" for="LeftTearsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftTears" id="LeftTearsNo">
			<label class="form-check-label" for="LeftTearsNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightTears" id="RightTearsYes">
			<label class="form-check-label" for="RightTearsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightTears" id="RightTearsNo">
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
			<input type="radio" name="LeftRedEyes" id="LeftRedEyesYes">
			<label class="form-check-label" for="LeftRedEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftRedEyes" id="LeftRedEyesNo">
			<label class="form-check-label" for="LeftRedEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightRedEyes" id="RightRedEyesYes">
			<label class="form-check-label" for="RightRedEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightRedEyes" id="RightRedEyesNo">
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
			<input type="radio" name="LeftYellowishEyes" id="LeftYellowishEyesYes">
			<label class="form-check-label" for="LeftYellowishEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="LeftYellowishEyes" id="LeftYellowishEyesNo">
			<label class="form-check-label" for="LeftYellowishEyesNo">
			No
			</label>
			</div>
			
			</div>
			
			</div>
			
			<div class="col-sm-5">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="RightYellowishEyes" id="RightYellowishEyesYes">
			<label class="form-check-label" for="RightYellowishEyesYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RightYellowishEyes" id="RightYellowishEyesNo">
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
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Normal">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Critical Damaged">
                  </div>
              </div>
			
			</div>
			
			
			<div class="row">
			
			<div class="col-md-3">
			<label for="exampleInputEmail1">Remark</label>

			</div>
			
			<div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Normal">
                  </div>
            </div>
			  
			  <div class="col-md-1">
			  </div>
			  
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Normal">
                  </div>
              </div>
			
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
			<input type="radio" name="Caries" id="InitialCaries">
			<label class="form-check-label" for="InitialCaries">
			Initial
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Caries" id="ModerateCaries">
			<label class="form-check-label" for="ModerateCaries">
			Moderate
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Caries" id="AverageCaries">
			<label class="form-check-label" for="AverageCaries">
			Average
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Caries" id="NoCariesCaries">
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
			<label for="exampleInputEmail1">Periodontal</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Periodontal">
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
			<input type="radio" name="Orthodontic" id="Advised">
			<label class="form-check-label" for="Advised">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Orthodontic" id="NotAdvised">
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
			<input type="radio" name="Extraction" id="AdvisedExtraction">
			<label class="form-check-label" for="AdvisedExtraction">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Extraction" id="NotAdvisedExtraction">
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
			<input type="radio" name="SpaceMaintainer" id="AdvisedSpaceMaintainer">
			<label class="form-check-label" for="AdvisedSpaceMaintainer">
			Advised
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SpaceMaintainer" id="NotAdvisedSpaceMaintainer">
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
			<input type="radio" name="OralHygieneStatus" id="GoodOralHygieneStatus">
			<label class="form-check-label" for="GoodOralHygieneStatus">
			Good
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="OralHygieneStatus" id="BadOralHygieneStatus">
			<label class="form-check-label" for="BadOralHygieneStatus">
			Bad
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SpaceMaintainer" id="AverageOralHygieneStatus">
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
			<label for="exampleInputEmail1">Sugar Intake</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="SugarIntake" id="SugarIntakeYes">
			<label class="form-check-label" for="SugarIntakeYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SugarIntake" id="SugarIntakeNo">
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
			<label for="exampleInputEmail1">No Of Time Brushed</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Brushed" id="OnceBrushed">
			<label class="form-check-label" for="OnceBrushed">
			Once Daily
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Brushed" id="TwiceBrushed">
			<label class="form-check-label" for="TwiceBrushed">
			Twice Daily
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Brushed" id="NotBrushed">
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
			<label for="exampleInputEmail1">Malpositioned Tooth Teeth</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Malpositioned" id="MalpositionedYes">
			<label class="form-check-label" for="MalpositionedYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Malpositioned" id="MalpositionedNo">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Specify">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medical requirements may change based on the conditions">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Good Recovery">
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
			<label for="exampleInputEmail1">Speech Milestone</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Speak Too Much">
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
			<input type="radio" name="Comprehension" id="VerbalComprehension">
			<label class="form-check-label" for="VerbalComprehension">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" id="NonVerbalComprehension">
			<label class="form-check-label" for="NonVerbalComprehension">
			Non Verbal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" id="GestureComprehension">
			<label class="form-check-label" for="GestureComprehension">
			Gesture
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Comprehension" id="LanguageComprehension">
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
			<input type="radio" name="Expression" id="VerbalExpression">
			<label class="form-check-label" for="VerbalExpression">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" id="NonVerbalExpression">
			<label class="form-check-label" for="NonVerbalExpression">
			Non Verbal
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" id="GestureExpression">
			<label class="form-check-label" for="GestureExpression">
			Gesture
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Expression" id="LanguageExpression">
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
			<input type="radio" name="Communication" id="VerbalCommunication">
			<label class="form-check-label" for="VerbalCommunication">
			Verbal 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Communication" id="NonVerbalCommunication">
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
			<input type="radio" name="Auditory" id="ProperAuditory">
			<label class="form-check-label" for="ProperAuditory">
			Proper 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Auditory" id="ImproperAuditory">
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
			<input type="radio" name="Hearing" id="HearingYes">
			<label class="form-check-label" for="HearingYes">
			Yes 
			</label>
			</div>
			 
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" id="HearingNo">
			<label class="form-check-label" for="HearingNo">
			No 
			</label>
			</div>
			
			
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" id="HearingStatic">
			<label class="form-check-label" for="HearingStatic">
			Static 
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" id="HearingProgressive">
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
			<input type="radio" name="Tinnitus" id="YesTinnitus">
			<label class="form-check-label" for="YesTinnitus">
			Yes 
			</label>
			</div>
			 
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Tinnitus" id="NoTinnitus">
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
			<input type="radio" name="Ear" id="YesEar">
			<label class="form-check-label" for="YesEar">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ear" id="NoEar">
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
			<input type="radio" name="WhichEar" id="WhichEarRight">
			<label class="form-check-label" for="WhichEarRight">
			Right 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WhichEar" id="WhichEarLeft">
			<label class="form-check-label" for="WhichEarLeft">
			Left
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WhichEar" id="WhichEarBoth">
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
			<input type="radio" name="Call" id="YesCall">
			<label class="form-check-label" for="YesCall">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Call" id="NoCall">
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
			<input type="radio" name="Hearing" id="PTAHearing">
			<label class="form-check-label" for="PTAHearing">
			PTA 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" id="BOAHearing">
			<label class="form-check-label" for="BOAHearing">
			BOA
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" id="VRAHearing">
			<label class="form-check-label" for="VRAHearing">
			VRA
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Hearing" id="AVRHearing">
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
			<input type="radio" name="Bilateral" id="YesBilateral">
			<label class="form-check-label" for="YesBilateral">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bilateral" id="NoBilateral">
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
			<input type="radio" name="MedicalHistory" id="YesMedicalHistory">
			<label class="form-check-label" for="YesMedicalHistory">
			Yes 
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MedicalHistory" id="NoMedicalHistory">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medical requirements may change based on the conditions">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Good Recovery">
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
            <h3 class="card-title">Nutrition Assessment</h3>
			
				
			
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
			<input type="radio" name="PaleSkin" id="PaleSkinYes">
			<label class="form-check-label" for="PaleSkinYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PaleSkin" id="PaleSkinNo">
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
			<input type="radio" name="Heartbeats" id="HeartbeatsYes">
			<label class="form-check-label" for="HeartbeatsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Heartbeats" id="HeartbeatsNo">
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
			<input type="radio" name="Shortness" id="ShortnessYes">
			<label class="form-check-label" for="ShortnessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Shortness" id="ShortnessNo">
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
			<input type="radio" name="Dizziness" id="DizzinessYes">
			<label class="form-check-label" for="DizzinessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Dizziness" id="DizzinessNo">
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
			<input type="radio" name="ColdHands" id="ColdHandsYes">
			<label class="form-check-label" for="ColdHandsYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ColdHands" id="ColdHandsNo">
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
			<input type="radio" name="Anemia" id="AnemiaSymptomaticYes">
			<label class="form-check-label" for="AnemiaSymptomaticYes">
			Symptomatic
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Anemia" id="AnemiaNo">
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
			<input type="radio" name="Fatigue" id="FatigueYes">
			<label class="form-check-label" for="FatigueYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Fatigue" id="FatigueNo">
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
			<input type="radio" name="Deficiency" id="DeficiencySymptomatic">
			<label class="form-check-label" for="DeficiencySymptomatic">
			Symptomatic
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deficiency" id="DeficiencyNo">
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
			<input type="radio" name="Obesity" id="ObesityYes">
			<label class="form-check-label" for="ObesityYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Obesity" id="ObesityNo">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="76">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="200">
                  </div>
              </div>
			  
			  <div class="col-md-3">
				</div>
	

			</div>
			
			
			<div class="row rowMargin">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Micro Nutrient Distribution</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="MicroNutrient" id="MicroNutrientFats">
			<label class="form-check-label" for="MicroNutrientFats">
			GM Fats
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MicroNutrient" id="MicroNutrientProtien">
			<label class="form-check-label" for="MicroNutrientProtien">
			GM Protien
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MicroNutrient" id="MicroNutrientCarbohydrates">
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
			<input type="radio" name="FluidEstimation" id="MLFluidEstimation">
			<label class="form-check-label" for="MLFluidEstimation">
			ML/Day
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="FluidEstimation" id="GLASSESFluidEstimation">
			<label class="form-check-label" for="GLASSESFluidEstimation">
			Glasses
			</label>
			</div>
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row rowMargin" style="display:none;" id="FluidEstimationVal">
			
			<div class="col-md-3">
			<div class="form-group">
			<label for="exampleInputEmail1">Fluid Estimation</label>
			</div>
			</div>


			 <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="ML">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medical requirements may change based on the conditions">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Good Recovery">
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
			<input type="radio" name="Chest" id="ChestClear">
			<label class="form-check-label" for="ChestClear">
			Clear
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Chest" id="ChestNotClear">
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
			<label for="exampleInputEmail1">Abdomen Palpitation</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Abdomen" id="AbdomenTender">
			<label class="form-check-label" for="AbdomenTender">
			Tender
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" id="AbdomenSoft">
			<label class="form-check-label" for="AbdomenSoft">
			Soft
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" id="AbdomenDistended">
			<label class="form-check-label" for="AbdomenDistended">
			Distended
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdomen" id="AbdomenNormal">
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
			<label for="exampleInputEmail1">Abdomen Palpitation</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="AbdomenPalpitation" id="AbdomenPalpitationYes">
			<label class="form-check-label" for="AbdomenPalpitationYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="AbdomenPalpitation" id="AbdomenPalpitationNo">
			<label class="form-check-label" for="AbdomenPalpitationNo">
			No
			</label>
			</div>
			
			
			</div>
			
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
					  <select name="demo" class="form-control select2">
                          <option value="3"  >Select Temperature Type</option>
                          <option value="3"  >Celcius</option>
                          <option value="1">Farenheit</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Temperature">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Disease">
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
			<input type="radio" name="Cleft" id="CleftYes">
			<label class="form-check-label" for="CleftYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Cleft" id="CleftNo">
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
			<input type="radio" name="Club" id="ClubYes">
			<label class="form-check-label" for="ClubYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Club" id="ClubNo">
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
			<input type="radio" name="Congenital" id="CongenitalYes">
			<label class="form-check-label" for="CongenitalYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Congenital" id="CongenitalNo">
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
			<input type="radio" name="Deafness" id="DeafnessYes">
			<label class="form-check-label" for="DeafnessYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deafness" id="DeafnessNo">
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
			<input type="radio" name="SkinCondition" id="YesSkinCondition">
			<label class="form-check-label" for="YesSkinCondition">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SkinCondition" id="NoSkinCondition">
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
			<input type="radio" name="Otitis" id="OtitisYes">
			<label class="form-check-label" for="OtitisYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Otitis" id="OtitisNo">
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
			<input type="radio" name="NeuroMotor" id="YesNeuroMotor">
			<label class="form-check-label" for="YesNeuroMotor">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="NeuroMotor" id="NoNeuroMotor">
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
			<input type="radio" name="BodyType" id="BodyTypeThin">
			<label class="form-check-label" for="BodyTypeThin">
			Thin
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="BodyType" id="BodyTypeAverage">
			<label class="form-check-label" for="BodyTypeAverage">
			Average
			</label>
			</div>
			
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="BodyType" id="FatyBodyType">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medical requirements may change based on the conditions">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Good Recovery">
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
			<input type="radio" name="Annoyed" id="YesAnnoyed">
			<label class="form-check-label" for="YesAnnoyed">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Annoyed" id="NoAnnoyed">
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
			<input type="radio" name="Angry" id="YesAngry">
			<label class="form-check-label" for="YesAngry">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Angry" id="NoAngry">
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
			<input type="radio" name="Blame" id="YesBlame">
			<label class="form-check-label" for="YesBlame">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Blame" id="NoBlame">
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
			<input type="radio" name="Authorities" id="YesAuthorities">
			<label class="form-check-label" for="YesAuthorities">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Authorities" id="NoAuthorities">
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
			<input type="radio" name="Tantrums" id="YesTantrums">
			<label class="form-check-label" for="YesTantrums">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Tantrums" id="NoTantrums">
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
			<input type="radio" name="Frustations" id="YesFrustations">
			<label class="form-check-label" for="YesFrustations">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Frustations" id="NoFrustations">
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
			<input type="radio" name="Behaviour" id="YesBehaviour">
			<label class="form-check-label" for="YesBehaviour">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Behaviour" id="NoBehaviour">
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
			<input type="radio" name="Spelling" id="YesSpelling">
			<label class="form-check-label" for="YesSpelling">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Behaviour" id="NoSpelling">
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
			<input type="radio" name="Paraphrasing" id="YesParaphrasing">
			<label class="form-check-label" for="YesParaphrasing">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Paraphrasing" id="NoParaphrasing">
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
			<input type="radio" name="PoorMemory" id="YesPoorMemory">
			<label class="form-check-label" for="YesPoorMemory">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PoorMemory" id="NoPoorMemory">
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
			<input type="radio" name="Surroundings" id="FriendlySurroundings">
			<label class="form-check-label" for="FriendlySurroundings">
			Friendly
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Surroundings" id="NotSurroundings">
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
			<input type="radio" name="Quite" id="QuiteYes">
			<label class="form-check-label" for="QuiteYes">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Quite" id="QuiteNo">
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
			<input type="radio" name="Fidgetting" id="YesFidgetting">
			<label class="form-check-label" for="YesFidgetting">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Fidgetting" id="NoFidgetting">
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
			<input type="radio" name="ConcentrateOnTask" id="YesConcentrateOnTask">
			<label class="form-check-label" for="YesConcentrateOnTask">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ConcentrateOnTask" id="NoConcentrateOnTask">
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
			<input type="radio" name="PhysicalMovements" id="YesPhysicalMovements">
			<label class="form-check-label" for="YesPhysicalMovements">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PhysicalMovements" id="NoPhysicalMovements">
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
			<input type="radio" name="ExcessiveTalking" id="YesExcessiveTalking">
			<label class="form-check-label" for="YesExcessiveTalking">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ExcessiveTalking" id="NoExcessiveTalking">
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
			<input type="radio" name="Wait" id="YesWait">
			<label class="form-check-label" for="YesWait">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Wait" id="NoWait">
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
			<input type="radio" name="Acting" id="YesActing">
			<label class="form-check-label" for="YesActing">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Acting" id="NoActing">
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
			<input type="radio" name="Interruption" id="YesInterruption">
			<label class="form-check-label" for="YesInterruption">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Interruption" id="NoInterruption">
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
			<input type="radio" name="Deficite" id="YesDeficite">
			<label class="form-check-label" for="YesDeficite">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Deficite" id="NoDeficite">
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
			<input type="radio" name="SelfEsteem" id="YesSelfEsteem">
			<label class="form-check-label" for="YesSelfEsteem">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SelfEsteem" id="NoSelfEsteem">
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
			<input type="radio" name="IrritableActions" id="YesIrritableActions">
			<label class="form-check-label" for="YesIrritableActions">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="IrritableActions" id="NoIrritableActions">
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
			<input type="radio" name="SuddenAnger" id="YesSuddenAnger">
			<label class="form-check-label" for="YesSuddenAnger">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SuddenAnger" id="NoSuddenAnger">
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
			<input type="radio" name="FrequentAbsence" id="YesFrequentAbsence">
			<label class="form-check-label" for="YesFrequentAbsence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="FrequentAbsence" id="NoFrequentAbsence">
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
			<input type="radio" name="Suicide" id="YesSuicide">
			<label class="form-check-label" for="YesSuicide">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Suicide" id="NoSuicide">
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
			<input type="radio" name="RecklessBehaviour" id="YesRecklessBehaviour">
			<label class="form-check-label" for="YesRecklessBehaviour">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="RecklessBehaviour" id="NoRecklessBehaviour">
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
			<input type="radio" name="CryingFrequently" id="YesCryingFrequently">
			<label class="form-check-label" for="YesCryingFrequently">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="CryingFrequently" id="NoCryingFrequently">
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
			<input type="radio" name="Depression" id="YesDepression">
			<label class="form-check-label" for="YesDepression">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Depression" id="NoDepression">
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
			<input type="radio" name="Edge" id="YesEdge">
			<label class="form-check-label" for="YesEdge">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Edge" id="NoEdge">
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
			<input type="radio" name="SocialChanges" id="YesSocialChanges">
			<label class="form-check-label" for="YesSocialChanges">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SocialChanges" id="NoSocialChanges">
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
			<input type="radio" name="PhysicalChanges" id="YesPhysicalChanges">
			<label class="form-check-label" for="YesPhysicalChanges">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PhysicalChanges" id="NoPhysicalChanges">
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
			<input type="radio" name="SleepDisturbance" id="YesSleepDisturbance">
			<label class="form-check-label" for="YesSleepDisturbance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="SleepDisturbance" id="NoSleepDisturbance">
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
			<input type="radio" name="PoorSchool" id="YesPoorSchool">
			<label class="form-check-label" for="YesPoorSchool">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PoorSchool" id="NoPoorSchool">
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
			<input type="radio" name="PanicAttack" id="YesPanicAttack">
			<label class="form-check-label" for="YesPanicAttack">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PanicAttack" id="NoPanicAttack">
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
			<input type="radio" name="Anxiety" id="YesAnxiety">
			<label class="form-check-label" for="YesAnxiety">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Anxiety" id="NoAnxiety">
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
			<label for="exampleInputEmail1">Anxiety</label>
			</div>
			</div>


			<div class="col-sm-9">

			<div class="form-group">
			 
			<div class="icheck-primary d-inline radiocssfirst">
			<input type="radio" name="Anxiety" id="YesAnxiety">
			<label class="form-check-label" for="YesAnxiety">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Anxiety" id="NoAnxiety">
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
			<input type="radio" name="Performance" id="YesPerformance">
			<label class="form-check-label" for="YesPerformance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Performance" id="NoPerformance">
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
			<input type="radio" name="AboutAppearence" id="YesAboutAppearence">
			<label class="form-check-label" for="YesAboutAppearence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="AboutAppearence" id="NoAboutAppearence">
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
			<input type="radio" name="ComparesSelf" id="YesComparesSelf">
			<label class="form-check-label" for="YesComparesSelf">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="ComparesSelf" id="NoComparesSelf">
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
			<input type="radio" name="Ugly" id="YesUgly">
			<label class="form-check-label" for="YesUgly">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ugly" id="NoUgly">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Specify">
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
			<input type="radio" name="PerfectImage" id="YesPerfectImage">
			<label class="form-check-label" for="YesPerfectImage">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PerfectImage" id="NoPerfectImage">
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
			<input type="radio" name="Incessant" id="YesIncessant">
			<label class="form-check-label" for="YesIncessant">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Incessant" id="NoIncessant">
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
			<input type="radio" name="Emotions" id="YesEmotions">
			<label class="form-check-label" for="YesEmotions">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Emotions" id="NoEmotions">
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
			<input type="radio" name="Intolerence" id="YesIntolerence">
			<label class="form-check-label" for="YesIntolerence">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Intolerence" id="NoIntolerence">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Specify">
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
			<input type="radio" name="TimeAlone" id="YesTimeAlone">
			<label class="form-check-label" for="YesTimeAlone">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="TimeAlone" id="NoTimeAlone">
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
			<input type="radio" name="PullsBack" id="YesPullsBack">
			<label class="form-check-label" for="YesPullsBack">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PullsBack" id="NoPullsBack">
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
			<input type="radio" name="Modelling" id="YesModelling">
			<label class="form-check-label" for="YesModelling">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Modelling" id="NoModelling">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Specify">
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
			<input type="radio" name="Ask" id="YesAsk">
			<label class="form-check-label" for="YesAsk">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Ask" id="NoAsk">
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
			<input type="radio" name="WeightGain" id="YesWeightGain">
			<label class="form-check-label" for="YesWeightGain">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="WeightGain" id="NoWeightGain">
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
			<input type="radio" name="Abdominal" id="YesAbdominal">
			<label class="form-check-label" for="YesAbdominal">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Abdominal" id="NoAbdominal">
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
			<input type="radio" name="Bloated" id="YesBloated">
			<label class="form-check-label" for="YesBloated">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bloated" id="NoBloated">
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
			<input type="radio" name="Circles" id="YesCircles">
			<label class="form-check-label" for="YesCircles">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Circles" id="NoCircles">
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
			<input type="radio" name="Bathroom" id="YesBathroom">
			<label class="form-check-label" for="YesBathroom">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Bathroom" id="NoBathroom">
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
			<input type="radio" name="Phobia" id="YesPhobia">
			<label class="form-check-label" for="YesPhobia">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Phobia" id="NoPhobia">
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
			<input type="radio" name="MobileAddiction" id="YesMobileAddiction">
			<label class="form-check-label" for="YesMobileAddiction">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MobileAddiction" id="NoMobileAddiction">
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
			<input type="radio" name="MemoryLoss" id="YesMemoryLoss">
			<label class="form-check-label" for="YesMemoryLoss">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MemoryLoss" id="NoMemoryLoss">
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
			<input type="radio" name="Substance" id="YesSubstance">
			<label class="form-check-label" for="YesSubstance">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Substance" id="NoSubstance">
			<label class="form-check-label" for="NoSubstance">
			No
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
			<input type="radio" name="MeasurationCycle" id="YesMeasurationCycle">
			<label class="form-check-label" for="YesMeasurationCycle">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="MeasurationCycle" id="NoMeasurationCycle">
			<label class="form-check-label" for="NoMeasurationCycle">
			No
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
			<input type="radio" name="IrregularPeriod" id="YesIrregularPeriod">
			<label class="form-check-label" for="YesIrregularPeriod">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="IrregularPeriod" id="NoIrregularPeriod">
			<label class="form-check-label" for="NoIrregularPeriod">
			No
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
			<input type="radio" name="PainDuring" id="YesPainDuring">
			<label class="form-check-label" for="YesPainDuring">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="PainDuring" id="NoPainDuring">
			<label class="form-check-label" for="NoPainDuring">
			No
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
			<input type="radio" name="Urination" id="YesUrination">
			<label class="form-check-label" for="YesUrination">
			Yes
			</label>
			</div>
			
			<div class="icheck-primary d-inline radiocss">
			<input type="radio" name="Urination" id="NoUrination">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Medical requirements may change based on the conditions">
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


			 <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Good Recovery">
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

	  
      </div>


	
	  
	  
	  <div class="modal fade" id="edit-profile">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
       
          
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Saif Khan">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  selected>Male</option>
                          <option value="1">Female</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="A-8/15, Gomti Nager, Lucknow">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="saif@gmail.com">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Emergency Contact No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" value="989855666">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">D.O.B</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" value="Email">
                  </div>
              </div>
			  
			   
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Father Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Mohd Anwar Khan">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mother Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Noor Bano">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">School Name</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Jaipuria School</option>
                          <option value="1">L.P.S</option>
                          <option value="2">Kidzee</option>
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Section</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >A</option>
                          <option value="1">B</option>
                          <option value="2">C</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Siblings</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" value="2">
                  </div>
              </div>
            </div>
            
			
			 
            <div class="modal-footer justify-content-left">
              <button type="button" class="btn btn-primary">Update</button>
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
					
					
					
				
					
					
				
				
				

  @endsection