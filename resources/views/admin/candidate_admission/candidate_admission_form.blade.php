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
            <h4 class="text-center fw-bold">SF 6.2A3: Candidate application form</h4><br>
            <form action="{{ route('post-candidate-admission')}}" method="post">
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
                    @foreach($batch as $batch)
                        <option value="{{ $batch->id }}">{{ $batch->batch_code }}</option>
                    @endforeach
                    </select> 
                </div>

                <div class="col-md-4">
                    <label for="" class="m-2">Trade</label><br>
                    <input name="trade"type="text" class="form-control">
                </div>
                
                <!-- <div class="col-md-4">
                    <label for="" class="m-2">Date of Registration</label><br>
                    <input type="date" class="form-control" name="" id="" > 
                </div>-->
                <div class="col-md-4">
                    <label for="" class="m-2">Training Duration</label><br>
                    <input type="text" name="duration" class="form-control" name="" id="" >
                </div>
            </div><br> <br>
            <h5>Trainee Profile</h5>
               <hr>
                        
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Registration ID</label><br>
                    <select name="reg_code" id="" class="form-control" style="background-color:white;">
                    @foreach($reg_can as $reg_can)
                        <option value="{{ $reg_can->id }}">{{ $reg_can->reg_code }}</option>
                    @endforeach
                    </select>       
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Name of Candidates</label><br>
                    <input type="text" class="form-control" name="name" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Father/Husband's Name</label><br>
                    <input type="text" class="form-control" name="father/husband_name" id="" placeholder="Enter Father/Husband's Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Mother's Name</label><br>
                    <input type="text" class="form-control" name="mother_name" id="" placeholder="Enter Mother's Name">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>            
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Date of Birth</label><br>
                    <input type="text" class="form-control" name="dob" id="" >
                </div>
                <div class="col-md-3">
                        <label for="" class="m-2">Age</label><br>
                        <input type="number" class="form-control" name="age" id="" placeholder="Enter Age">
                </div>                 
                <div class="col-md-3">
                        <label for="" class="m-2">Individual Identity No.</label><br>
                        <input type="text" class="form-control" name="identity_no" id="" placeholder="Enter Individual Identity No.">
                </div>               
            </div><br>
          
            <div class="row">
            <div class="col-md-3">
                        <label for="" class="m-2">Contact</label><br>
                        <input type="text" class="form-control" name="contact" id="" required placeholder="Enter Contact ">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Alternative Contact</label><br>
                    <input type="text" class="form-control" name="a_contact" id="" placeholder="Enter Alternative Contact">
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
                        <textarea name="pre_address" class="form-control" rows="3" required></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Permanent Address</label><br>
                    <textarea name="per_address" class="form-control" rows="5"></textarea>
                </div>                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2"Education Qualification></label><br>
                    <input type="text" name="qualification" class="form-control" placeholder="Enter Education Qualification ">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Religion</label><br>
                    <select name="religion" id="" class="form-control" style="background-color:white;">
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
                     <select name="category" id="" class="form-control" style="background-color:white;">
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
                    <select name="pwd" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">PWD type</label><br>
                    <input type="text" name="pwd_type" class="form-control">    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">Other vulnerable group</label><br>
                    <select name="other_vul_group" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Vulnerable group type</label><br>
                    <input type="text" name="vul_group_type" class="form-control" >    
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-3">
                    <label for="" class="m-2">SESS Number</label><br>
                    <input type="text" name="sess_no" class="form-control">    
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">BPL Ration Card No.</label><br>
                    <input type="text" name="bpl_no" class="form-control">    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">Job Card No.(MNREGA)</label><br>
                    <input type="text" name="mnrega_no" class="form-control">
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">RSBY Card No.#</label><br>
                    <input type="text" name="rsby_no" class="form-control" >    
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-6">
                    <label for="" class="m-2">Antyodaya Anna Yojana Ration Card No. </label><br>
                    <input type="text" name="aay_ration_no" class="form-control">
                </div>
                <div class="col-md-6">
                <label for="" class="m-2">Yearly Income(in Rs.) </label><br>
                    <input type="text" name="a_income" class="form-control" >    
                </div>                
            </div><br>
            <div class="row">
            <div class="col-md-3">
                    <label for="" class="m-2">Is candidate a family member of a SHG member? ## </label><br>
                    <select name="c_sgh" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select>
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Name of SHG </label><br><br>
                    <input type="text" name="c_sgh_name" class="form-control" >    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">SHG ID</label><br><br>
                    <input type="text" name="c_sgh_id" class="form-control">
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Name of SHG member</label><br><br>
                    <input type="text" name="sgh_member_name" class="form-control" >    
                </div>                
            </div><br><br>
            <h5>Family Head Details</h5>
               <hr>
            <div class="row">   
                <div class="col-md-3">
                <label for="" class="m-2">Name of the head of family</label><br><br>
                    <input type="text" name="h_name" class="form-control" >    
                </div>    
                <div class="col-md-3">
                    <label for="" class="m-2">Highest education of the head of family</label><br>
                    <input type="text" name="h_qualification" class="form-control">
                </div>
                <div class="col-md-3">
                <label for="" class="m-2">Yearly Income of the family(Rs.)</label><br>
                    <input type="text" name="fam_income" class="form-control" >    
                </div> 
                <div class="col-md-3">
                    <label for="" class="m-2">Number of member in the family </label><br>
                    <input type="number" name="fam_mem_no"class="form-control" > </option>
                    </select>
                </div>                
            </div><br><br>
            <h5>Family Member Details</h5><hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>S NO.</th>
                            <th>Name</th>
                            <th>Relation</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Maritial Status</th>
                            <th>Whether earning?</th>
                            <th>Source of Income/Occupation</th>
                            <th>Is SHG member</th>
                            <th>SHG ID</th>
                        </thead>
                        <tbody id="member-div">
                         
                        <tr>
                            <td><label>1</label></td>
                            <td> <input type="text" class="form-control" ></td>
                            <td>
                                <select name="relation[]" id="" class="form-control" style="background-color:white;">
                                    <option value="">Fatherr</option>
                                    <option value="">Mother</option>
                                    <option value="">Grand Father</option>
                                    <option value="">Grand Mother</option>                               
                                    <option value="">Husband</option>
                                    <option value="">Wife</option>
                                    <option value="">Brother</option>
                                    <option value="">Sister</option>
                                    <option value="">Son</option>
                                    <option value="">Daughter</option>
                                    <option value="">Brother-in-law</option>
                                    <option value="">Sister-in-law</option>
                                   
                                </select>
                            </td>
                            <td> <input type="number" class="form-control" ></td>
                            <td>
                                <select name="m_gender[]" id="" class="form-control" style="background-color:white;">
                                    <option value="">Female</option>
                                    <option value="">Male</option>
                                    <option value="">Others</option>
                                </select>
                            </td>
                            <td>
                                <select name="m_status[]" id="" class="form-control" style="background-color:white;">
                                    <option value="">Single</option>
                                    <option value="">Married</option>
                                    <option value="">Widowed</option>
                                    <option value="">Separated</option>
                                    <option value="">Divorced</option>
                                </select>
                            </td>
                            <td>
                                <select name="m_earn[]" id="" class="form-control" style="background-color:white;">
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                            </td>
                            <td> <input type="text" name="m_occupation" class="form-control" ></td>
                            <td>
                                <select name="m_sgh[]" id="" class="form-control" style="background-color:white;">
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                            </td>
                            <td> <input type="text" name="m_sgh_id[]"class="form-control" ></td>
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
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="m-2">Comments if any</label><br>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                </div>
            </div><br><br>
            <h5>Attachmnet Fields</h5>
               <hr>
               <div class="doc-div" id="doc-div">   
               <div class="row">
               <div class="col-md-5">
                <label for="" class="m-2">Document Type</label><br>
                     <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Adhaar</option>
                        <option value="">Education</option>
                    </select>      
                </div>   
               <div class="col-md-5">
                <label for="" class="m-2">Document</label><br>
                <input type="file" class="form-control " style="background-color:white;" >
               </div>
               <div class="col-md-2 mt-4 pt-2">
                  
               <button type="button" class="text-light btn  btn-primary btn-icon-text doc-more">
                          <i class="ti-plus btn-icon-prepend"></i>
                          Add more
                </button>
               </div>
