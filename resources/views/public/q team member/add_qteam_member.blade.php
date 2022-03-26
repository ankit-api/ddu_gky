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
                <h4 class="text-center fw-bold">Create Q-Team Member</h4><br>
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
                    <label for="" class="m-2">Q-Team Member Code</label><br>
                    <input name ="q_code" type="text" required placeholder="Enter Q-Team Member Code" class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Name</label><br>
                    <input name ="name" type="text" required placeholder="Enter Full Name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" id="" class="form-control" required style="background-color:white;">
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
                    <input name ="contact" type="text" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter Contact No." class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Address</label><br>
                    <input name ="address" type="text" required placeholder="Enter Complete Address" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Designation</label><br>
                    <select name="desig" id="" class="form-control" required style="background-color:white;">
                        <option value="head">Q-Team Head</option>
                        <option value="member">Q-Team Member</option>
                    </select> 
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Reporting Office</label><br>
                    <input name ="reporting_off" type="text" required placeholder="Enter Reporting Office" class="form-control">
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