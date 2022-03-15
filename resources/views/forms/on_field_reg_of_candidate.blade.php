@extends('layouts.master')
@section('title', 'Registration')
@section('admin_dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
            <div class="container col-sm-12">
                <h4 class="text-center fw-bold">SF 6.1C: On field registration of candidates</h4><br>
        <form action="{{ route('post-candidate-register') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Candidates</label><br>
                    <input type="text" class="form-control" name="name" id="" placeholder="Enter Candidate Name" required>
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Village/GP/Block</label><br>
                    <textarea class="form-control" name="village" required></textarea>
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Date of mobilization</label><br>
                    <input type="date" class="form-control" name="dom" id="" required>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="" id="" name="gender" class="form-control" style="background-color:white;" required>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>            
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Date of Birth</label><br>
                    <input type="date" class="form-control" name="dob" id="" required>
                </div>
                <div class="col-md-4">
                        <label for="" class="m-2">Age</label><br>
                        <input type="number" class="form-control" name="age" id="" required placeholder="Enter Age" >
                </div>                          
            </div><br>
          
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Category</label><br>
                    <select name="category" id="" class="form-control"  style="background-color:white;" required>
                        <option value="gn">General</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                        <option value="ob">OBC</option>
                    </select>            
                </div>
                <div class="col-md-4">
                    <label for="pwd" class="m-2">PWD</label><br>
                    <input type="text" class="form-control" name="" id="" required placeholder="Enter PWD Type">
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Minority</label><br>
                    <select name="minority" id="" class="form-control"  style="background-color:white;" required>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>  
                </div>              
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Highest Education</label><br>
                    <input type="text" name="qualification" required class="form-control" placeholder="Enter Highest Education">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Contact</label><br>
                    <input type="number" class="form-control" required name="contact" id="" placeholder="Enter Contact">
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Address</label><br>
                    <textarea name="address" id="" class="form-control" required placeholder="Enter Address"></textarea>  
                </div>                
            </div><br>
               <div class="row">
               <div class="col-md-6">
                <label for="" class="m-2">Referring Stakeholder</label><br>
                    <input type="text" name="ref" class="form-control"required  placeholder="Enter Referring Stakeholder">  
                </div>   
               <div class="col-md-6">
                <label for="" class="m-2">Remarks</label><br>
                <textarea name="remark" id="" class="form-control"  required rows="10" placeholder="Referring Remarks"></textarea>  
                </div>   
               </div><br>
               <h5>Attachmnet Fields</h5>
               <hr>
               <div class="row">
               <div class="col-md-5">
                <label for="" class="m-2">Document Type</label><br>
               </div>
               <div class="col-md-5">
                <label for="" class="m-2">Document</label><br>
               </div>    
                </div>   
            
            <div class="more-div" id="more-div">
            <div class="row">
               <div class="col-md-5">
               <select name="doc_type[]" id="" class="form-control"  style="background-color:white;" required>
                        <option value="adhaar">Adhaar</option>
                        <option value="education">Education</option>
                        <!-- <option value=""></option>
                        <option value="">OBC</option> -->
                    </select>  
               </div>
               <div class="col-md-5">
                <input type="file" name="doc[]" required class="form-control " style="background-color:white;" >
               </div>
             
               <div class="col-md-2">                  
               <button type="button" class="text-light btn  btn-primary btn-icon-text add_more" >
                          <i class="ti-plus btn-icon-prepend"></i>
                          Add more
                </button>
               </div>
            </div>
            </div>
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>
              
            </div> 
          </div>
        </div>
        @endsection   


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                
                    var no = 1;
                    $('.add_more').click(function(e){
                     
                    e.preventDefault();
                  
                    // sno = parseInt(sno)+1;
                    no = no+1;
                    $('#more-div').append(' <div class="row" id="'+no+'"><div class="col-md-5">               <select name="doc_type[]" id=""  class="form-control" style="background-color:white;" required>  <option value="adhaar">Adhaar</option><option value="education">Education</option> </select>  </div>  <div class="col-md-5"><input type="file" name="doc[]" required class="form-control " style="background-color:white;" >  </div>  <div class="col-md-1"><button type="button" class="btn btn-danger text-white rem_data" data-id="'+no+'" name="remove" data-target="tr">Remove</button></div></div>');

                   
                    $('.rem_data').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });
            });
        </script>