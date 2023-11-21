@extends('school.layout.layout')
@section('content')

  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
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
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Student ID</th>
                    <th>Name</th>
					<th>School Name</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Registration Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                 <tr>
                    <td><a href="{{url('view-school-student-details')}}"><button type="button" class="btn  bg-gradient-primary">PA765678</button></a></td>
                    <td>Ramesh Srivastava</td>
					 <td>Jaipuria</td>
                    <td>9894455566</td>
                    <td>Lucknow</td>
					<td>27-01-2022 06:54 AM</td>
					
                     <td>
                         
						
                         
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-download">
                              </i>
                              
                          </a>
                      </td>
                  </tr>
				  
				  
				 
				  
                  </tbody>
                  <tfoot>
                   <tr>
                    <th>Student ID</th>
                    <th>Name</th>
					<th>School Name</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Registration Date</th>
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
              <h4  class="modal-title">Add Student</h4>
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
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Student Name">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">School Name</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  >Select</option>
                          <option value="3"  >Jaipuria School</option>
                          <option value="1">L.P.S</option>
                          <option value="2">Kidzee</option>
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  >Select</option>
                          <option value="3"  >1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Section</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  >Select</option>
                          <option value="3"  >A</option>
                          <option value="1">B</option>
                          <option value="2">C</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">D.O.B</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Father Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Father Name">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mother Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mother Name">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address">
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
                    <label for="exampleInputEmail1">Emergency Contact No</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="989855666">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Siblings</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="2">
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
              <h4  class="modal-title">Edit Student</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      
           <section class="content">
      
            <div class="row">
			
			
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Ramesh Srivastava">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Male</option>
                          <option value="1">Female</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Gomti Nagar, Vineet Khand">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="ramesh@gmail">
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Pawan Srivastava">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mother Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Meena Srivastava">
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