</div>
            </form>
               
              </div><br>
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
                
                    var no1 = 1;
                    $('.doc-more').click(function(e){
            
                    e.preventDefault();
                  
                    // sno = parseInt(sno)+1;
                    no1 = no1+1;
                    $('#doc-div').append(' <div class="row" id="'+no1+'"><div class="col-md-5"><select name="doc_type[]" id=""  class="form-control" style="background-color:white;" required>  <option value="adhaar">Adhaar</option><option value="education">Education</option> </select>  </div>  <div class="col-md-5"><input type="file" name="doc[]" accept="application/pdf" required class="form-control " style="background-color:white;" >  </div>  <div class="col-md-1"><button type="button" class="btn btn-danger text-white rem_doc1" data-id="'+no1+'" name="remove" data-target="tr">Remove</button></div></div>');

                   
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
                    $('#member-div').append(' <tr><td><label>'+no2+'</label></td><td> <input type="text" class="form-control" ></td><td><select name="relation[]" id="" class="form-control" style="background-color:white;"><option value="">Fatherr</option><option value="">Mother</option><option value="">Grand Father</option><option value="">Grand Mother</option>   <option value="">Husband</option><option value="">Wife</option><option value="">Brother</option><option value="">Sister</option><option value="">Son</option><option value="">Daughter</option><option value="">Brother-in-law</option><option value="">Sister-in-law</option>   </select></td><td> <input type="number" class="form-control" ></td><td><select name="m_gender[]" id="" class="form-control" style="background-color:white;"><option value="">Female</option><option value="">Male</option><option value="">Others</option></select></td><td><select name="m_status[]" id="" class="form-control" style="background-color:white;"><option value="">Single</option><option value="">Married</option><option value="">Widowed</option><option value="">Separated</option><option value="">Divorced</option></select></td><td><select name="m_earn[]" id="" class="form-control" style="background-color:white;"><option value="">No</option><option value="">Yes</option></select></td><td> <input type="text" name="m_occupation" class="form-control" ></td><td><select name="m_sgh[]" id="" class="form-control" style="background-color:white;"><option value="">No</option><option value="">Yes</option></select></td><td> <input type="text" name="m_sgh_id[]"class="form-control" ></td><td><button type="button" class="btn btn-danger text-white rem_doc2" data-id="'+no2+'" name="remove" data-target="tr">Remove</button></td></tr>');

                   
                    $('.rem_doc2').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });

            });
        </script>