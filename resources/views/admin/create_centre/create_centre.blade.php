@extends('layouts.master')
@section('title', 'Create Centre')
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
        <div class="col-sm-3 ml-2">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">Centre</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('centre_form')}}" ><b>Add Centre </b></a>
                                </li>
                            </ol>
                        </div>
                <h3 class="text-center fw-bold">Add New Centre</h3><br>
        <form action="{{ route('create_centre') }}" method="post">
            @csrf
            <div class="row">   
                @if (session('alert_status'))
                    <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                @endif      
                @if ($errors->any())
                        <div class="alert alert-danger">{{$errors->first()}}</div>
                @endif         
                <div class="col-md-4">
                    <label for="" class="m-2">Centre Code</label><br>
                    <input type="text" class="form-control" name="cntr_code" placeholder="Enter Centre Code">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Name of PIA</label><br>
                    @foreach ($pia as $pia)
                        <input type="hidden" name="pia_id" value="{{ $pia->getPia->id }}">
                        <input type="text" name="pia_names" value="{{ $pia->getPia->pia_name }}" readonly class="form-control">
                    @endforeach
                                     
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Sanction Order No.</label><br>
                    <select name="project_id" id="" class="form-control" style="background-color:white;">
                        @foreach($project_data as $project)
                            <option value="{{ $project->id }}">{{ $project->sanction_order_no }}</option>
                        @endforeach
                    </select> 
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Training Centre</label><br>
                    <input type="text" class="form-control" name="name_of_centre" placeholder="Enter Training Centre Name">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">State</label><br>
                    <select name="state_id" id="state_id" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select State Name</option>
                        @foreach($get_state as $state)
                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">District</label><br>
                    <select name="district_id" id="district_id" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select District Name</option>
                        {{-- @foreach($get_district as $district)
                            <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                        @endforeach --}}
                    </select> 
                </div>
            </div><br>
            <div class="row">       
                <div class="col-md-6">
                    <label for="" class="m-2">Address of Training Centre</label><br>
                    <textarea name="address"  cols="30" rows="3" placeholder="Enter Complete Address" style="font-size:14px; width:100%; border-radius: 4px; border:1px solid #dee2e6;"></textarea>
                </div>
            </div><br>                       
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>
              
            </div> 
          </div>
        </div>
      

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
<script>
    $(document).ready(function () {
            $('#state_id').on('change', function () {
                var idState = this.value;
                $("#district_id").html('');
                $.ajax({
                    url: "{{url('fetch_district')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district_id').html('<option value="">Select District</option>');
                        $.each(result, function (key, value) {
                            $("#district_id").append('<option value="' + value
                                .id + '">' + value.district_name + '</option>');
                        });
                    }
                });
            });
        });
</script> 
@endsection