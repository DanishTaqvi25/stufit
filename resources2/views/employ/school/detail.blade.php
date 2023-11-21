@extends('admin.layout.layout')
@section('content')
<!--
<style>
.dropdown-select-mrgn{
	margin-left:10px;
}
</style>

<style>
.dropdown-select-wdth{
	width:150px;
}
</style>
-->


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
              <li class="breadcrumb-item active">User Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="container-fluid">
      
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              Saif Khan (PA876547)
            </h3>
          </div>
          <div class="card-body">
            <h4></h4>
            <div class="row">
              <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link side-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Personal Profile </a>
                  <a class="nav-link side-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Address</a>
                  <a class="nav-link side-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Favourites</a>
                  <a class="nav-link side-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Activity Goal</a>
                  <a class="nav-link side-link" id="vert-tabs-health-tab" data-toggle="pill" href="#vert-tabs-health" role="tab" aria-controls="vert-tabs-health" aria-selected="false">Health Stats</a>
                  <a class="nav-link side-link" id="vert-tabs-vaccination-tab" data-toggle="pill" href="#vert-tabs-vaccination" role="tab" aria-controls="vert-tabs-vaccination" aria-selected="false">Vaccination</a>
                  <a class="nav-link side-link" id="vert-tabs-records-tab" data-toggle="pill" href="#vert-tabs-records" role="tab" aria-controls="vert-tabs-records" aria-selected="false">Health Records</a>
                  <a class="nav-link side-link" id="vert-tabs-medical-tab" data-toggle="pill" href="#vert-tabs-medical" role="tab" aria-controls="vert-tabs-medical" aria-selected="false">Medical History</a>
                  <a class="nav-link side-link" id="vert-tabs-members-tab" data-toggle="pill" href="#vert-tabs-members" role="tab" aria-controls="vert-tabs-members" aria-selected="false">Members (Child)</a>
                  <a class="nav-link side-link" id="vert-tabs-membersparent-tab" data-toggle="pill" href="#vert-tabs-membersparent" role="tab" aria-controls="vert-tabs-membersparent" aria-selected="false">Members (Parent)</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header headertop">
            <h3 class="card-title">Personal Profile</h3>
			
				<div class="card-tools ">
				<a href="javascript:void()" data-toggle="modal" data-target="#personal-profile" ><i class="fa fa-edit"></i></a>
				</div>
			
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Member Id</label></p>
                  <p>PA876547</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Full Name</label></p>
                  <p>Saif Khan</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Gender</label></p>
                  <p>Male</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Mobile No</label></p>
                  <p>9810930443</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Emergency Mobile No</label></p>
                  <p>9810930225</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>DOB</label></p>
                  <p>14-12-2022 (45 yrs)</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Blood Group</label></p>
                  <p>O +</p>
                </div>
              </div>
			  
			  
            </div>
           
          </div>
         
         
		 
		  <div class="card-header headertop">
            <h3 class="card-title">Address</h3>
			
			<div class="card-tools">
					  <a href="javascript:void()" data-toggle="modal" data-target="#edit-address" ><i class="fa fa-edit"></i></a>
					</div>
          </div>	
		  <div class="card-body">
            <div class="row">
              
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>House No. & Building</label></p>
                  <p>A-8/15</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Location / Area</label></p>
                  <p>Gomti Nager</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>City </label></p>
                  <p>Lucknow</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>State </label></p>
                  <p>Uttar Pradesh</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Pincode </label></p>
                  <p>221333</p>
                </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Address Type</label></p>
                  <p>Home</p>
                </div>
              </div>
			  
			  
            </div>
           
          </div>
		 
		 
		  <div class="card-header headertop">
            <h3 class="card-title">Health Insurance</h3>
			<div class="card-tools">
				<a href="javascript:void()" data-toggle="modal" data-target="#edit-health-insurance" ><i class="fa fa-edit"></i></a>
				</div>
          </div>	
		  <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <p><label>Company Name</label></p>
                  <p>Skyracle</p>
                </div>
                <!-- /.form-group -->
              </div>
			  
			 <div class="col-md-4">
                <div class="form-group">
                  <p><label>Policy No</label></p>
                  <p>7738237</p>
                </div>
                <!-- /.form-group -->
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Expiry Date</label></p>
                  <p>14-06-2022</p>
                </div>
                <!-- /.form-group -->
              </div>
			  
            </div>
           
          </div>
		 
		 
		  <div class="card-header headertop">
            <h3 class="card-title">Term Insurance</h3>
			<div class="card-tools">
				<a href="javascript:void()" data-toggle="modal" data-target="#term-insurance" ><i class="fa fa-edit"></i></a>
				</div>
			
          </div>

		  
		  <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <p><label>Company Name</label></p>
                  <p>Skyracle</p>
                </div>
                <!-- /.form-group -->
              </div>
			  
			 <div class="col-md-4">
                <div class="form-group">
                  <p><label>Policy No</label></p>
                  <p>7738237</p>
                </div>
                <!-- /.form-group -->
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                  <p><label>Expiry Date</label></p>
                  <p>14-11-2044</p>
                </div>
                <!-- /.form-group -->
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
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                   
                    <th>#</th>
					 <th>Name</th>
					 <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
				<tr>
				<td class="project-state">
						  <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Home</span>
                     </td>
				<td>Pali Hill</td>
				<td>
				9879988564
				</td>
				<td>A-8/12,  Gomti Nager, Lko, Uttar Pradesh</td>
				<td>
				<a class="btn btn-danger btn-sm" href="#">
				<i class="fas fa-trash">
				</i>
				</a>
				</td>

				</tr>
				
				
				<tr>
				<td class="project-state">
						  <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Other</span>
				</td>
				<td>Pali Hill</td>
				<td>
				9879988564
				</td>
				<td>A-8/12,  Gomti Nager, Lko, Uttar Pradesh</td>
				<td>
					<a class="btn btn-danger btn-sm" href="#">
					<i class="fas fa-trash">
					</i>
					</a>
				</td>

				</tr>
				
				
				<tr>
				<td class="project-state">
						  <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Work</span>
                     </td>
				<td>Pali Hill</td>
				<td>
				9879988564
				</td>
				<td>A-8/12,  Gomti Nager, Lko, Uttar Pradesh</td>
				<td>
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
			  <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
			 
	 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                   
                    <th>#</th>
					 <th>Name</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                   
                   
                    
					 <td class="project-state">
						  <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Doctor</span>
                     </td>
					 
					  <td><a href="javascript:void()">Ramesh Srivastava</a></td>
                   
				   
					<td>A-8/12,  Gomti Nager, Lko, Uttar Pradesh</td>
                  
                      <td>
						  <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>
                      </td>
					  
                  </tr>
				  
				  
				  <tr>
                   
                    
                    
					 <td class="project-state">
						  <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Lab</span>
                      </td>
					  
					  <td><a href="javascript:void()">Indira Diagnostics</a></td>
                   
				    
					<td>A-8/12,  Gomti Nager, Lko, Uttar Pradesh</td>
                  
                      <td>
						  <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                          </a>
                      </td>
					  
                  </tr>
				  
				 <tr>
                   
                    
                    
					 <td class="project-state">
						  <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Hospital</span>
                      </td>
					  
					  <td><a href="javascript:void()">Chandan Hospital</a></td>
					  
					<td>A-8/12,  Gomti Nager, Lko, Uttar Pradesh</td>
                  
                      <td>
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
			 
			  <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
				
				
				<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
			<div class="card-header">
			  <h3 class="card-title">
				 <div class="form-group">
				  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Select Date
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>		
			  </h3>

			<h3 class="card-title dropdown-select-mrgn"> 
            
				<div class="form-group">
                  <select class="form-control select2 dropdown-select-wdth">
                    <option selected="selected">All Activity</option>
                    <option>Gym</option>
                    <option>Yoga</option>
                    <option>Aerobics</option>
                  </select>
                </div>
			
			</h3>
			
          </div>
             
              <!-- /.card-header -->
              <div class="card-body">
			 	
                <table id="example5" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Date</th>
					<th>Activity</th>
                    <th>Goal (Mins)</th>
                    <th>Achieved (Mins)</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Walking</span>
					   </td>
					   <td>100</td>
					   <td>90</td>
					   <td>90%</td>
                  </tr>
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;" >Gym</span>
					   </td>
					   <td>100</td>
					   <td>90</td>
					   <td>90%</td>
                  </tr>
				  
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;" >Yoga</span>
					   </td>
					   <td>100</td>
					   <td>120</td>
					   <td><i style="color:green;" class="icon fas fa-check"></i></td>
                  </tr>
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;" >Aerobics</span>
					   </td>
					   <td>100</td>
					   <td>115</td>
					   <td><i style="color:green;" class="icon fas fa-check"></i></td>
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
			  
			  <div class="tab-pane fade" id="vert-tabs-health" role="tabpanel" aria-labelledby="vert-tabs-health-tab">
			   
			   
			   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
			<div class="card-header">
            <h3 class="card-title">
				 <div class="form-group">
				  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn2">
                      <i class="far fa-calendar-alt"></i> Select Date
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>		
			   </h3>

			<h3 class="card-title dropdown-select-mrgn"> 
            
				<div class="form-group">
                  <select class="form-control select2 dropdown-select-wdth">
                    <option selected="selected">Health Stats</option>
                    <option>Weight</option>
                    <option>Heart Rate</option>
                    <option>Blood Pressure</option>
                    <option>Height</option>
                    <option>Temperature</option>
                    <option>Blood Sugar</option>
                    <option>Hba1c</option>
                    <option>Oxygen Saturation</option>
                  </select>
                </div>
			
			</h3>
			
			<h3 class="card-title dropdown-select-mrgn"> 
            
				<div class="form-group">
                  <select class="form-control select2 dropdown-select-wdth">
                    <option selected="selected">Saif Khan</option>
                    <option>Anwar khan (Father)</option>
                    <option>Noor Bano (Mother)</option>
                    <option>Mohsin (Brother)</option>
                  </select>
                </div>
			
			</h3>
			
          </div>
             
              <!-- /.card-header -->
              <div class="card-body">
			 	
                <table id="example7" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Date</th>
					<th>Health Stats</th>
                    <th>Records</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Weight</span>
					   </td>
					   <td>70 kg</td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Heart Rate</span>
					   </td>
					   <td>100/60 Min</td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				  
				  
				   <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Blood Pressure</span>
					   </td>
					   <td>120/90 mm/hg </td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				  
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Height</span>
					   </td>
					   <td>150 cm </td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				  
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Temperature</span>
					   </td>
					   <td>98.6 F </td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				 
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;"> Blood Sugar</span>
					   </td>
					   <td>140 mg/dL </td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				  
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Hba1c</span>
					   </td>
					   <td>48 mmol/mol</td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash">
						</i>
						</a>
						</td>
                  </tr>
				  
				  
				  <tr>
                       <td>27-01-2022</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Oxygen Saturation</span>
					   </td>
					   <td>95%</td>
						<td>
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
			  
			  
			  <div class="tab-pane fade" id="vert-tabs-vaccination" role="tabpanel" aria-labelledby="vert-tabs-vaccination-tab">
			   
			    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
			<div class="card-header">
			
			<h3 class="card-title">
				 <div class="form-group">
				  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn3">
                      <i class="far fa-calendar-alt"></i> Select Date
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>		
		    </h3>
			
			<h3 class="card-title dropdown-select-mrgn"> 
            
				<div class="form-group">
                  <select class="form-control select2 dropdown-select-wdth">
                    <option selected="selected">Saif Khan</option>
                    <option>Anwar khan (Father)</option>
                    <option>Noor Bano (Mother)</option>
                    <option>Mohsin (Brother)</option>
                  </select>
                </div>
			
			</h3>
			
          </div>
              <!-- /.card-header -->
              <div class="card-body">
			 	
                <table id="example9" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Vaccination Name</th>
					<th>Type Of Vaccination</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                       <td>Covid Shield</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Injection</span>
					   </td>
					   <td>27-01-2022</td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash"></i>
						</a>
						
						</td>
                  </tr>
				  
				  
				  <tr>
                       <td>Covaxine</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Injection</span>
					   </td>
					   <td>27-01-2022</td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash"></i>
						</a>
						
						</td>
                  </tr>
				  
				  <tr>
                       <td>Sputnik v</td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Injection</span>
					   </td>
					   <td>27-01-2022</td>
						<td>
						<a class="btn btn-danger btn-sm" href="#">
						<i class="fas fa-trash"></i>
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
			  
			  <div class="tab-pane fade" id="vert-tabs-records" role="tabpanel" aria-labelledby="vert-tabs-records-tab">
			   
			   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
			<div class="card-header">
           <h3 class="card-title">
				 <div class="form-group">
				  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn4">
                      <i class="far fa-calendar-alt"></i> Select Date
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>		
		    </h3>
			  
			  
			  
			  
			<h3 class="card-title dropdown-select-mrgn"> 
            
				<div class="form-group">
                  <select class="form-control select2 dropdown-select-wdth">
                    <option selected="selected">Saif Khan</option>
                    <option>Anwar khan (Father)</option>
                    <option>Noor Bano (Mother)</option>
                    <option>Mohsin (Brother)</option>
                  </select>
                </div>
			
			</h3>
			
         
			  

			
          </div>
             
              <!-- /.card-header -->
              <div class="card-body">
			 	
                <table id="example13" class="table table-bordered table-striped table-responsive">
                  <thead>
                  <tr>
                    <th>Prescription</th>
                    <th>Disease Name</th>
					<th>Date of Consultation</th>
                    <th>Doctor/Hospital Name</th>
                    <th>Medicine Prescribed</th>
                    <th>Note</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
				        <td><img src="https://www.researchgate.net/profile/Sandra-Benavides/publication/228331607/figure/fig4/AS:667613038387209@1536182760366/Indicate-why-the-prescription-is-not-appropriate-as-written.png" class="img-thumbnail"></td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Suger</span>
					   </td>
                       <td>27-01-2000</td>
                       <td>Chandan Hospital</td>
					   <td>
						 <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#modal-prescription">
						  View
						 </a>
						</td>
						
						<td>
						 <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#modal-notes" >
						  View
						 </a>
						</td>
						
						<td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
						
                  </tr>
				  
				  
				   <tr>
				        <td><img src="https://www.researchgate.net/profile/Sandra-Benavides/publication/228331607/figure/fig4/AS:667613038387209@1536182760366/Indicate-why-the-prescription-is-not-appropriate-as-written.png" class="img-thumbnail"></td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Blood Pressure</span>
					   </td>
                       <td>27-01-2000</td>
                       <td>Chandan Hospital</td>
					   <td>
						 <a class="btn btn-info btn-sm" href="#">
						  View
						 </a>
						</td>
						
						<td>
						 <a class="btn btn-info btn-sm" href="#">
						  View
						 </a>
						</td>
						
						<td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
						
                  </tr>
				  
				  
				   <tr>
				        <td><img src="https://www.researchgate.net/profile/Sandra-Benavides/publication/228331607/figure/fig4/AS:667613038387209@1536182760366/Indicate-why-the-prescription-is-not-appropriate-as-written.png" class="img-thumbnail"></td>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Typhoid</span>
					   </td>
                       <td>27-01-2000</td>
                       <td>Chandan Hospital</td>
					   <td>
						 <a class="btn btn-info btn-sm" href="#">
						  View
						 </a>
						</td>
						
						<td>
						 <a class="btn btn-info btn-sm" href="#">
						  View
						 </a>
						</td>
						
						<td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
						
                  </tr>
				  
				  
				  <div class="modal fade" id="modal-prescription">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Medicine Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Medicine Prescribed</label>
					<p>Crocin</p>
                  </div>
                <!-- /.form-group -->
              
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Frequency</label>
						<p>OD</p>
                  </div>
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            
            
			
			 
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	   <div class="modal fade" id="modal-notes">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Notes Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Note</label>
					<p>As you notice in the figure above, while the general trend for growth in the market looks healthy, the two main regions contributing to market growth by 2015 are the United States and the RoW (Rest of the World). The RoW market will expand by an estimated 8% from 2011 to 2015 and hence will be the major focus area for most medical diagnostics companies. In order to aid this growth, quite a few of the companies have setup global research, development and manufacturing centres within the emerging market economies and India and China host most of these centres</p>
                  </div>
                <!-- /.form-group -->
              
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
             
              <!-- /.col -->
            </div>
           
			</div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
				  
				  
				  
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
            <h3 class="card-title">
				 <div class="form-group">
				  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn5">
                      <i class="far fa-calendar-alt"></i> Select Date
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>		
		    </h3>
			  
			  <h3 class="card-title dropdown-select-mrgn"> 
            
				<div class="form-group">
                  <select class="form-control select2 dropdown-select-wdth">
                    <option selected="selected">Saif Khan</option>
                    <option>Anwar khan (Father)</option>
                    <option>Noor Bano (Mother)</option>
                    <option>Mohsin (Brother)</option>
                  </select>
                </div>
			
			</h3>

			
          </div>
             
              <!-- /.card-header -->
              <div class="card-body">
			 	
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Disease Name</th>
					<th>From Date</th>
                    <th>To Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Suger</span>
					   </td>
                       <td>27-01-2000</td>
                       <td>28-01-2022</td>
					   <td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
                  </tr>
				  
				  <tr>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Blood Pressure</span>
					   </td>
                       <td>27-01-2000</td>
                       <td>28-01-2022</td>
					   <td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
                  </tr>
				  
				  <tr>
					   <td class="project-state">
					     <span class="badge badge-success" style="padding:8px 8px 8px 8px;background:grey;">Typhoid</span>
					   </td>
                       <td>27-01-2000</td>
                       <td>27-03-2000</td>
					   <td>
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
			  
			  <div class="tab-pane fade" id="vert-tabs-members" role="tabpanel" aria-labelledby="vert-tabs-medical-tab">
			   
			   
			   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
			
			  <div class="card-body">

                <table id="example15" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Full Name</th>
					<th>DOB</th>
                    <th>Gender</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
					   <td>Mohd Saif Khan</td>
                       <td>14-12-2000</td>
                       <td>Male</td>
					   <td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
                  </tr>
				  
				  <tr>
					   <td>Ramesh Srivastava</td>
                       <td>14-12-2000</td>
                       <td>Male</td>
					   <td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
                  </tr>
				  
				  <tr>
					   <td>Poonam</td>
                       <td>14-12-2000</td>
                       <td>Female</td>
					   <td>
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
             </div>
              <!-- /.card-body -->
            </div>
			
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
     
      <!-- /.container-fluid -->
    </section>
	
	 </div>
			   
			   
			 
			  
			  <div class="tab-pane fade" id="vert-tabs-membersparent" role="tabpanel" aria-labelledby="vert-tabs-membersparent-tab">

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
			
              <div class="card-body">
			 	
                <table id="example17" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Member ID</th>
					<th>Name</th>
					<th>Mobile</th>
					<th>Gender</th>
					<th>DOB</th>
                    <th>Relation</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
					   <td><a href="javascript:void()">PA876547</a></td>
					   <td>Mohd Anwar Khan</td>
					   <td>9830030665</td>
					   <td>Male</td>
                       <td>14-12-2000</td>
					   <td>Son</td>
                       
					   <td>
						 <a class="btn btn-danger btn-sm" href="#">
						  <i class="fas fa-trash">
						  </i>
						 </a>
						</td>
                  </tr>
				  
				  
				  <tr>
					   <td><a href="javascript:void()">PA876547</a></td>
					   <td>Noor Bano</td>
					   <td>9830030665</td>
					   <td>Female</td>
                       <td>14-12-2000</td>
					   <td>Son</td>
                       
					   <td>
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
			
			
			

 <div class="modal fade" id="personal-profile">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Personal Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      
            <div class="row">
			
			 <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Member id</label>
                    <input type="text" disabled class="form-control" id="exampleInputEmail1" value="PA876547">
                  </div>
              </div>
			
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="Saif Khan">
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Male</option>
                          <option value="1">Female</option>
                          <option value="2">Others</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="admin@gmail.com">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type = "number"  class="form-control" id="Mobile" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10" value="9810930443">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Emergency Mobile No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10" value="9810930225">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">DOB</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" value="14-12-2022 (45 yrs)">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >O +</option>
                          <option value="1">A +</option>
                          <option value="1">A -</option>
                          <option value="1">B +</option>
                          <option value="1">B -</option>
						  <option value="1">A -</option>
                          <option value="1">B +</option>
                          <option value="1">B -</option><option value="1">A -</option>
                          <option value="1">B +</option>
                          <option value="1">B -</option>
					  </select> 
		        </div>
              </div>
			  
            </div>
           </section>
			 
			 
          </div>
		  
		   <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
	  <div class="modal fade" id="edit-address">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Address</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      
            <div class="row">
			
			  
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">House No. & Building</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="A-8/15">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Location / Area</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="Gomti Nager">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Lucknow</option>
                          <option value="1">Agra</option>
                          <option value="2">Meerut</option>
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Uttar Pradesh</option>
                          <option value="1">Madhya Pradesh</option>
                          <option value="2">Rajasthan</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">221333</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >226006</option>
                          <option value="3" >226555</option>
                          <option value="3" >226558</option>
                         
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address Type</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Home</option>
                          <option value="1">Work</option>
                          <option value="2">Other</option>
					  </select> 
		        </div>
              </div>
			  
			 
            </div>
           </section>
			 
			 
          </div>
		  
		   <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  
	  <div class="modal fade" id="edit-health-insurance">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Health Insurance</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      
            <div class="row">
			
			  
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Skyracle">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Policy No</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="7738237">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Expiry Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" value="14-06-2022">
                  </div>
              </div>
			  
			 
            </div>
           </section>
			 
			 
          </div>
		  
		   <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
      
	  
	  <div class="modal fade" id="term-insurance">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Term Insurance</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  <section class="content">
      
            <div class="row">
			
			  
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Skyracle">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Policy No </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="7738237">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Expiry Date </label>
                    <input type="date" class="form-control" id="exampleInputEmail1" value="14-12-1992">
                  </div>
              </div>
			  
			  
            </div>
           </section>
			 
			 
          </div>
		  
		   <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </section>
	  
	    </div>
	  
	  
  @endsection