@extends('admin.layout.layout')
@section('content')

  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>School</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">School</li>
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
              <a href="javascript:void()" data-toggle="modal" data-target="#modal-add-school"><button type="button" class="btn  bg-gradient-primary btn-position">Add School</button></a>
            </div>
			  
			  
			  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>School ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
					
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                    <td><a href="javascript:void()"><button type="button" class="btn  bg-gradient-primary">PA765678</button></a></td>
                    <td>Jaipuria School</td>
                    <td>Gomti Nagar, Virat Khand</td>
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
                    <th>School ID</th>
                    <th>Name</th>
                    <th>Address</th>
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
              <h4  class="modal-title">Add School</h4>
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
                    <label for="exampleInputEmail1">School Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="School Name">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  >Select</option>
                          <option value="3"  >Lucknow</option>
                          <option value="1">Agra</option>
                          <option value="2">Meerut</option>
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
					  <select name="demo" class="form-control select2">
							<option value="3"  >Select</option>
                          <option value="3" >Uttar Pradesh</option>
                          <option value="1">Madhya Pradesh</option>
                          <option value="2">Rajasthan</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pincode</label>
					  <select name="demo" class="form-control select2">
                          <option value="3"  >Select</option>
                          <option value="3" >226006</option>
                          <option value="3" >226555</option>
                          <option value="3" >226558</option>
                         
					  </select> 
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
              <h4  class="modal-title">Edit School</h4>
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
                    <label for="exampleInputEmail1">School Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Jaipuria School">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="Gomti Nagar, Virat Khand">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected >Lucknow</option>
                          <option value="1">Agra</option>
                          <option value="2">Meerut</option>
					  </select> 
		        </div>
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected>Uttar Pradesh</option>
                          <option value="1">Madhya Pradesh</option>
                          <option value="2">Rajasthan</option>
					  </select> 
		        </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pincode</label>
					  <select name="demo" class="form-control select2">
                          <option value="3" selected>226006</option>
                          <option value="3" >226555</option>
                          <option value="3" >226558</option>
                         
					  </select> 
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
                    <input type="text" class="form-control" id="exampleInputEmail1" value="jaypuria_school">
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