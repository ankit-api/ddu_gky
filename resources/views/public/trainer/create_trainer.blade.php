@extends('layouts.master')
@section('title', 'Add Trainer')
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
        <div class="col-sm-5 ml-2 mb-4">
            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic6">User Manager</a></li>
                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">Trainer</a></li>
                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('trainer_form')}}" ><b>Add Trainer</b></a>
                </li>
            </ol>
        </div> 
                <h4 class="text-center fw-bold">SF 5.1E2: Trainers’ profile</h4><br>
                <form action="{{ route('create_trainer') }}" method="post">
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
                    <label for="" class="m-2">Name PIA</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select PIA</option>
                    @foreach($get_pia as $pia)
                        <option value="{{ $pia->id }}">{{ $pia->pia_name }}</option>
                    @endforeach
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Project ID/Sanctioned Order No.</label><br>
                    <select name="project_name" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Sanctioned Order No.</option>
                    @foreach($get_project as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Training Centre</label><br>
                    <select name="centre_name" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Training Centre</option>
                    @foreach($get_centre as $centre)
                        <option value="{{ $centre->id }}">{{ $centre->centre_name }}</option>
                    @endforeach
                    </select> 
                </div>   
            </div><br>
            <div class="row"> 
                <div class="col-md-4">
                    <label for="" class="m-2">Trainer Code <span class="text-danger" style="display:none;" id="code_exist">(Trainer Code Already Exist)</span></label><br>
                    <input type="text" name="trainer_code" id="trainer_code" class="form-control" required placeholder="Enter Trainer Code">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Training Type</label><br>
                    <select name="training_type" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Training Type</option>
                        <option value="primary">Primary</option>
                        <option value="secondary">Secondary</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Type of Engagement</label><br>
                    <select name="engagement_type" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Type of Engagement</option>
                        <option value="fulltime">Full-Time</option>
                        <option value="parttime">Part-Time</option>
                        <option value="weekends">Week-Ends</option>
                    </select> 
                </div>
            </div><br>  <br>
            <h5>Trainer’s profile</h5><hr>
            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Name</label><br>
                    <input type="text" name="name" class="form-control" required placeholder="Enter name">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Relation</label><br>
                    <select name="relation_name" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Relation</option>
                        <option value="father">Father</option>
                        <option value="mother">Mother</option>
                        <option value="husband">Husband</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Relative Name</label><br>
                    <input type="text" name="relative_name" class="form-control" required placeholder="Enter relative's name">
                </div>
                </div><br>
                <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">If Trainer, Domain(Course)</label><br>
                    <input type="text" name="domain" class="form-control"  placeholder="Enter ">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">If not the domain trainer or with additional skill</label><br>  
                    <input type="checkbox"  class="" id="" name="add_skill[]" value="computer skills">
                    <label class="mx-2"> Computer skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill[]" value="soft skills">
                    <label class="mx-2"> Soft skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill[]" value="english skills">
                    <label class="mx-2"> English skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill[]" value="others">
                    <label class="mx-2"> Others </label>
                </div>
            </div><br>
             <div class="row">            
             <div class="col-md-3">
                    <label for="" class="m-2">Email</label><br>
                  <input type="email" name="email" class="form-control" required placeholder="Enter Email">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Others</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Date of Birth</label><br>
                   <input type="date" name="dob"  required class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Adhaar no </label><br>
                  <input type="number" name="adhaar" min="12" class="form-control"  required placeholder="Enter adhaar no.">
                </div>
            </div><br>
            <div class="row">            
                <div class="col-md-4">
                <label for="" class="m-2">Category</label><br>
                    <select name="category" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Category Type</option>
                        <option value="gn">General</option>
                        <option value="sc">SC</option>
                        <option value="st">ST</option>
                        <option value="obc">OBC</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Physical Disability</label><br>
                    <select name="pwd" id="" class="form-control" style="background-color:white;">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Physical Disability Category</label><br>
                   <input type="text" name="pwd_type" class="form-control"  placeholder="Enter type of disability">
                </div>
                
            </div><br><br>
            <h5>Education Qualification</h5><hr> 
            <div class="row">            
                <div class="col-md-2">
                    <label class="m-2">Educational qualification</label>                    
                </div>
                <div class="col-md-2">
                    <label class="m-2">Qualification specify</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Board/University</label><br>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Subject</label><br>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Year of passing</label>
                </div>
                <div class="col-md-1">
                    <label class="m-2">% of marks</label>
                </div>
                <div class="col-md-1">
                <label class="m-2">Action</label>
                </div>
            </div>
            <div class="qualification-div" id="qualification-div">
            <div class="row" id="1">      
                <div class="col-md-2">
                    <select name="qualification[]" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Qualification Type</option>
                        <option value="10th">10th</option>
                        <option value="12th">12th</option>
                        <option value="graduation">Graduation</option>
                        <option value="post-graduation">Post Graduation</option>
                        <option value="other">Other qualification</option>
                    </select> 
                </div>
                <div class="col-md-2">
                    <input type="text" name="q_detail[]" class="form-control"  placeholder="Enter qualification detail">
                </div> 
                <div class="col-md-2">
                    <input type="text" name="university[]" class="form-control" required placeholder="Enter Board/University">
                </div>
                <div class="col-md-2">                    
                    <input type="text" name="subject[]" class="form-control"required  placeholder="Enter Subject">
                </div>
                <div class="col-md-2">                  
                    <input type="text" name="yop[]" class="form-control"style="padding: 8px;" required placeholder="Enter year of passing">
                </div>
                <div class="col-md-1">                  
                    <input type="text" name="percentage" style="padding: 8px;" class="form-control" required placeholder="Enter percentage">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-info text-white add_more1">Add More</button>
                </div>
                </div>
            </div><br>    
        

        <h5>Experience</h5><hr> 
        <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Sno.</th>
                            <th>From (month & Year)</th>
                            <th>To (month & Year)</th>
                            <th>Company name</th>
                            <th>Starting designation</th>
                            <th>Last designation</th>
                            <th>Last salary drawn</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="1">1</td>
                                <td><input type="date" name="from[]" id="" class="form-control" value=""  placeholder=""></td>
                                <td><input type="date" name="to[]" id="" class="form-control" value=""  placeholder=""></td>
                                <td><input type="text" name="c_name[]" id="" class="form-control" value=""  placeholder="Enter Company Name "></td>
                                <td><input type="text" name="s_desg[]" id="" class="form-control" value=""  placeholder="Enter Starting designation"></td>
                                <td><input type="text" name="l_desg[]" id="" class="form-control" value=""  placeholder="Enter Last designation"></td>
                                <td><input type="text" name="l_salary[]" id="" class="form-control" value=""  placeholder="Enter Last salary drawn"></td>
                                <td><button class="btn btn-info text-white add_more2">Add More</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <br><br>

        <h5>Other information (if any) </h5><hr> 
            <div class="row">            
                <div class="col-md-12">
                    <textarea name="other_info" cols="120" rows="4" placeholder="Comments.."></textarea>
                </div>
            </div><br>
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text" id="trainer_submit">
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
                
                    var no1 = 1;
                    $('.add_more1').click(function(e){
                    // var sno = $(this).parent().parent().attr('id');
                    e.preventDefault();
                    // sno = parseInt(sno)+1;
                    no1 = no1+1;
                    $('#qualification-div').append(' <div class="row" id="'+no1+'"><div class="col-md-2"> <select  id="" class="form-control" name="qualification[]" style="background-color:white;"><option value="10th">10th</option><option value="12th">12th</option> <option value="graduation">Graduation</option> <option value="post-graduation">Post Graduation</option><option value="other">Other qualification</option> </select> </div><div class="col-md-2">    <input type="text" class="form-control"  name="q_detail[]" placeholder="Enter qualification detail"></div><div class="col-md-2">    <input type="text" class="form-control"  name="university[]" placeholder="Enter Board/University"></div><div class="col-md-2"><input type="text" class="form-control" name="subject[]" placeholder="Enter Subject"></div><div class="col-md-2"><input type="text" name="yop[]" class="form-control"style="padding: 8px;"  placeholder="Enter year of passing"></div><div class="col-md-1"><input type="text" style="padding: 8px;" class="form-control" name="percentage"placeholder="Enter percentage"></div><div class="col-md-1"><button class="btn btn-danger text-white rem_data1" data-id="'+no1+'" name="remove1" data-target="tr">Remove</button></div>');

                   
                    $('.rem_data1').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });



               
                $('.add_more2').click(function(e){
                    e.preventDefault();
                    var sno = $('tbody tr:last-child td:first-child').html();
                    sno = parseInt(sno)+1;

                    e.preventDefault();
                    // sno = parseInt(sno)+1;
                    $('tbody').append('<tr><td id="'+sno+'">'+sno+'</td> <td><input type="date" name="from[]" id="" class="form-control" value=""  placeholder=""></td><td><input type="date" name="to[]" id="" class="form-control" value=""  placeholder=""></td><td><input type="text" name="c_name[]" id="" class="form-control" value=""  placeholder="Enter Company Name "></td><td><input type="text" name="s_desg[]" id="" class="form-control" value=""  placeholder="Enter Starting designation"></td><td><input type="text" name="l_desg[]" id="" class="form-control" value=""  placeholder="Enter Last designation"></td><td><input type="text" name="l_salary[]" id="" class="form-control" value=""  placeholder="Enter Last salary drawn"></td>  <td><button class="btn btn-danger text-white rem_data1" data-id="'+sno+'" name="remove1" data-target="tr">Remove</button></div></tr>');

                    
                    $('button[data-id='+sno+']').click(function(e){
                        e.preventDefault();
                        $('#'+sno).parent().remove();
                    });
                });

                $("#trainer_code").keyup(function () {
                    var trainer_code = $('#trainer_code').val();
                    $.ajax({
                        type: "POST",
                        url: "/trainer_check_duplicate",
                        data: { trainer_code : trainer_code, _token: '{{csrf_token()}}' },
                        dataType: 'json',
                        success: function (data) {
                            if (data > 0) {
                                $('#code_exist').css('display','');
                                $('#trainer_submit').attr('disabled','disabled');
                            } else {
                                $('#code_exist').css('display','none');
                                $('#trainer_submit').removeAttr('disabled');
                            }
                        },
                        error: function (data) {
                            console.log(data);
                        }
                    });
                });
                      
            });
    </script>