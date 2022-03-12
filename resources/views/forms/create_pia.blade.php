@extends('layouts.master')
@section('title', 'Add PIA')
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
                <h4 class="text-center fw-bold">Create PIA</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-12">
                    <label for="" class="m-2">Name of PIA</label><br>
                    <input name ="project_name" type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="" class="m-2">Address of PIA</label><br>
                    <input name ="project_name" type="text" class="form-control">
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