@extends('layouts.master')
@section('title', 'Add Mobilizer')
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
                <h4 class="text-center fw-bold">Add Mobilizer</h4><br>
        <form action="{{ route('create_mobilizer_form') }}" method="post">
            @csrf
            <div class="row">  
                @if (session('alert_status'))
                    <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                @endif      
                @if ($errors->any())
                        <div class="alert alert-danger">{{$errors->first()}}</div>
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
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="centre_id" id="" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Centre Name</option>
                        @foreach($get_centre as $name)
                            <option value="{{ $name->id }}">{{ $name->centre_name }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Mobilizer Code</label><br>
                    <input name ="mob_code" type="text" class="form-control" placeholder="Enter Mobilizer Code">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Name</label><br>
                    <input name ="name" type="text" class="form-control" placeholder="Enter Full Name">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" class="form-control" style="background-color:white;">
                        <option value="Not Selected">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Email</label><br>
                    <input name ="email" type="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Contact</label><br>
                    <input name ="contact_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter Contact No." class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">State</label><br>
                    <select name="state_id" id="state_id" class="form-control"
                        style="background-color:white;">
                        <option value="Not Selected">Select State</option>
                        @foreach ($get_state as $state)
                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">District</label><br>
                    <select name="district_id" id="district_id" class="form-control" required
                        style="background-color:white;">
                        <option value="Not Selected">Select District</option>
                        @foreach ($get_district as $dist)
                            <option value="{{ $dist->id }}">{{ $dist->district_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Address</label><br>
                    <textarea  name ="address"placeholder="Enter Complete Address"  style="font-size:14px; width:100%; border-radius: 4px; border:1px solid #dee2e6;"></textarea>
                </div>
                 
              </div><br>     
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>              
            </div> 
            </form>
          </div>
        </div>
    </div>
</div>

@endsection