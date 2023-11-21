@extends('admin.layout.layout')
@section('content')

  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schools</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Schools</li>
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
                    <th>City</th>
					<th>Registration Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($school as $key => $orderDetails)
                  <tr>
                    <td><a href="javascript:void()"><button type="button" class="btn  bg-gradient-primary">{{$orderDetails->school_id}}</button></a></td>
                    <td>{{$orderDetails->school_name}}</td>
                    <td>{{$orderDetails->city}}</td>
                    
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
                         
						 <a class="btn btn-info btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-edit-school<?php echo $orderDetails->id;?>">
                              <i class="fas fa-edit">
                              </i>
                              
                          </a>
                         
                          <a class="btn btn-danger btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-delete-school<?php echo $orderDetails->id;?>">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>
                      </td>
                  </tr>
				  
				  
	  <div class="modal fade" id="modal-delete-school<?php echo $orderDetails->id;?>">
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
              <a href="{{url('school-delete/'.$orderDetails->id)}}"><button type="button" class="btn btn-primary" style="width:104px;">Yes</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
				  
			
	   <div class="modal fade" id="modal-edit-school<?php echo $orderDetails->id;?>">
        <form action="{{url('post-update-school')}}" method="post" >
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
                    <input type="text" class="form-control" name="school_name" id="exampleInputEmail1" value="<?php echo $orderDetails->school_name;?>" >
                    <input type="hidden" class="form-control" name="id" maxlength = "50"  value="<?php echo $orderDetails->id;?>" >
                  </div>
              </div>
			  
			  @csrf
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" maxlength = "100" id="exampleInputEmail1" value="<?php echo $orderDetails->address;?>">
                  </div>
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" name="city" maxlength = "20" id="exampleInputEmail1" value="<?php echo $orderDetails->city;?>">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" name="state" maxlength = "20" id="exampleInputEmail1" value="<?php echo $orderDetails->state;?>">
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pincode</label>
                    <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  name="pincode" id="exampleInputEmail1" maxlength = "6" value="<?php echo $orderDetails->pincode;?>">
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
                    <input type="text" class="form-control" disabled name="username2" value="<?php echo $orderDetails->username;?>">
                    <input type="hidden" class="form-control" name="username" value="<?php echo $orderDetails->username;?>">

				  </div>
              </div>
			  
			  
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input id="passwordupdate" type="text" name="password" class="form-control" value="<?php echo $orderDetails->password;?>">
                  </div>
              </div>
			  
			  <div class="col-md-6">
                <div class="form-group">
                  </div>
              </div>
			  
			   <div class="col-md-6">
                <div class="form-group">
                    <a href="javascript:void()"><p id="generatePasswordUpdate">Generate Password</p></a>
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
					url:'{{url("change-status")}}',
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
                    <th>School ID</th>
                    <th>Name</th>
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


	  
	  <form action="{{url('post-add-school')}}" method="post" name="formfill" id="form_id" onsubmit="return validateForm()">
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
                    <input type="text" class="form-control" maxlength = "50" name="school_name" id="exampleInputEmail1" placeholder="School Name" required>
                  </div>
              </div>
			  
			  @csrf
			   <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" maxlength = "50" name="address" id="exampleInputEmail1" placeholder="Address" required>
                  </div>
              </div>
			  
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" maxlength = "20" name="city" id="exampleInputEmail1" placeholder="City" required>
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" name="state" maxlength = "20" id="exampleInputEmail1" placeholder="State" required>
                  </div>
              </div>
			  
			  <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Pincode</label>
                    <input type="text" class="form-control" name="pincode" oninput="this.value = this.value.replace(/[^0-9-+]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength = "6" placeholder="Pincode" required>
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
                    <input type="text" maxlength = "50" class="form-control" name="username" id="login_username" placeholder="Username" required>
					<p id="usernameerror" maxlength = "20" style="display:none;color:red">User Name Already Exist</p>
					<p id="usernameavail" style="display:none;color:green">User Name Available</p>

				  </div>
              </div>
			  
			  
			  
			  
			  <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input id="passwordInput" type="text" name="password" class="form-control" value="" required>
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
      </div>
	  
	  </form>
	  
	  
	  
		<script>
		$(document).ready(function(){
		$("#generatePassword").click(function(){
			var passwordInput = $('#passwordInput').val();
			$.ajax({
			url:'{{url("generate-password")}}',
			method:'POST',
			data:{passwordInput:passwordInput,'_token':"{{csrf_token()}}"},
			success:function(data){
				$('#passwordInput').val(data);
			
			//$('#child_id').html(data);
			}
			});
			
		 
		
		});
		});
		</script>
		
		<script>
		$(document).ready(function(){
		$("#generatePasswordUpdate").click(function(){
			var passwordInput = $('#passwordupdate').val();
			$.ajax({
			url:'{{url("generate-password")}}',
			method:'POST',
			data:{passwordInput:passwordInput,'_token':"{{csrf_token()}}"},
			success:function(data){
				$('#passwordupdate').val(data);
			
			//$('#child_id').html(data);
			}
			});
		  });
		});
		</script>
		
		
		
		
		
		
		
		
		
		
		<script>
			$(document).ready(function(){
			$("#login_username").keyup(function(){
			var login_username = $('#login_username').val();
			//alert(login_username);
			//exit();
			$.ajax({
			url:'{{url("compare-username")}}',
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
			
			var login_username = $('#login_username').val();
			if(login_username == ''){
				
				$('#usernameavail').css('display', 'none');
				$('#usernameerror').css('display', 'none');	
			}
			
			});

			
		</script>
		
		
		
		
		
		
  @endsection