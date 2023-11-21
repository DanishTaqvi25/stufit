@extends('admin.layout.layout')
@section('content')

  <div class="content-wrapper">
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Class</li>
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
              <a href="javascript:void()" data-toggle="modal" data-target="#modal-add-school"><button type="button" class="btn  bg-gradient-primary btn-position">Add Class</button></a>
            </div>
			  
			  
			  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width:70%;">Class</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($class as $key => $orderDetails)
                  <tr>
                    <td>{{$orderDetails->std_class}}</td>
                    <td>{{$orderDetails->created_at}}</td>
                     <td>
                         
						 <a class="btn btn-info btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-edit-class<?php echo $orderDetails->id; ?>">
                              <i class="fas fa-edit">
                              </i>
                              
                          </a>
                         
                          <!--<a class="btn btn-danger btn-sm" href="javascript:void()" data-toggle="modal" data-target="#modal-delete-class<?php echo $orderDetails->id; ?>">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a> -->
                      </td>
                  </tr>
				  
				  
				  <div class="modal fade" id="modal-delete-class<?php echo $orderDetails->id; ?>">
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
              <a href="{{url('class-delete/'.$orderDetails->id)}}"><button type="button" class="btn btn-primary" style="width:104px;">Yes</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
				  
				  
				  
				   <div class="modal fade" id="modal-edit-class<?php echo $orderDetails->id; ?>">
			<form action="{{url('post-update-class')}}" method="post">
	   <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4  class="modal-title">Edit Class</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      
          <section class="content">
      
            <div class="row">
			
			
              <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class Name</label>
                    <input type="text" name="std_class" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->std_class}}">
                    <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="{{$orderDetails->id}}">
                  </div>
              </div>
			  @csrf
			  
			  
			 
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
				  
				  
				  @endforeach
				  
				 
				  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th style="width:70%;">Class</th>
					<th>Created</th>
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

	
	  
	  <form action="{{url('add-studentclass')}}" method="post">
	   <div class="modal fade" id="modal-add-school">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4  class="modal-title">Add Class</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
			  
      
           <section class="content">
      
            <div class="row">
			
			
              <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class Name</label>
                    <input type="text" name="std_class" class="form-control" id="exampleInputEmail1" placeholder="Class Name" required>
                  </div>
              </div>
			  @csrf
			  
			  
			 
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
			
		 $('#passwordInput').val('c#JrK#*)*21esdfOOnS');
		
		});
		});
		</script>

  @endsection