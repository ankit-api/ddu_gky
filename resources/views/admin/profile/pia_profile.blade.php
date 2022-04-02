
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
                        <form action="{{ route('post_update_pia_profile') }}" method="post" enctype="multipart/form-data">
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
                                <div class="col-md-3 mx-auto">    
                                    <label class="m-2">Name</label>
                                    <input type="text" name="name" required class="form-control" value="{{ $pia_data->pia_name }}" placeholder="Enter Name" >
                                </div>                                      
                                <div class="col-md-3 mx-auto">    
                                    <label class="m-2">Official Email</label>
                                    <input type="email" name="email" required class="form-control" value="{{ $pia_data->email }}" placeholder="Enter Email" >
                                </div>                                                  
                                <div class="col-md-3 mx-auto">    
                                    <label class="m-2">Contact</label>
                                    <input type="text" name="contact" required class="form-control" value="{{ $pia_data->phone_no }}" placeholder="Enter Contact" >
                                </div>
                                <div class="col-md-3 mx-auto">    
                                    <label class="m-2">Landline No</label>
                                    <input type="text" name="landline" required class="form-control" value="{{ $pia_data->landline_no }}" placeholder="Enter Landline No." >
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <label class="m-2">Address</label>
                                    <textarea name="address" required placeholder="Enter Address" rows="3" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;padding-left: 15px; font-size: 15px;">{{ $pia_data->address }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">   
                                    <label for="" class="m-2">PIA Document <span style="font-size: 14px;font-weight: 600;color: #ee1201;">(Pdf size should be less than 1Mb)</span></label><br>                                               
                                    <input type="file" name="pia_doc" accept="application/pdf" class="form-control" style="background-color:white;" >                                      
                                </div>
                                <div class="col-md-3">
                                    @if(!empty($pia_data->pia_doc))
                                            <a href="{{ asset('Documents/PIA_File/'). $pia_data->pia_doc }}" target="_blank" class="text-light btn btn-primary">View Documnet</a>
                                    @endif
                                </div>
                            </div><br>
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
