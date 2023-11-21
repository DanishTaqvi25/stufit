@extends('admin.layout.layout')
@section('content')

  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employees</li>
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
                    <th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($employ as $key => $orderDetails)
                  <tr>
                    <td><a href="javascript:void()"><button type="button" class="btn  bg-gradient-primary">{{$orderDetails->employ_id}}</button></a></td>
                    <td>{{$orderDetails->employ_name}}</td>
                    <td>{{$orderDetails->email}}</td>
                    <td>{{$orderDetails->mobile}}</td>
					<td>{{$orderDetails->date_time}}</td>
					
					
					<td> 
						<div class="form-group">
							<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input"<?php if($orderDetails->status =='1'){echo 'checked';} ?> id="status<?php echo $orderDetails->id;?>">
							<label class="custom-control-label" for="status<?php echo $orderDetails->id;?>"></label>
							</div>
						</div>
					</td>
					
					<input type="hidden" id="statusval<?php echo $orderDetails->id;?>" value="<?php echo $orderDetails->status; ?>">
                    <input type="hidden" id="school_id<?php echo $orderDetails->id;?>" value="<?php echo $orderDetails->id; ?>">
                    
					
					
					
                     <td>
                         
						 <a class="btn btn-info btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-edit-school<?php echo $orderDetails->id; ?>">
                              <i class="fas fa-edit">
                              </i>
                              
                          </a>
                         
                          <!--<a class="btn btn-danger btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-delete<?php echo $orderDetails->id; ?>">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a> -->
                      </td>
                  </tr>
				  
				  
				  <div class="modal fade" id="modal-delete<?php echo $orderDetails->id; ?>">
        <div class="modal-dialog ">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete this item ?</p>
              <p style="line-height:1px;">You can't undo this action.</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" style="position:relative;left:284px;width:68px;" data-dismiss="modal">No</button>
              <a href="{{url('employ-delete/'.$orderDetails->id)}}"><button type="button" class="btn btn-primary" style="width:104px;">Yes</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
				  
				  
				  
				   <div class="modal fade" id="modal-edit-school<?php echo $orderDetails->id; ?>">
		   <form action="{{url('post-update-employ')}}" method="post">
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
                    <input type="text" name="employ_name" maxlength = "50" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->employ_name}}">
                    <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->id}}">
                  </div>
              </div>
			  @csrf
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" maxlength = "50" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->email}}">
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="mobile" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength = "10" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->mobile}}">
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" maxlength = "100" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->address}}">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" maxlength = "100" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->city}}" required>
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" name="state" maxlength = "100" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->state}}" required>
                  </div>
              </div>
			  
			  
			  
			  
			  
			  
			 <!-- <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Access Provide</label>
                  </div>
              </div>
			  
			  <div class="col-sm-6">
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
			  
			  -->
			  
			  <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login Credentials</label>
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" disabled class="form-control" name="username2"  value="{{$orderDetails->username}}">
                    <input type="hidden" class="form-control" maxlength = "50" name="username"  value="{{$orderDetails->username}}">
					
				  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input id="passwordInput2" name="password" maxlength = "50" type="text" name="password" class="form-control" value="{{$orderDetails->password}}">
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
              <button type="submit"  class="btn btn-primary">Update</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  </form>
      </div>
				  
				  
				  <script>
					$(document).ready(function(){
					$("#status<?php echo $orderDetails->id;?>").change(function(){
						
						var status = $('#statusval<?php echo $orderDetails->id;?>').val();
						var school_id = $('#school_id<?php echo $orderDetails->id;?>').val();
					
						
					$.ajax({
					url:'{{url("change-employ-status")}}',
					method:'POST',
					data:{status:status,school_id:school_id,'_token':"{{csrf_token()}}"},
					success:function(data){
						
						$('#statusval<?php echo $orderDetails->id;?>').val(data);
						
					//alert(data);
					//$('#child_id').html(data);
					}
					});
			
					});
					});
					</script>
				  
				  
				  @endforeach	
				  
				 
				  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
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


	  
	  
	   <div class="modal fade" id="modal-add-school">
	   <form action="{{url('post-add-employ')}}" method="post">
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
                    <input type="text" name="employ_name" maxlength = "50" class="form-control" id="exampleInputEmail1" placeholder="Employ Name" required>
                  </div>
              </div>
			  @csrf
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" maxlength = "50" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                  </div>
              </div>
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="mobile" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength = "10" class="form-control" placeholder="989855666" required>
                  </div>
              </div>
			  
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" maxlength = "100" class="form-control" id="exampleInputEmail1" placeholder="Address" required>
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" maxlength = "100" class="form-control" id="exampleInputEmail1" placeholder="City" required>
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" name="state" maxlength = "100" class="form-control" id="exampleInputEmail1" placeholder="State" required>
                  </div>
              </div>
			  
			  <!--<div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Access Provide</label>
                  </div>
              </div>
			  
			  <div class="col-sm-6">
                     
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
					
					-->
			  
			  
			  
			  <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login Credentials</label>
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" maxlength = "50" name="username" id="login_username" placeholder="Username" required>
					<p id="usernameerror" style="display:none;color:red">User Name Already Exist</p>
					<p id="usernameavail" style="display:none;color:green">User Name Available</p>

				  </div>
              </div>
			  
			  
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" id="passwordInput"  name="password" maxlength = "50" class="form-control" value="" required>
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
              <button type="submit"  class="btn btn-primary">Submit</button>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  </form>
      </div>
	  
	  
	  
	 
	  
	  
	  
	  <script>
			$(document).ready(function(){
			$("#login_username").keyup(function(){
			var login_username = $('#login_username').val();
			//alert(login_username);
			//exit();
			$.ajax({
			url:'{{url("compare-employ")}}',
			method:'POST',
			data:{login_username:login_username,'_token':"{{csrf_token()}}"},
			success:function(data){
				if(data == 'Exist'){
				$('#login_username').val('');	
				$('#usernameerror').css('display', 'block');
				$('#usernameavail').css('display', 'none');				
				}
				if(data == 'Available'){
				
				$('#usernameavail').css('display', 'block');
				$('#usernameerror').css('display', 'none');				
				}
				
				
			
			//$('#child_id').html(data);
			}
			});

			});

			});
		</script>

		
		
		<script>
		$(document).ready(function(){
		$("#generatePassword").click(function(){
			var passwordInput = $('#passwordInput').val();
			$.ajax({
			url:'{{url("generate-password")}}',
			method:'POST',
			data:{passwordInput:passwordInput,'_token':"{{csrf_token()}}"},
			success:function(data){
				//alert(data);
				$('#passwordInput').val(data);
			
			//$('#child_id').html(data);
			}
			});
			
		 
		
		});
		});
		</script>
		
		

  @endsection