@extends('layouts.master')
@section('title', 'Add Centre Incharge')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
        <div class="container col-sm-12 mx-auto">
                <h4 class="text-center fw-bold">Add Centre Incharge</h4><br>
        <form action="{{ route('create_centre_incharge') }}" method="post">
            @csrf
            <div class="row">  
                @if (session('alert_status'))
                    <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                @endif      
                @if ($errors->any())
                        <div class="alert alert-danger">{{$errors->first()}}</div>
                @endif   
                <div class="col-md-6">
                    <label for="" class="m-2">Centre Incharge Code</label><br>
                    <input name ="ci_code" type="text" class="form-control" placeholder="Enter Centre Incharge Code">
                </div>                
                <div class="col-md-6">
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="centre_id" id="" class="form-control" style="background-color:white;">
                        @foreach($get_centre as $name)
                            <option value="{{ $name->id }}">{{ $name->centre_name }}</option>
                        @endforeach
                    </select> 
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Name</label><br>
                    <input name ="name" type="text" class="form-control" placeholder="Enter Full Name">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="gender" class="form-control" style="background-color:white;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Email</label><br>
                    <input name ="email" type="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Contact</label><br>
                    <input name ="contact_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter Contact No." class="form-control">
                </div> 
                <div class="col-md-6">
                    <label for="" class="m-2">Address</label><br>
                    <input name ="address" type="text" class="form-control" placeholder="Enter Complete Address">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Qualification</label><br>
                   <textarea name="qualification" id="" cols="30" rows="10" class="form-control" placeholder="Enter Qualification"></textarea>
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