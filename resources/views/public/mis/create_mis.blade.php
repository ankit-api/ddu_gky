@extends('layouts.master')
@section('title', 'Add MIS')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
              <div class="col-sm-4 ml-2 mb-4">
                    <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                        <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic6">User Manager</a></li>
                            <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">MIS</a></li>
                            <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('mis_form')}}" ><b>Add MIS</b></a>
                        </li>
                    </ol>
                </div> 
                <div class="container col-sm-12 mx-auto" >
                  <h3 class="text-center fw-bold">Add MIS</h3><br>
                  <form action="{{ route('create_mis') }}" method="post" enctype="multipart/form-data">
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
                      <div class="col-md-4">
                        <label for="" class="m-2">Project ID/Sanctioned Order No.</label><br>
                        <select name="project_id" id="" class="form-control" style="background-color:white;">
                          <option value="Not Selected">Select Sanctioned Order No.</option>
                            @foreach($get_project as $project)
                                <option value="{{ $project->id }}">{{ $project->sanction_order_no }}</option>
                            @endforeach
                        </select> 
                      </div>  
                      <div class="col-md-4">
                        <label for="" class="m-2">MIS Code/Unique ID <span class="text-danger" style="display:none;" id="code_exist">(MIS Code Already Exist)</span></label><br>
                        <input name="mis_code" id="mis_code" type="text" placeholder="Enter MIS Code" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="" class="m-2">MIS Type</label><br>
                        <select name="mis_type" class="form-control" id="mis_type" style="background-color:white;">
                          <option value="mis_head">MIS Head</option>
                          <option value="mis_executive">MIS Executive</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                          <label for="" class="m-2">Name of MIS</label><br>
                          <input name ="name" type="text" placeholder="Enter MIS Name" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="" class="m-2">MIS Email</label><br>
                        <input name ="email" type="email" placeholder="Enter Email" class="form-control">
                      </div> 
                      <div class="col-md-4">
                          <label for="" class="m-2">Contact No.</label><br>
                          <input name ="contact_no" type="text"  maxlength="10" placeholder="Enter Contact No." class="number_validation form-control">
                      </div> 
                      <div class="col-md-12">
                          <label for="" class="m-2">Address of MIS</label><br>
                          <textarea name ="address"  placeholder="Enter Full Address Of MIS" rows="3" style="font-size:14px; width:100%; border-radius: 4px; border:1px solid #dee2e6; padding-left:10px;"></textarea>
                      </div> 
                    </div><br>     
                    <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text" id="mis_submit">
                              <i class="ti-upload btn-icon-prepend"></i>
                              Submit
                    </button>   
                  </form>           
                </div> 

              </div>
            </div>
          </div> 
        </div>
         

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $("#mis_code").keyup(function () {
        var mis_code = $('#mis_code').val();
        $.ajax({
            type: "POST",
            url: "{{url('mis_check_duplicate')}}",
            data: { mis_code : mis_code, _token: '{{csrf_token()}}' },
            dataType: 'json',
            success: function (data) {
                if (data > 0) {
                    $('#code_exist').css('display','');
                    $('#mis_submit').attr('disabled','disabled');
                } else {
                    $('#code_exist').css('display','none');
                    $('#mis_submit').removeAttr('disabled');
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