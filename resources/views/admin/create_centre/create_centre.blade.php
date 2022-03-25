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
                <h4 class="text-center fw-bold">Add New Centre</h4><br>
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
                    <label for="" class="m-2">Name of PIA</label><br>
                    <select name="pia_id" id="" class="form-control" style="background-color:white;">
                        @foreach($get_pia as $name)
                            <option value="{{ $name->id }}">{{ $name->pia_name }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Project</label><br>
                    <select name="project_id" id="" class="form-control" style="background-color:white;">
                        @foreach($project_data as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}( {{ $project->getState->state_name}} )</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Training Centre</label><br>
                    <input type="text" class="form-control" name="name_of_centre" placeholder="Enter Training Centre Name">
                </div>
            </div><br>
            <div class="row">            
                <div class="col-md-3">
                    <label for="" class="m-2">State</label><br>
                    <select name="state_id" id="state_id" class="form-control" style="background-color:white;">
                        @foreach($get_state as $state)
                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">District</label><br>
                    <select name="district_id" id="district_id" class="form-control" style="background-color:white;">
                        @foreach($get_district as $district)
                            <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Address of Training Centre</label><br>
                    <textarea name="address" class="form-control" cols="30" rows="10" placeholder="Enter Complete Address"></textarea>
                </div>
            </div><br>                       
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>
              
            </div> 
          </div>
        </div>
      
@endsection