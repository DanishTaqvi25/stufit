@extends('admin.layout.layout')
@section('content')

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
          </div>
          <div class="card-body">
            <h4></h4>
            <div class="row">
              <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link side-link " id="vert-tabs-home-tab" href="{{url('add-student')}}"  >Profile</a>
					
					<a class="nav-link side-link active" id="vert-tabs-profile-tab"  href="{{url('add-student-physical-assessment')}}">Physical Assessment</a>
				    <a class="nav-link side-link" id="vert-tabs-experience-tab" data-toggle="pill" href="#vert-tabs-experience" role="tab" aria-controls="vert-tabs-experience" aria-selected="false">Eye & Vision Assessment</a>
					<!--<a class="nav-link side-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Bank Details</a> -->
					<!--<a class="nav-link side-link" id="vert-tabs-health-tab" data-toggle="pill" href="#vert-tabs-health" role="tab" aria-controls="vert-tabs-health" aria-selected="false">Images</a>
					<a class="nav-link side-link" id="vert-tabs-records-tab" data-toggle="pill" href="#vert-tabs-records" role="tab" aria-controls="vert-tabs-records" aria-selected="false">Facilities</a>
					<a class="nav-link side-link" id="vert-tabs-medical-tab" data-toggle="pill" href="#vert-tabs-medical" role="tab" aria-controls="vert-tabs-medical" aria-selected="false">Doctors</a>
					<a class="nav-link side-link" id="vert-tabs-medicines-tab" data-toggle="pill" href="#vert-tabs-medicines" role="tab" aria-controls="vert-tabs-medicines" aria-selected="false">Test Package</a>
					<a class="nav-link side-link" id="vert-tabs-availability-tab" data-toggle="pill" href="#vert-tabs-availability" role="tab" aria-controls="vert-tabs-availability" aria-selected="false">Availability</a>-->
               
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
            <h3 class="card-title">Physical Assessment</h3>
			
				
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
			
		  
		 
			<div class="row">
			
			<div class="col-md-12">
			<div class="form-group">
			<label for="exampleInputEmail1">1. Heart Beat Monitor is a analoge device ?</label>
			</div>
			</div>


			<div class="col-md-12">

			<div class="form-group clearfix">
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary1" name="r1">
			<label for="radioPrimary1">
			true
			</label>
			</div>
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary2" name="r1">
			<label for="radioPrimary2">
			false
			</label>
			</div>

			</div>
			</div>
			
			
			<div class="col-md-12">
			<div class="form-group">
			<label for="exampleInputEmail1">2. Heart Beat Monitor is a analoge device ?</label>
			</div>
			</div>


			<div class="col-md-12">

			<div class="form-group clearfix">
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary1" name="r1">
			<label for="radioPrimary1">
			true
			</label>
			</div><br>
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary2" name="r1">
			<label for="radioPrimary2">
			false
			</label>
			</div>

			</div>
			</div>
          
		  
			<div class="card-tools">
			<a class="nav-link side-link" id="save-experience" data-toggle="pill" href="#vert-tabs-experience"> <button type="button" class="btn  bg-gradient-primary btn-position">Save & Continue</button></a>
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
			
			<div class="col-md-12">
			<div class="form-group">
			<label for="exampleInputEmail1">1. Heart Beat Monitor is a analoge device ?</label>
			</div>
			</div>


			<div class="col-md-12">

			<div class="form-group clearfix">
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary1" name="r1">
			<label for="radioPrimary1">
			true
			</label>
			</div>
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary2" name="r1">
			<label for="radioPrimary2">
			false
			</label>
			</div>

			</div>
			</div>
			
			
			<div class="col-md-12">
			<div class="form-group">
			<label for="exampleInputEmail1">2. Heart Beat Monitor is a analoge device ?</label>
			</div>
			</div>


			<div class="col-md-12">

			<div class="form-group clearfix">
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary1" name="r1">
			<label for="radioPrimary1">
			true
			</label>
			</div><br>
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary2" name="r1">
			<label for="radioPrimary2">
			false
			</label>
			</div>

			</div>
			</div>
          
		  
			<div class="card-tools">
			<a class="nav-link side-link" id="save-experience" data-toggle="pill" href="#vert-tabs-experience"> <button type="button" class="btn  bg-gradient-primary btn-position">Save & Continue</button></a>
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
			
			<div class="col-md-12">
			<div class="form-group">
			<label for="exampleInputEmail1">1. Heart Beat Monitor is a analoge device ?</label>
			</div>
			</div>


			<div class="col-md-12">

			<div class="form-group clearfix">
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary1" name="r1">
			<label for="radioPrimary1">
			true
			</label>
			</div><br>
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary2" name="r1">
			<label for="radioPrimary2">
			false
			</label>
			</div>

			</div>
			</div>
			
			
			<div class="col-md-12">
			<div class="form-group">
			<label for="exampleInputEmail1">2. Heart Beat Monitor is a analoge device ?</label>
			</div>
			</div>


			<div class="col-md-12">

			<div class="form-group clearfix">
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary1" name="r1">
			<label for="radioPrimary1">
			true
			</label>
			</div><br>
			<div class="icheck-primary d-inline">
			<input type="radio" id="radioPrimary2" name="r1">
			<label for="radioPrimary2">
			false
			</label>
			</div>

			</div>
			</div>
          
		  
			<div class="card-tools">
			<a class="nav-link side-link" id="save-experience" data-toggle="pill" href="#vert-tabs-experience"> <button type="button" class="btn  bg-gradient-primary btn-position">Save & Continue</button></a>
			</div>

			</div>
       
        <!-- /.row -->
      </div>
	  
    </section>
			</div> 
			
			
			  <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
				
				<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default " >
         
		   <div class="card-header headertop">
            <h3 class="card-title">Bank Details</h3>
			
			<div class="card-tools">
					  <a href="javascript:void()" data-toggle="modal" data-target="#edit-bank-details" ><i class="fa fa-edit"></i></a>
					</div>
          </div>
		  
		  <div class="card-body">
		  
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <p><label>Account Holder Name</label></p>
                  <p>Mohd Saif Khan</p>
                </div>
              </div>
			  
			   <div class="col-md-4">
                <div class="form-group">
                  <p><label>Account Number</label></p>
                  <p>226544885454</p>
                </div>
              </div>
			  
			  
			   <div class="col-md-4">
                <div class="form-group">
                  <p><label>Account Type </label></p>
                  <p>Saving Account</p>
                </div>
              </div>
			  
			   <div class="col-md-4">
                <div class="form-group">
                  <p><label>Bank Name</label></p>
                  <p>Union Bank Of India</p>
                </div>
              </div>
			  
			   <div class="col-md-4">
                <div class="form-group">
                  <p><label>Branch Address</label></p>
                  <p>Mahanager</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>IFCS Code</label></p>
                  <p>Ubin54848845</p>
                </div>
              </div>
			  
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
	  
    </section>
	
	
	
	 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
             
              <!-- /.card-header -->
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Image Type</th>
                    <th>Document</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
					<tr>
						<td>
							Cheque                  
						</td>

						<td>
						<img src="https://www.goodreturns.in/img/2021/04/cheque-1618977087.jpg" class="img-fluid mb-2" alt="" style="height: 100px;">
						</td> 
						<td>
							<span class="badge badge-warning">pending</span>
						</td>                  
						<td>
							<select  class="form-control">
							<option value="Pending" selected  >Pending</option>
							<option value="Approved"> Approved</option>
							<option value="Rejected">Rejected</option>
							</select>
						</td>     
					</tr>
					
                  </tbody>
                  <tfoot>
                   
                  </tfoot>
                </table>
              <!-- /.card-body -->
            </div>
			
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
				
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-health" role="tabpanel" aria-labelledby="vert-tabs-health-tab">
			   
			   
	  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
			<div class="card-header">
               
			  <div class="card-tools" style="margin-right:2px;">
             <a href="javascript:void()" data-toggle="modal" data-target="#modal-add-image" > <button type="button" class="btn  bg-gradient-primary btn-position">Add Image</button></a>
            </div>
			  
			  
		   </div>
             
              <div class="card-body">
                <table id="example7" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Image Type</th>
                    <th>Document</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                  <tfoot>
                   
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
			
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-records" role="tabpanel" aria-labelledby="vert-tabs-records-tab">
			   
			   
			   
	 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		   <div class="card">
		   
		   <div class="card-header">
              <div class="card-tools" style="margin-right:2px;">
                <a href="javascript:void()" data-toggle="modal" data-target="#modal-add-facilities" > <button type="button" class="btn  bg-gradient-primary btn-position">Add Facilities</button></a>
              </div>
		   </div>
		   
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Facilities</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
					
					
                  </tbody>
                  <tfoot>
                   
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
			
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
			   
			   
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-medical" role="tabpanel" aria-labelledby="vert-tabs-medical-tab">
			   
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		   <div class="card">
		   
		   <div class="card-header">
              <div class="card-tools" style="margin-right:2px;">
                <a href="javascript:void()" data-toggle="modal" data-target="#modal-add-doctors" > <button type="button" class="btn  bg-gradient-primary btn-position">Add Doctors</button></a>
              </div>
		   </div>
		   
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Photo</th>
					<th>Full Name</th>
					<th>Gender </th>
					<th>Department </th>
                    <th>Experience (Years)</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
					
                  </tbody>
                  <tfoot>
                   
                  </tfoot>
                </table>
              </div>
			  
			   <div class="card-header">
              <div class="card-tools" style="margin-right:2px;">
                <a href="javascript:void()"> <button type="button" class="btn  bg-gradient-primary btn-position">Submit</button></a>
              </div>
		   </div>
              <!-- /.card-body -->
            </div>
			
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
			   
			  </div>
			  
			  <div class="tab-pane fade" id="vert-tabs-medicines" role="tabpanel" aria-labelledby="vert-tabs-medicines-tab">
				
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		   <div class="card">
		   
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Test Package Name</th>
					<th>MRP Price</th>
					<th>Status</th>
					<th>Action</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
					<tr>
						<td>
							Endoscopy                    
						</td>
						
						<td>
							 <del style="margin-right:5px;"><i class="fa fa-inr" style="font-size:13px;"></i>330</del><i class="fa fa-inr" style="font-size:13px;"></i>200                     
						</td>

						<td>
							<span class="badge badge-warning">pending</span>
						</td>
						
						<td>
							<select  class="form-control">
							<option value="Pending" selected  >Pending</option>
							<option value="Approved"> Approved</option>
							<option value="Rejected">Rejected</option>
							</select>
						</td>   
						
						<td>
						  <a href="javascript:void()" data-toggle="modal" data-target="#modal-test-package-details" > <button type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button></a>
						
							<a class="btn btn-danger btn-sm" href="#">
							<i class="fas fa-trash">
							</i>
							</a>
						</td>
						 
					</tr>
					
					
					<tr>
						<td>
							Endoscopy                    
						</td>
						
						<td>
							<i class="fa fa-inr" style="font-size:13px;"></i><del style="margin-right:5px;">330</del> <i class="fa fa-inr" style="font-size:13px;"></i>200                     
						</td>

						<td>
							<span class="badge badge-danger">rejected</span><br>incomplete document
						</td>
						
						<td>
							<select  class="form-control">
							<option value="Pending" selected  >Pending</option>
							<option value="Approved"> Approved</option>
							<option value="Rejected">Rejected</option>
							</select>
						</td>   
						
						<td>
						  <a href="javascript:void()" data-toggle="modal" data-target="#modal-test-package-details" > <button type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button></a>
						
							<a class="btn btn-danger btn-sm" href="#">
							<i class="fas fa-trash">
							</i>
							</a>
						</td>
						 
					</tr>
					
                  </tbody>
                  <tfoot>
                   
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
			
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
					$("#Others").click(function(){
					$("#rejection-text").css('display', 'block');
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
				
				
				

  @endsection