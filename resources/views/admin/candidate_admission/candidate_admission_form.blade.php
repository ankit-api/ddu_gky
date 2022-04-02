@extends('layouts.master')
@section('title', 'Admission')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel ">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
            <div class="container col-sm-12">
            <div class="col-sm-4 ml-2 mb-4">
                <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;">
                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                        <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic17" aria-expanded="false" aria-controls="ui-basic17">Admission</a></li>
                        <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('admission_list')}}" ><b>Admission List</b></a>
                    </li>
                </ol>
            </div>
            <h4 class="text-center fw-bold">SF 6.2A3: Candidate application form</h4><br>
            <form action="{{ route('post-candidate-admission')}}" method="post" enctype="multipart/form-data"> 
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
            <!-- <div class="col-md-4">
                    <label for="" class="m-2">Name of Project</label><br>
                    <select name="project" id="" class="form-control" style="background-color:white;">
                   
                    </select> 
                </div>   
            <div class="col-md-4">
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="centre" id="" class="form-control" style="background-color:white;">
                   
                    </select> 
                </div>           -->
                <div class="col-md-4">
                    <label for="" class="m-2">Batch Number</label><br>
                    <select name="batch" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Batch Number</option>
                    @foreach($batch as $batch)
                        <option value="{{ $batch->id }}">{{ $batch->batch_code }}</option>
                    @endforeach
                    </select> 
                </div>

                <div class="col-md-4">
                    <label for="" class="m-2">Trade</label><br>
                    <input name="trade" required type="text" placeholder="Enter Trade" class="form-control">
                </div>
                
                <!-- <div class="col-md-4">
                    <label for="" class="m-2">Date of Registration</label><br>
                    <input type="date" class="form-control" name="" id="" > 
                </div>-->
                <div class="col-md-4">
                    <label for="" class="m-2">Training Duration</label><br>
                    <input type="text" required name="duration" class="form-control" placeholder="Enter Training Duration" >
                </div>
            </div><br> <br>
            <h5>Trainee Profile</h5>
               <hr>
                        
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Registration ID</label><br>
                    <select name="reg_id" id="reg_id" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Registration ID</option>
                    @foreach($reg_can as $reg_can)
                        <option value="{{ $reg_can->id }}">{{ $reg_can->reg_code }}</option>
                    @endforeach
                    </select>       
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Name of Candidates</label><br>
                    <input type="text" required class="form-control" name="name" id="name_of_can" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Father/Husband's Name</label><br>
                    <input type="text" required class="form-control" name="father_husband_name" id="" placeholder="Enter Father/Husband's Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Mother's Name</label><br>
                    <input type="text" required class="form-control" name="mother_name" id="" placeholder="Enter Mother's Name">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" id="can_gender" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Others</option>
                    </select>            
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Date of Birth</label><br>
                    <input type="date" required class="form-control" name="dob" max="{{date("Y-m-d")}}" id="dob" >
                </div>
                <div class="col-md-3">
                        <label for="" class="m-2">Age</label><br>
                        <input type="number" required class="form-control" name="age" id="age" placeholder="Enter Age">
                </div>                 
                <div class="col-md-3">
                        <label for="" class="m-2">Individual Identity No.</label><br>
                        <input type="text" required class="form-control" name="identity_no" id="" placeholder="Enter Individual Identity No.">
                </div>               
            </div><br>
          
            <div class="row">
            <div class="col-md-3">
                        <label for="" class="m-2">Contact</label><br>
                        <input type="text" required class="form-control" name="contact" id="contact" required placeholder="Enter Contact ">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Alternative Contact</label><br>
                    <input type="text" class="form-control" name="a_contact" id="a_contact" placeholder="Enter Alternative Contact">
                </div>    
            <div class="col-md-3">
                        <label for="" class="m-2">Email</label><br>
                        <input type="email" class="form-control" name="email" id="" placeholder="Enter Email">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Alternative Email</label><br>
                    <input type="email" class="form-control" name="a_email" id="" placeholder="Enter Alternative Email">
                </div>                
            </div>
            <div class="row">
                <div class="col-md-6">
                        <label for="" class="m-2">Present Address</label><br>
                       
                        <textarea name="pre_address" required rows="3" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;padding-left: 15px; font-size: 15px;"> </textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Permanent Address</label><br>
                    <textarea name="per_address" rows="3" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;padding-left: 15px; font-size: 15px;"></textarea>
                </div>                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Education Qualification</label><br>
                    <input type="text" name="qualification" class="form-control" placeholder="Enter Education Qualification ">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Religion</label><br>
                    <select name="religion" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Religion</option>
                        <option value="hindu">Hindus</option>
                        <option value="muslim">Muslims</option>
                        <option value="christian">Christians</option>
                        <option value="sikh">Sikhs</option>
                        <option value="buddh">Buddhists</option>
                        <option value="jain">Jains</option>
                        <option value="sindhi">Sindhis</option>
                    </select> 
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Category</label><br>
                     <select name="category" id="category" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Category</option>
                        <option value="gn">General</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                        <option value="ob">OBC</option>
                        <option value="mn">Minority</option>
                    </select>        
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-3">
                    <label for="" class="m-2">PWD</label><br>
                    <select name="pwd" id="pwd" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select PWD</option>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">PWD type</label><br>
                    <input type="text" name="pwd_type" class="form-control" placeholder="Enter PWD Type">    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">Other vulnerable group</label><br>
                    <select name="other_vul_group" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Other Vulnerable Group</option>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Vulnerable group type</label><br>
                    <input type="text" name="vul_group_type" class="form-control" placeholder="Enter Vulnerable Group Type" >    
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-3">
                    <label for="" class="m-2">SESS Number</label><br>
                    <input type="text" name="sess_no" class="form-control" placeholder="Enter SESS Number">    
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">BPL Ration Card No.</label><br>
                    <input type="text" name="bpl_no" class="form-control" placeholder="Enter BPL Ration Card No.">    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">Job Card No.(MNREGA)</label><br>
                    <input type="text" name="mnrega_no" class="form-control" placeholder="Enter Job Card No.(MNREGA)">
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">RSBY Card No.#</label><br>
                    <input type="text" name="rsby_no" class="form-control" placeholder="Enter RSBY Card No.#" >    
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-6">
                    <label for="" class="m-2">Antyodaya Anna Yojana Ration Card No. </label><br>
                    <input type="text" name="aay_ration_no" class="form-control" placeholder="Enter Antyodaya Anna Yojana Ration Card No.">
                </div>
                <div class="col-md-6">
                <label for="" class="m-2">Yearly Income(in Rs.) </label><br>
                    <input type="text" name="a_income" class="form-control" placeholder="Enter Yearly Income(in Rs.)" >    
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-3">
                    <label for="" class="m-2">Is candidate a family member of a SHG member? ## </label><br>
                    <select name="c_shg" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Option</option>
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Name of SHG </label><br><br>
                    <input type="text" name="c_shg_name" class="form-control" placeholder="Enter Name of SHG" >    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">SHG ID</label><br><br>
                    <input type="text" name="c_shg_id" class="form-control" placeholder="Enter SHG ID">
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Name of SHG member</label><br><br>
                    <input type="text" name="shg_member_name" class="form-control" placeholder="Enter Name of SHG member" >    
                </div>                
            </div><br><br>
            <h5>Family Head Details</h5>
               <hr>
            <div class="row">   
                <div class="col-md-3">
                <label for="" class="m-2">Name of the head of family</label><br><br>
                    <input type="text" name="h_name" required class="form-control" placeholder="Name of the head of family" >    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">Highest education of the head of family</label><br>
                    <input type="text" name="h_qualification" required class="form-control" placeholder="Enter Highest education of the head of family">
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Yearly Income of the family(Rs.)</label><br>
                    <input type="text" name="fam_income" required class="form-control" placeholder="Enter Yearly Income of the family(Rs.)" >    
                </div> 
                <div class="col-md-3">
                    <label for="" class="m-2">Number of member in the family </label><br>
                    <input type="number" name="fam_mem_no" required class="form-control" placeholder="Enter Number of member in the family" > </option>
                    </select>
                </div>                
            </div><br><br>
            <h5>Family Member Details</h5><hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S NO.</th>
                                <th style="padding:0 90px;">Name </th></span>
                                <th style="padding:0 50px;">Relation</th>
                                <th style="padding:0 90px;">Age</th>
                                <th>Gender</th>
                                <th>Maritial Status</th>
                                <th>Whether earning?</th>
                                <th>Source of Income/Occupation</th>
                                <th>Is SHG member</th>
                                <th>SHG ID</th>
                            </tr>
                        </thead>
                        <tbody id="member-div">
                         
                        <tr>
                            <td><label>1</label></td>
                            <td  style="width:100px;"> <input type="text" name="m_name[]" class="form-control" placeholder="Enter member name"></td>
                            <td>
                                <select name="relation[]" id="" class="form-control" style="background-color:white;">
                                    <option value="father">Father</option>
                                    <option value="mother">Mother</option>
                                    <option value="grand-father">Grand Father</option>
                                    <option value="grand-mother">Grand Mother</option>                               
                                    <option value="husband">Husband</option>
                                    <option value="wife">Wife</option>
                                    <option value="brother">Brother</option>
                                    <option value="sister">Sister</option>
                                    <option value="son">Son</option>
                                    <option value="daughter">Daughter</option>
                                    <option value="brother-in-law">Brother-in-law</option>
                                    <option value="sister-in-law">Sister-in-law</option>
                                   
                                </select>
                            </td>
                            <td> <input type="number" name="m_age[]" placeholder="Enter age" class="form-control" ></td>
                            <td>
                                <select name="m_gender[]" id="" class="form-control" style="background-color:white;">
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                    <option value="other">Others</option>
                                </select>
                            </td>
                            <td>
                                <select name="m_status[]" id="" class="form-control" style="background-color:white;">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="separated">Separated</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                            </td>
                            <td>
                                <select name="m_earn[]" id="" class="form-control" style="background-color:white;">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </td>
                            <td> <input type="text" name="m_occupation[]" class="form-control" placeholder="Enter member occupation" ></td>
                            <td>
                                <select name="m_shg[]" id="" class="form-control" style="background-color:white;">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </td>
                            <td> <input type="text" name="m_shg_id[]" class="form-control" placeholder="Enter SHG Id"></td>
                            <td>
                            <button type="button" class="text-light btn  btn-info btn-icon-text member-more">
                                <!-- <i class="ti-plus btn-icon-prepend"></i> -->
                                    Add Member
                            </button>
                           
                            </td>
                        </tr>
                       
                        </tbody>
                    </table>
                </div>
            </div><br><br>
            <h5>Screening (To be filled by Officials)</h5><hr>
            <div class="row">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <label for="" class="m-2">Aptitude Test(Score)</label><br>
                        <input type="number" class="form-control"> 
                    </div>-->
                    <div class="col-md-6">
                        <label for="" class="m-2">Allocated Trade</label><br>
                        <input type="text" name="allocate_trade" class="form-control" placeholder="Enter Allocated Trade">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="" class="m-2">Comments if any</label><br>
                        <textarea rows="3" name="comment" placeholder="Enter Comments If Any" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;"></textarea>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="m-2">Attach Photo Document <span style="font-size: 14px;font-weight: 600;color: #ee1201;">(Photo size should be less than 512Kb)</span></label><br>
                    <input type="file" name="photo_doc" accept="image/png, image/gif, image/jpeg" class="form-control " style="background-color:white;" >
                </div>
            </div><br><br>
            <h5>Attachmnet Fields <span style="font-size: 14px;font-weight: 600;color: #ee1201;">(All Documents size should be less than 1MB)</span></h5>
               <hr>
          
               <div class="row">
                <div class="table-responsive" >
                    <table class="table ">
                        <thead>
                            <tr>
                                <th style="padding-right: 200px;">Document Category</th>
                                <th style="padding-right: 200px;">Document Type</th>
                                <th style="padding-right: 215px;">Document </th>
                                <th>Action</th>
                                </tr>
                        </thead>
                        <tbody id="doc-div">
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
                                    <input type="file" name="doc[]"  accept="application/pdf" required class="form-control " style="background-color:white;"> 
                                </td>
                                <td>
                                    <button type="button" class="text-light btn  btn-primary btn-icon-text doc-more" >
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
                    var no1 = 1;
                    $('.doc-more').click(function(e){
            
                    e.preventDefault();
                  
                    // sno = parseInt(sno)+1;
                    no1 = no1+1;
                    $('#doc-div').append(`<tr  id="`+no1+`"><td><select name="doc1_type[]" onchange="docType(this);" class="doc1-dropdown form-control " data-id="`+no1+`"  style="background-color:white;" ><option value=""  selected >Select Document Category</option>@foreach($get_doc1_type as $doc1_type)<option value="{!!  json_encode($doc1_type["id"]) !!}" >{{ str_replace('"','',json_encode($doc1_type["doc1_type_name"])) }}</option>@endforeach</select>  </td><td><select name="doc2_type[]"  id="" class="form-control doc2-dropdown`+no1+`"  style="background-color:white;" >  </select>  </td><td ><input type="file" name="doc[]"  accept="application/pdf" required class="form-control " style="background-color:white;"> </td><td> <button type="button" class="btn btn-danger text-white rem_doc1" data-id="`+no1+`" name="remove" data-target="tr">Remove</button></td> </tr>`);

                   
                    $('.rem_doc1').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });


                var no2 = 1;
                    $('.member-more').click(function(e){
                     
                    e.preventDefault();
                  
                    // sno = parseInt(sno)+1;
                    no2 = no2+1;
                    $('#member-div').append(' <tr><td><label>'+no2+'</label></td><td><td> <input type="text" name="m_name[]" placeholder="Enter member name" class="form-control" ></td><td><select name="relation[]" id="" class="form-control" style="background-color:white;"><option value="father">Father</option><option value="mother">Mother</option><option value="grand-father">Grand Father</option><option value="grand-mother">Grand Mother</option><option value="husband">Husband</option><option value="wife">Wife</option><option value="brother">Brother</option><option value="sister">Sister</option><option value="son">Son</option><option value="daughter">Daughter</option><option value="brother-in-law">Brother-in-law</option><option value="sister-in-law">Sister-in-law</option></select></td><td> <input type="number" name="m_age[]" class="form-control" ></td><td><select name="m_gender[]" id="" class="form-control" style="background-color:white;"><option value="female">Female</option><option value="male">Male</option><option value="other">Others</option></select></td><td><select name="m_status[]" id="" class="form-control" style="background-color:white;"><option value="single">Single</option><option value="married">Married</option><option value="widowed">Widowed</option><option value="separated">Separated</option><option value="divorced">Divorced</option></select></td><td><select name="m_earn[]" id="" class="form-control" style="background-color:white;"><option value="no">No</option><option value="yes">Yes</option></select></td><td> <input type="text" name="m_occupation[]" placeholder="Enter member occupation" > class="form-control" ></td><td><select name="m_shg[]" id="" class="form-control" style="background-color:white;"><option value="no">No</option><option value="yes">Yes</option></select></td><td> <input type="text" name="m_shg_id[]" placeholder="Enter SHG Id" class="form-control" ></td><td> <button type="button" class="btn btn-danger text-white rem_doc2" data-id="'+no2+'" name="remove" data-target="tr">Remove</button></td></tr>');

                   
                    $('.rem_doc2').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });


                $('#reg_id').on('change', function () {
                var reg_id = this.value;
                $.ajax({
                    url: "{{url('fetch_regdata')}}",
                    type: "POST",
                    data: {
                        reg_id: reg_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $("#name_of_can").val(result.name);
                        var can_dob = new Date(result.date_of_birth);
                        var dob_format = can_dob.toISOString().split( "T" );
                        $("#dob").val(dob_format[0]);
                        $("#age").val(result.age);
                        $("#contact").val(result.contact);
                        $("#can_gender").val(result.gender);
                        $("#category").val(result.category);
                        $("#pwd").val(result.pwd);
                    }
                });
            });

            });
        </script>