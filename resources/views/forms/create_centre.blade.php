@extends('layouts.master')
@section('title', 'Create Centre')
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
                <h4 class="text-center fw-bold">Create Centre</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">Name of PIA</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Prakhar Softwares</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">State</label><br>
                    <input type="text" class="form-control" name="" id="" >
                </div>
            </div><br>
            <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">Name of Training Centre</label><br>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Address of Training Centre</label><br>
                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
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
@endsection