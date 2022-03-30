@extends('layouts.master')
@section('title', 'Add MIS')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
                <div class="container col-sm-12 mx-auto" >
                  <h4 class="text-center fw-bold">Add MIS</h4><br>
                  <form action="{{ route('create_mis') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">     
                      @if (session('alert_status'))
                          <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                      @endif      
                      @if ($errors->any())
                          {{-- @foreach ($errors->all() as $error) --}}
                              <div class="alert alert-danger">{{$errors->first()}}</div>
                          {{-- @endforeach --}}
                      @endif 
                      <div class="col-md-4">
                        <label for="" class="m-2">Project ID/Sanctioned Order No.</label><br>
                        <select name="project_id" id="" class="form-control" style="background-color:white;">
                          <option value="Not Selected">Select Sanctioned Order No.</option>
                            @foreach($get_project as $project)
                                <option value="{{ $project->id }}">{{ $project->sanction_order_no }}</option>
                            @endforeach
                        </select> 
                      </div>  
                      <div class="col-md-4">
                        <label for="" class="m-2">MIS Code/Unique ID</label><br>
                        <input name="mis_code" type="text" placeholder="Enter MIS Code" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="" class="m-2">MIS Type</label><br>
                        <select name="mis_type" class="form-control" id="mis_type" style="background-color:white;">
                          <option value="mis_head">MIS Head</option>
                          <option value="mis_executive">MIS Executive</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                          <label for="" class="m-2">Name of MIS</label><br>
                          <input name ="name" type="text" placeholder="Enter MIS Name" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label for="" class="m-2">MIS Email</label><br>
                        <input name ="email" type="email" placeholder="Enter Email" class="form-control">
                      </div> 
                      <div class="col-md-4">
                          <label for="" class="m-2">Contact No.</label><br>
                          <input name ="contact_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter Contact No." class="form-control">
                      </div> 
                      <div class="col-md-12">
                          <label for="" class="m-2">Address of MIS</label><br>
                          <input name ="address" type="text" placeholder="Enter Full Address Of MIS" class="form-control">
                      </div> 
                      <div class="col-md-6">
                        <label for="" class="m-2">Attach Image Document <span class="text-danger">(Image size should be less than 512Kb)</span></label><br>
                        <input type="file" name="image_doc" accept="image/png, image/gif, image/jpeg" class="form-control " style="background-color:white;" >
                      </div>
                      <div class="col-md-6">
                        <label for="" class="m-2">Attach Signature Document <span class="text-danger">(Image size should be less than 512Kb)</span></label><br>
                        <input type="file" name="sign_doc" accept="image/png, image/gif, image/jpeg" class="form-control" style="background-color:white;" >
                      </div>
                    </div><br>     
                    <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                              <i class="ti-upload btn-icon-prepend"></i>
                              Submit
                    </button>   
                  </form>           
                </div> 

              </div>
            </div>
          </div> 
        </div>
         
@endsection