
@extends('layouts.master')
@section('title', 'Change Password')
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
                  <h4 class="text-center fw-bold">Change Password</h4><br>
                    <div class="container-fluid" >
                        <div class="col-7 mx-auto">
                        <form action="{{ route('post_change_password') }}" method="post">
                            @csrf
                            <div class="row">  
                                @if (session('alert_status'))
                                    <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                                @endif      
                                @if ($errors->any())
                                    <div class="alert alert-danger">{{$errors->first()}}</div>
                                    @endif
                            </div>
                     
                            <div class="row ">            
                                <div class="col-md-12 mx-auto">    
                                    <label class="m-2">Current Password</label>
                                    <input type="text" name="cur_pass" class="form-control" placeholder="Enter Current Password" >
                                </div>
                            </div>   
                            <div class="row ">            
                                <div class="col-md-12 mx-auto">    
                                    <label class="m-2">New Password</label>
                                    <input type="text" name="new_pass" class="form-control" placeholder="Enter New Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$">
                                </div>
                            </div>                          
                            <div class="row ">            
                                <div class="col-md-12 mx-auto">    
                                    <label class="m-2">Confirm Password</label>
                                    <input type="text" name="con_pass" class="form-control" placeholder="Enter Confirm Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$">
                                </div>
                            </div> 
                        <div class="col-md-3 mt-3">
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
            </div>
          </div> 
        </div>
         
@endsection
