@extends('layouts.master')
@section('title', 'Dashboard')

{{-- @section('sidebar')
@include('layouts.pia_sidebar')
@endsection --}}

@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
                <h2>PIA Dashboard Here</h2>
                <div class="row mt-3 mx-1">  
                  @if (session('alert_status'))
                      <h6 class="alert alert-success fw-bold fs-6">{{ session('alert_status') }}</h6>
                  @endif      
                  @if ($errors->any())
                          <div class="alert alert-danger fw-bold fs-6">{{$errors->first()}}</div>
                  @endif 
                </div>
               
              </div>
            </div>
          </div>
        </div>
        @endsection   
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
      <!-- main-panel ends -->
  
           
                  
                <!-- Main content -->
               
                <!-- Main content -->

          