@extends('layouts.master')
@section('title', 'Letter to SRLM')
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
                <h4 class="text-center fw-bold">SF 6.1A: Letter to SRLM seeking information on mobilization plan</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">Name of Project</label><br>
                    <select name="project_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Prakhar Softwares</option>
                    </select> 
                </div>

                <div class="col-md-6">
                    <label for="" class="m-2">Reference: Your letter No (or MoRD letter No.)      </label><input type="text" class="form-control" name="letter_no" id="" >  <label></labrl>dated<input type="date" class="form-control" name="date" id="" >	</label><br>                   
                </div>
            </div><br><br>
            <h5>As per reference cited above, we have been assigned a project to train rural youth in your state with the following district wise break up:</h5><hr> 
            <div class="row">            
                <div class="col-md-2">
                    <label class="m-2">Sno.</label>                    
                </div>
                <div class="col-md-2">
                    <label class="m-2">Name of the district</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Target</label><br>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Subject</label><br>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Year of passing</label>
                </div>
                <div class="col-md-1">
                    <label class="m-2">% of marks</label>
                </div>
                <div class="col-md-1">
                <label class="m-2">Action</label>
                </div>
            </div>
            <div class="qualification-div" id="qualification-div">
            <div class="row" id="1">      
                <div class="col-md-2">
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">10th</option>
                        <option value="">12th</option>
                        <option value="">Graduation</option>
                        <option value="">Post Graduation</option>
                        <option value="">Other qualification</option>
                    </select> 
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Enter qualification detail">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Enter Board/University">
                </div>
                <div class="col-md-2">                    
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-2">                  
                    <input type="text" class="form-control"style="padding: 8px;"  placeholder="Enter year of passing">
                </div>
                <div class="col-md-1">                  
                    <input type="text" style="padding: 8px;" class="form-control" placeholder="Enter percentage">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-info text-white add_more1">Add More</button>
                </div>
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