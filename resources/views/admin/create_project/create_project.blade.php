@extends('layouts.master')
@section('title', 'Create Project')
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
                  <h4 class="text-center fw-bold">Create Project</h4><br>
                  <form action="{{ route('create_project') }}" method="post">
                    @csrf
                      <div class="row">  
                        @if (session('alert_status'))
                            <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                        @endif      
                        @if ($errors->any())
                                <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif                  
                          <div class="col-md-6">
                              <label for="" class="m-2">Name of PIA</label><br>
                              <select name="pia_name" id="" class="form-control" required style="background-color:white;">
                                  @foreach($get_pia as $name)
                                    <option value="{{ $name->id }}">{{ $name->pia_name }}</option>
                                  @endforeach
                              </select> 
                          </div>
                          <div class="col-md-6">
                              <label for="" class="m-2">Name of Project</label><br>
                              <input type="text" class="form-control" name="proj_name" required ="Enter Project Name" >
                          </div>
                          <div class="col-md-4">
                            <label for="" class="m-2">State</label><br>
                            <select name="state_id" id="state_id" class="form-control" style="background-color:white;">
                                @foreach($get_state as $state)
                                    <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                @endforeach
                            </select> 
                          </div>
                          <div class="col-md-4">
                            <label for="" class="m-2">District</label><br>
                            <select name="district_id" id="district_id" class="form-control" required style="background-color:white;">
                                @foreach($get_district as $dist)
                                    <option value="{{ $dist->id }}">{{ $dist->district_name }}</option>
                                @endforeach
                            </select> 
                          </div>
                          <div class="col-md-4">
                            <label for="" class="m-2">Project Duration</label><br>
                            <input type="text" class="form-control" name="proj_duration" required placeholder="Enter Project Duration" >
                          </div>
                          <div class="col-md-12">
                            <label for="" class="m-2">Description</label><br>
                            <input type="text" class="form-control" name="proj_description" required placeholder="Enter Project Description">
                          </div>
                      </div><br>                       
                      <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                                <i class="ti-upload btn-icon-prepend"></i>
                                Submit
                      </button>
                  </form>
                </div> 
              </div>
            </div>
          </div>
        </div>
       
@endsection