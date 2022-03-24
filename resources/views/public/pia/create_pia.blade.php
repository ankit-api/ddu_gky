@extends('layouts.master')
@section('title', 'Add PIA')
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
                  <h4 class="text-center fw-bold">Create PIA</h4><br>
                  <form action="{{ route('create_pia') }}" method="post">
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
                      <div class="col-md-6">
                          <label for="" class="m-2">Name of PIA</label><br>
                          <input name ="name" type="text" placeholder="Enter PIA Name" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="" class="m-2">Official Email</label><br>
                        <input name ="official_email" type="email" placeholder="Enter Official Email" class="form-control">
                      </div> 
                      <div class="col-md-6">
                          <label for="" class="m-2">Contact No.</label><br>
                          <input name ="contact_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter Contact No." class="form-control">
                      </div> 
                      <div class="col-md-6">
                        <label for="" class="m-2">Landline No.</label><br>
                        <input name ="landline_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="15" placeholder="Enter Landline No." class="form-control">
                      </div> 
                      <div class="col-md-12">
                          <label for="" class="m-2">Address of PIA</label><br>
                          <input name ="address" type="text" placeholder="Enter Full Address Of PIA" class="form-control">
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