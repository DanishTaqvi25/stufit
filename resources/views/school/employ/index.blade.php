@extends('admin.layout.layout')
@section('content')

  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		  
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
				 	
			   </h3>
              
			  <div class="card-tools" style="margin-right:2px;">
              <a href="javascript:void()" data-toggle="modal" data-target="#modal-add-school"><button type="button" class="btn  bg-gradient-primary btn-position">Add Employee</button></a>
            </div>
			  
			  
			  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                    <td><a href="javascript:void()"><button type="button" class="btn  bg-gradient-primary">PA765678</button></a></td>
                    <td>Ramesh Srivastava</td>
                    <td>ramesh@gmail.com</td>
                    <td>9894455566</td>
                    <td>Lucknow</td>
					<td>27-01-2022 06:54 AM</td>
					<td> 
						<div class="form-group">
							<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch11">
							<label class="custom-control-label" for="customSwitch11"></label>
							</div>
						</div>
					</td>
                     <td>
                         
						 <a class="btn btn-info btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-edit-school">
                              <i class="fas fa-edit">
                              </i>
                              
                          </a>
                         
                          <a class="btn btn-danger btn-sm toastrDefaultError" href="#">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>
                      </td>
                  </tr>
				  
				  
				 
				  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
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

<div class="modal fade" id="modal-default">
        <div class="modal-dialog ">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to update this item ?</p>
              <p style="line-height:1px;">You can't undo this action.</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" style="position:relative;left:284px;width:68px;" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary toastrDefaultSuccess" style="width:104px;">Yes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  
	  
	   <div class="modal fade" id="modal-add-school">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4  class="modal-title">Add Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      
           <section class="content">
      
            <div class="row">
			
			<div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">General Details</label>
                  </div>
              </div>
			  
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employee Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Employ Name">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="989855666">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address">
                  </div>
              </div>
			  
			  <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Access Provide</label>
                  </div>
              </div>
			  
			  <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check"> 
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Personal Details</label>
                        </div>
                       <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Physical Assessment</label>
                        </div>
                       <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Eye & Vision Assessment</label>
                        </div>
						<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Dental & Oral Assessment</label>
                        </div>
						
						
						
						
						
						
                      </div>
                    </div> 
					
					<div class="col-sm-6">
					
					<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Audiometry & Speech Assessment</label>
                        </div>
						
						<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Nutrition Assessment</label>
                        </div>
					
					<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Psycological Assessment</label>
                        </div>
						
						<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">General Assessment</label>
                        </div>
					</div> 
			  
			  
			  
			  <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login Credentials</label>
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                  </div>
              </div>
			  
			  
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input id="passwordInput" type="text" class="form-control" id="exampleInputEmail1" value="">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <a href="javascript:void()"><p id="generatePassword">Generate Password</p></a>
                  </div>
              </div>
			 
            </div>
           </section>
		 
		 
		 
		 
		 
		 
            
          </div>
		  
		  <div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  
	  
	  
	  <div class="modal fade" id="modal-edit-school">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4  class="modal-title">Edit Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      
           <section class="content">
      
            <div class="row">
			
			<div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">General Details</label>
                  </div>
              </div>
			  
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employ Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Ramesh Srivastava">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="Email">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" value="989855666">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Address">
                  </div>
              </div>
			  
			  
			  
			  
			  <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Access Provide</label>
                  </div>
              </div>
			  
			  <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check"> 
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Personal Details</label>
                        </div>
                       <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Physical Assessment</label>
                        </div>
                       <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Eye & Vision Assessment</label>
                        </div>
						<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Dental & Oral Assessment</label>
                        </div>
						
						
						
						
						
						
                      </div>
                    </div> 
					
					<div class="col-sm-6">
					
					<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Audiometry & Speech Assessment</label>
                        </div>
						
						<div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Nutrition Assessment</label>
                        </div>
					
					<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Psycological Assessment</label>
                        </div>
						
						<div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">General Assessment</label>
                        </div>
					</div> 
			  
			  
			  
			  <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login Credentials</label>
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="ramesh@_123">
                  </div>
              </div>
			  
			  
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input id="passwordInput" type="text" class="form-control" id="exampleInputEmail1" value="c#JrK#*)*21esdfOOnS">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                  </div>
              </div>
			  
			   
            </div>
           </section>
		 
		 
		 
		 
		 
		 
            
          </div>
		  
		  <div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary" data-dismiss="modal">Update</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
	  

		<script>
		$(document).ready(function(){
		$("#generatePassword").click(function(){
			
		 $('#passwordInput').val('c#JrK#*)*21esdfOOnS');
		
		});
		});
		</script>

  @endsection