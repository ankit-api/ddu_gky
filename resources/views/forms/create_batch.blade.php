@extends('layouts.master')
@section('title', 'Create Batch')
@section('admin_dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
            <div class="container col-sm-12">
                <h4 class="text-center fw-bold">SF 6.3A1: Batch details</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Nature of training</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Full-time</option>
                        <option value="">Part-time</option>
                        <option value="">Week-ends</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Class Duration per day</label><br>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Date of mobilization</label><br>
                    <input type="date" class="form-control" name="" id="" >
                </div>
            </div>
            <div class="row"> 
            <div class="col-md-6">
                    <label for="" class="m-2">Batch Start Date</label><br>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Batch End Date</label><br>
                    <input type="date" class="form-control" name="" id="" >
                </div>
            </div> <br>
          
            <h5>Trainer Detail</h5>
               <hr>
               <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Trainer</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Trainer 1</option>
                        <option value="">Trainer 2</option>
                        <option value="">Trainer 3</option>
                    </select>            
                </div>
                <div class="col-md-3">
                        <label for="" class="m-2">Trainer Name</label><br>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Age">
                </div>  
                <div class="col-md-3">
                    <label for="" class="m-2">Nature of trainer</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Primary</option>
                        <option value="">Secondary</option>
                    </select> 
                </div>       
                <div class="col-md-3">
                    <label for="" class="m-2">Type of Engagement</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Full time</option>
                        <option value="">Part time</option>
                    </select>  
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