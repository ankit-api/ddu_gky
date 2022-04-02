@extends('layouts.master')
@section('title', 'Add Q-Team member')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
        <div class="container col-sm-12 mx-auto">
        <div class="col-sm-7 ml-2 mb-4">
            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;">
                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">User Manager</a></li>
                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">Quality Team Member </a></li>
                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('q_team_member_form')}}" ><b>Add Quality Team Member </b></a>
                </li>
            </ol>
        </div>     
                <h3 class="text-center fw-bold">Create Q-Team Member</h3><br>
        <form action="{{ route('create_qteam_member') }}" method="post">
            @csrf
            <div class="row">    
                @if (session('alert_status'))
                    <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                @endif      
                @if ($errors->any())
                    {{-- @foreach ($errors->all() as $error) --}}
                        <div class="alert alert-danger">{{$errors->first()}}</div>
                    {{-- @endforeach --}}
                @endif        
                <div class="col-md-6">
                    <label for="" class="m-2">Project ID/Sanctioned Order No.</label><br>
                    <select name="project_id" id="" class="form-control" style="background-color:white;">
                      <option value="Not Selected">Select Sanctioned Order No.</option>
                        @foreach($get_project as $project)
                            <option value="{{ $project->id }}">{{ $project->sanction_order_no }}</option>
                        @endforeach
                    </select> 
                  </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Q-Team Member Code <span class="text-danger" style="display:none;" id="code_exist">(Q-Team Member Code Already Exist)</span></label><br>
                    <input name ="q_code" id="qteam_code" type="text" required placeholder="Enter Q-Team Member Code" class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Full Name</label><br>
                    <input name ="name" type="text" required placeholder="Enter Full Name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" id="" class="form-control" required style="background-color:white;">
                        <option value="Not Selected">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Email</label><br>
                    <input name ="email" type="text" required placeholder="Enter Email" class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Contact</label><br>
                    <input name ="contact" type="text" required  maxlength="10" placeholder="Enter Contact No." class="number_validation form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Address</label><br>
                    <textarea name ="address"  required placeholder="Enter Complete Address" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;padding-left: 10px; font-size: 14px;"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Designation</label><br>
                    <select name="desig" id="" class="form-control" required style="background-color:white;">
                        <option value="Not Selected">Select Designation</option>
                        <option value="head">Q-Team Head</option>
                        <option value="member">Q-Team Member</option>
                    </select> 
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Reporting Office</label><br>
                    <input name ="reporting_off" type="text" required placeholder="Enter Reporting Office" class="form-control">
                </div> 
              </div><br>     
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text" id="qteam_submit">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>              
            </div> 
            </form>
          </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $("#qteam_code").keyup(function () {
        var qteam_code = $('#qteam_code').val();
        $.ajax({
            type: "POST",
            url: "/qteam_check_duplicate",
            data: { qteam_code : qteam_code, _token: '{{csrf_token()}}' },
            dataType: 'json',
            success: function (data) {
                if (data > 0) {
                    $('#code_exist').css('display','');
                    $('#qteam_submit').attr('disabled','disabled');
                } else {
                    $('#code_exist').css('display','none');
                    $('#qteam_submit').removeAttr('disabled');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });

    $(document).ready(function () {
            $('.number_validation').on('keyup', function () {
                if (/\D/g.test(this.value))
                 this.value = this.value.replace(/\D/g,'')
            });
    });
</script>

@endsection