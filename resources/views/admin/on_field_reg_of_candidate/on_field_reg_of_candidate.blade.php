@extends('layouts.master')
@section('title', 'Registration')
@section('dashboard')

     
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

            <div class="row">  
                        @if (session('alert_status'))
                            <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                        @endif      
                        @if ($errors->any())
                                <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif 
            </div>                  
            <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="" id="" name="gender" class="form-control" style="background-color:white;" required>
                    @foreach($get_centre as $centre)
                        <option value="{{ $centre->id }}">{{ $centre->centre_name }}</option>
                    @endforeach
                    </select>  
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Counselling</label><br>
                    <select id="" name="counsel" class="form-control" style="background-color:white;" required>
                        <option value="not done">Not Done</option>
                        <option value="done">Done</option>
                    </select>                  
                </div>
            </div>    
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
                    <select id="" name="gender" class="form-control" style="background-color:white;" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
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
                    <input type="text" class="form-control" name="pwd" id=""  placeholder="Enter PWD Type">
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Minority</label><br>
                    <select name="minority" id="" class="form-control"  required style="background-color:white;" >
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
                    <input type="number" class="form-control" required name="contact" id=""  placeholder="Enter Contact">
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Address</label><br>
                    <textarea name="address" id="" class="form-control" required placeholder="Enter Address"></textarea>  
                </div>                
            </div><br>
            <div class="row">
               <div class="col-md-6">
                <label for="" class="m-2">Referring Stakeholder</label><br>
                    <input type="text" name="ref" class="form-control"  placeholder="Enter Referring Stakeholder">  
                </div>   
               <div class="col-md-6">
                <label for="" class="m-2">Remarks</label><br>
                <textarea name="remark" id="" class="form-control"   rows="10" placeholder="Referring Remarks"></textarea>  
                </div>   
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="m-2">Attach Signature Document</label><br>
                    <input type="file" name="sign_doc" accept="image/png, image/gif, image/jpeg" class="form-control " style="background-color:white;" >
                </div>
            </div><br><br>
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
               <select name="doc_type[]" id="" class="form-control"  style="background-color:white;" >
               @foreach($get_doc_type as $doc_type)
                        <option value="{{ $doc_type->id }}">{{ $doc_type->doc_type_name }}</option>
                @endforeach
                </select>  
               </div>
               <div class="col-md-5">
                <input type="file" name="doc[]"  accept="application/pdf" class="form-control " style="background-color:white;" >
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
        </form>
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
                    $('#more-div').append(' <div class="row" id="'+no+'"><div class="col-md-5"><select name="doc_type[]" id=""  class="form-control" style="background-color:white;" required>   @foreach($get_doc_type as $doc_type)<option value="{{ $doc_type->id }}">{{ $doc_type->doc_type_name }}</option> @endforeach </select>  </div>  <div class="col-md-5"><input type="file" name="doc[]" accept="application/pdf" required class="form-control " style="background-color:white;" >  </div>  <div class="col-md-1"><button type="button" class="btn btn-danger text-white rem_data" data-id="'+no+'" name="remove" data-target="tr">Remove</button></div></div>');

                   
                    $('.rem_data').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });
            });
        </script>