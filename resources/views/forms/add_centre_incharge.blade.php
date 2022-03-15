@extends('layouts.master')
@section('title', 'Add Q-Team member')
@section('admin_dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
        <div class="container col-sm-12 mx-auto">
                <h4 class="text-center fw-bold">Create Centre Incharge</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Centre 1</option>
                        <option value="">Centre 2</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Name</label><br>
                    <input name ="" type="text" class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Email</label><br>
                    <input name ="email" type="email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Contact</label><br>
                    <input name ="" type="text" class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Address</label><br>
                    <input name ="" type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Qualification</label><br>
                   <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div> 
                 
              </div><br>     
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>              
            </div> 
            </form>
          </div>
        </div>
    </div>
</div>

@endsection