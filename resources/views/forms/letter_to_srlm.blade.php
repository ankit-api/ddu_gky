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
                <div class="col-md-2">
                   <label class="m-2">Name of Project</label>
                </div>
                <div class="col-md-10">
                   <select name="project_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Prakhar Softwares</option>
                    </select> 
                </div>
            </div><br>
                <div class="row">   
                <div class="col-md-5">
                    <label for="" class="m-2"><span style="font-weight:bold;">Reference:</span> Your letter No (or MoRD letter No.)
                </label>
                </div>
                <div class="col-md-3">
                <input type="text" class="form-control" name="letter_no" id="" >
                </div>  
                <div class="col-md-1">
                <label>dated</label>
                </div>
                <div class="col-md-3">
                <input type="date" class="form-control" name="date" id="" >	<br>                   
                </div>
            </div><br><br>
            <h5>As per reference cited above, we have been assigned a project to train rural youth in your state with the following district wise break up:</h5><hr> 
            <div class="row">            
                <div class="col-md-1">
                    <label class="m-2">Sno.</label>                    
                </div>
                <div class="col-md-3">
                    <label class="m-2">Name of the district</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Target</label><br>
                </div>
                <div class="col-md-2">
                <label class="m-2">Action</label>
                </div>
            </div>
            <div class="addmore-div" id="addmore-div">
            <div class="row" id="1"> 
                <div class="col-md-1  pl-2">
                    <label style="margin-left:15px";>1</label>
                </div>     
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Enter name of the district">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Enter Target">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info text-white add_more">Add More</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                
                    var no = 1;
                    $('.add_more').click(function(e){
                    e.preventDefault();
                    no = no+1;
                     $('#addmore-div').append(' <div class="row" id="'+no+'"><div class="col-md-1"><label style="margin-left:15px";>'+no+'</label></div><div class="col-md-3">    <input type="text" class="form-control" placeholder="Enter name of the district"></div><div class="col-md-2"> <input type="text" class="form-control" placeholder="Enter Target"></div><div class="col-md-2"><button class="btn btn-danger text-white rem_data" data-id="'+no+'" name="remove1" data-target="tr">Remove</button></div>');

                   
                    $('.rem_data').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });
            });
    </script>