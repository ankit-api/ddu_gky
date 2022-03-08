@extends('layouts.master')
@section('title', 'Registration')
@section('admin_dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel ">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
            <div class="container col-sm-12">
            <h4 class="text-center fw-bold">SF 6.2A3: Candidate application form</h4><br>
            <form action="" method="">
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Registration ID</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>       
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Name of Candidates</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Father/Husband's Name</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Father/Husband's Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Mother's Name</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Mother's Name">
                </div>
            </div><br>
            <h5>Trainee Profile</h5>
               <hr>
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Registration ID</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>       
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Name of Candidates</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Father/Husband's Name</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Father/Husband's Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Mother's Name</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Mother's Name">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>            
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Date of Birth</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                        <label for="" class="m-2">Age</label><br>
                        <input type="number" class="form-control" name="" id="" placeholder="Enter Age">
                </div>                 
                <div class="col-md-3">
                        <label for="" class="m-2">Individual Identity No.</label><br>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>               
            </div><br>
          
            <div class="row">
            <div class="col-md-3">
                        <label for="" class="m-2">Contact</label><br>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Alternative Contact</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>    
            <div class="col-md-3">
                        <label for="" class="m-2">Email</label><br>
                        <input type="email" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Alternative Email</label><br>
                    <input type="email" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>                
            </div>
            <div class="row">
                <div class="col-md-6">
                        <label for="" class="m-2">Present Address</label><br>
                        <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Permanent Address</label><br>
                    <textarea class="form-control" rows="5"></textarea>
                </div>                
            </div>
            </form>
               
              </div>
            </div> 
          </div>
        </div>
        @endsection   