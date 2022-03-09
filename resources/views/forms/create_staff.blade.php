@extends('layouts.master')
@section('title', 'Add Staff')
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
                <h4 class="text-center fw-bold">Add Staff</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Name PIA</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Prakhar Softwares</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Project Code</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Project 1</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Training Centre</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Centre 1</option>
                    </select> 
                </div>
            </div><br>
            <div class="row">            
                <div class="col-md-3">
                    <label for="" class="m-2">Name</label><br>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Relation</label><br>
                    <select name="relation_name" id="" class="form-control" style="background-color:white;">
                        <option value=" ">Father</option>
                        <option value=" ">Mother</option>
                        <option value=" ">Husband</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Relative Name</label><br>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">If Trainer, Domain(Course)</label><br>
                    <input type="text" class="form-control">
                </div>
            </div><br>
             <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">If not the domain trainer or with additional skill</label><br>  
                    <input type="checkbox"  class="" id="" name="add_skill" value="computer skills">
                    <label class="mx-2"> Computer skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill" value="soft skills">
                    <label class="mx-2"> Soft skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill" value="english skills">
                    <label class="mx-2"> English skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill" value="others">
                    <label class="mx-2"> Others </label>
                </div>
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
                   <input type="date" class="form-control">
                </div>
            </div><br>
            <div class="row">            
                <div class="col-md-3">
                <label for="" class="m-2">Category</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">General</option>
                        <option value="">SC</option>
                        <option value="">ST</option>
                        <option value="">OBC</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Physical Disability</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Physical Disability Category</label><br>
                   <textarea class="form-control"></textarea>
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Adhaar no </label><br>
                  <input type="text" class="form-control">
                </div>
            </div><br><br>
            <h5>Education Qualification</h5></hr> 
            <div class="row">            
                <div class="col-md-2">
                    <label class="m-2">Educational qualification</label>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select> 
                </div>
                <div class="col-md-2">
                    <label class="m-2">Board/University</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Subject</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Year of passing</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">% of marks</label>
                </div>
                <div class="col-md-2">
                </div>
            </div>
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>
              
            </div> 
          </div>
        </div>
        
@endsection