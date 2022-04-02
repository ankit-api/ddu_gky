
@extends('layouts.master')
@section('title', 'Update Profile')
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
                <div class="col-sm-3 ml-2 mb-4">
                    <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                        <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                        <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('update_mis_head_profile')}}" ><b>Update Profile</b></a>
                        </li>
                    </ol>
                </div> 
                  <h3 class="text-center fw-bold">Update Profile</h3><br>
                    <div class="container-fluid" >
                        <div class="col-12 mx-auto">
                        <form action="{{ route('post_update_admin_profile') }}" method="post" enctype="multipart/form-data">
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
                                    <label class="m-2">Name</label>
                                    <input type="text" name="name" required class="form-control" value="{{ $admin_data->name }}" placeholder="Enter Name" >
                                </div>  
                            </div>
                            <div class="row ">                                         
                                <div class="col-md-12 mx-auto">    
                                    <label class="m-2">Email</label>
                                    <input type="email" name="email" required class="form-control" value="{{ $admin_data->email }}" placeholder="Enter Email" >
                                </div>    
                            </div> 
                            <br>
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
