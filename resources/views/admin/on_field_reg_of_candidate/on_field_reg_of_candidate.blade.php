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
                <div class="col-md-4">
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="" id="" name="gender" class="form-control" style="background-color:white;" required>
                        <option value="Not Selected">Select Centre Name</option>
                    @foreach($get_centre as $centre)
                        <option value="{{ $centre->id }}">{{ $centre->centre_name }}</option>
                    @endforeach
                    </select>  
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Registration Code/Panjee Code</label><br>
                    <input name ="reg_code" type="text" class="form-control" placeholder="Enter Registration Code">
                </div> 
                <div class="col-md-4">
                    <label for="" class="m-2">Counselling</label><br>
                    <select id="" name="counsel" class="form-control" style="background-color:white;" required>
                        <option value="Not Selected">Select Counselling Status</option>
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
                {{-- <div class="col-md-4">
                    <label for="" class="m-2">Village/GP/Block</label><br>
                    <textarea class="form-control" name="village" required></textarea>
                </div> --}}
                <div class="col-md-4">
                    <label for="" class="m-2">Village/GP/Block</label><br>
                    <select name="village" id="village" class="form-control" required
                        style="background-color:white;">
                        <option value="Not Selected">Select Block Name</option>
                        @foreach ($get_block as $block)
                            <option value="{{ $block->id }}">{{ $block->block_name }}</option>
                        @endforeach
                    </select>
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
                        <option value="Not Selected">Select Gender</option>
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
                        <option value="Not Selected">Select Category</option>
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
                        <option value="Not Selected">Select Minority</option>
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
                    <select name="ref" id="ref" class="form-control" required
                        style="background-color:white;">
                        <option value="Not Selected">Select Referring Stakeholder</option>
                        @foreach ($get_mobi as $mobi)
                            <option value="{{ $mobi->id }}">{{ $mobi->name }}</option>
                        @endforeach
                    </select> 
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
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th style="padding-right: 200px;">Document Category</th>
                                <th style="padding-right: 200px;">Document Type</th>
                                <th style="padding-right: 215px;">Document </th>
                                <th>Action</th>
                                </tr>
                        </thead>
                        <tbody id="more-div">
                            <tr>
                                <td>
                                    <select name="doc1_type[]" onchange="docType(this);" class="form-control doc1-dropdown"  data-id="1" style="background-color:white;" >
                                            <option value=""  selected >Select Document Category</option>
                                    @foreach($get_doc1_type as $doc1_type)
                                            <option value="{{ $doc1_type->id }}" >{{ $doc1_type->doc1_type_name }}</option>
                                    @endforeach
                                    </select>  
                                </td>
                                <td>
                                    <select name="doc2_type[]"  class="doc2-dropdown1 form-control"  style="background-color:white;" >              
                                    </select>  
                                </td>
                                <td >
                                    <input type="file" name="doc[]"  accept="application/pdf" class="form-control " style="background-color:white;"> 
                                </td>
                                <td>
                                    <button type="button" class="text-light btn  btn-primary btn-icon-text add_more" >
                                        Add more
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>    

            
       
           
            </div>
        </div>
                <br>
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

                    function docType(value){
                   
                        var id = $(value).data('id');  
                      
                        $.ajax({
                            url: "/getDoc2Type",
                            type: "POST",
                            data: {
                                id: value.value,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            success: function (result) {
                              
                                $('.doc2-dropdown'+id).html('<option value="" selected>Select Document Type</option>');
                                $.each(result.doc2_type_data, function (key, value) {
                                    $(".doc2-dropdown"+id).append('<option value="' + value
                                        .id + '">' + value.doc2_type_name + '</option>');
                                });
                                // $('#city-dd').html('<option value="">Select City</option>');
                            }
                        });
            
                    }  
          
             
            $(document).ready(function() {              
                
                    var no = 1;
                    $('.add_more').click(function(e){                     
                    e.preventDefault();
                    no = no+1;    
                   
                    
                     $('#more-div').append(`<tr  id="`+no+`"><td><select name="doc1_type[]" onchange="docType(this);" class="doc1-dropdown form-control " data-id="`+no+`"  style="background-color:white;" ><option value=""  selected >Select Document Category</option>@foreach($get_doc1_type as $doc1_type)<option value="{!!  json_encode($doc1_type["id"]) !!}" >{{ str_replace('"','',json_encode($doc1_type["doc1_type_name"])) }}</option>@endforeach</select>  </td><td><select name="doc2_type[]"  id="" class="form-control doc2-dropdown`+no+`"  style="background-color:white;" >  </select>  </td><td ><input type="file" name="doc[]"  accept="application/pdf" class="form-control " style="background-color:white;"> </td><td> <button type="button" class="btn btn-danger text-white rem_data" data-id="`+no+`" name="remove" data-target="tr">Remove</button></td> </tr>` );
                    

                    $('.rem_data').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });    
                });       
            });
        </script>

      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script type="text/javascript"></script>
      
      