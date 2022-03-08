@extends('layouts.master')
@section('title', 'Registration')
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
                <h4 class="text-center fw-bold">SF 6.1C: On field registration of candidates</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Candidates</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Village/GP/Block</label><br>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Date of mobilization</label><br>
                    <input type="date" class="form-control" name="" id="" >
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>            
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Date of Birth</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-4">
                        <label for="" class="m-2">Age</label><br>
                        <input type="number" class="form-control" name="" id="" placeholder="Enter Age">
                </div>                          
            </div><br>
          
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Category</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">General</option>
                        <option value="">SC</option>
                        <option value="">ST</option>
                        <option value="">OBC</option>
                    </select>            
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">PWD</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter PWD Type">
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Minority</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select>  
                </div>              
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Highest Education</label><br>
                    <input type="text" class="form-control" placeholder="Enter Highest Education">
                    <!-- <select name="" id="" class="form-control" style="background-color:white;">
                        <option value=""></option>
                        <option value="">SC</option>
                        <option value="">ST</option>
                        <option value="">OBC</option>
                    </select>             -->
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Contact</label><br>
                    <input type="number" class="form-control" name="" id="" placeholder="Enter Contact">
                </div>
                <div class="col-md-4">
                <label for="" class="m-2">Address</label><br>
                    <textarea name="" id="" class="form-control" placeholder="Enter Address"></textarea>  
                </div>                
            </div><br>
               <div class="row">
               <div class="col-md-6">
                <label for="" class="m-2">Referring Stakeholder</label><br>
                    <input type="text" class="form-control" placeholder="Enter Referring Stakeholder">  
                </div>   
               <div class="col-md-6">
                <label for="" class="m-2">Remarks</label><br>
                    <textarea name="" id="" class="form-control" cols="10" rows="10" placeholder="Referring Remarks"></textarea>  
                </div>   
               </div><br>
               <h5>Attachmnet Fields</h5>
               <hr>
               <div class="row">
               <div class="col-md-5">
                <label for="" class="m-2">Document Type</label><br>
                     <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Adhaar</option>
                        <option value="">Education</option>
                        <!-- <option value=""></option>
                        <option value="">OBC</option> -->
                    </select>      
                </div>   
               <div class="col-md-5">
                <label for="" class="m-2">Document</label><br>
                <input type="file" class="form-control " style="background-color:white;" >
               </div>
               <div class="col-md-2 mt-4 pt-2">
                  
               <button type="submit" class="text-light btn  btn-primary btn-icon-text">
                          <i class="ti-plus btn-icon-prepend"></i>
                          Add more
                </button>
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