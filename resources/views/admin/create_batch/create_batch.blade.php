@extends('layouts.master')
@section('title', 'Create Batch')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
        <div class="container col-sm-12">
        <div class="col-sm-3 ml-2 mb-4">
            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;">
                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic16" aria-expanded="false" aria-controls="ui-basic16">Batch</a></li>
                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('batch_form')}}" ><b>Add Batch</b></a>
                </li>
            </ol>
        </div>
                <h3 class="text-center fw-bold">SF 6.3A1: Batch details</h3><br>
        <form action="{{ route('create_batch') }}" method="post">
        @csrf
        <div class="row">  
                        @if (session('alert_status'))
                            <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                        @endif      
                        @if ($errors->any())
                                <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif 
        </div>               
            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Nature of training</label><br>
                    <select name="nature_of_training" id="" class="form-control" style="background-color:white;">
                        <option value="fulltime">Full-time</option>
                        <option value="parttime">Part-time</option>
                        <option value="weekends">Week-ends</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Trainer Name</label><br>
                    <select name="t_name" id="" class="form-control" style="background-color:white;">
                    @foreach($get_trainer as $trainer)
                        <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                    @endforeach
                    </select>            
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Class Duration per day</label><br>
                    <input type="text" required class="form-control" name="duration_per_day">
                </div>
                <!-- <div class="col-md-3">
                    <label for="" class="m-2">Date of mobilization</label><br>
                    <input type="date" class="form-control" name="" id="" >
                </div> -->
            </div>
            <div class="row"> 
            <div class="col-md-6">
                    <label for="" class="m-2">Batch Start Date</label><br>
                    <input type="date" required name="b_start_date" min="{{date("Y-m-d")}}" id="b_start_date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="m-2">Expected Batch End Date</label><br>
                    <input type="date" required name="ex_b_end_date" min="{{date("Y-m-d")}}" class="form-control" name="" id="" >
                </div>
            </div> <br>
            <div class="row">
            <div class="col-md-6">
                    <label for="" class="m-2">Maximum permissible batch size</label><br>
                    <input type="text" required name="b_size" class="form-control" placeholder="35"  value="35">
                </div> 
            {{-- <div class="col-md-6">
                    <label for="" class="m-2">Will the batch be run in two shift</label><br>
                    <select name="shift" id="" onchange="getShift(this);"  class="form-control" style="background-color:white;">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select> 
                </div>                --}}
            </div> <br> 
            <div class="shift-div" id="shift-div">
            </div>    
            <div class="row">
            <div class="col-md-6">
                <label for="" class="m-2">Will OJT be given?</label>                   
                </div>
                <div class="col-md-6">
                <select name="ojt_given" onchange="getOjt(this);" id="" class="form-control" style="background-color:white;">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>     
                </div>  
            </div>     
            <div class="ojt-div" id="ojt-div">

            </div>
            <br>  
        
            {{-- <div class="row mb-3" >
                <div class="col-md-6">
                <label for="" class="m-2">Will the batch be split for training at the same Training Centre? </label>                     
                </div>
                <div class="col-md-6">
                    <select name="split" id="" onchange="getSection(this);" class="form-control" style="background-color:white;">
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>     
                </div>                             
            </div>  --}}
            <div class="section-div" id="section-div">
            </div>
            <div class="row">
            <div class="col-md-4">
            <label for="" class="m-2"> Activity cum Lesson planner for </label>
            </div>
            <div class="col-md-8">
                    <select name="lesson_planner" id="" onchange="getClassType(this);" class="form-control" style="background-color:white;">
                        <option value="batch">Batch</option>
                        <option value="section">Each section</option>  
                    </select>       
            </div>
            </div><br>
            <div class="classtype-div" id="classtype-div">
                <div class="row">
                    <div class="col-md-2">
                            <label for="" class="m-2">Theory Classroom No.</label><br>
                            <input type="number" class="form-control" name="theory_class[]" min="0" id="" >
                        </div> 
                    <div class="col-md-2">
                            <label for="" class="m-2">IT lab No.</label><br><br>
                            <input type="number" class="form-control" name="it_lab[]" min="0" id="" >
                    </div>   
                    <div class="col-md-2">
                            <label for="" class="m-2">Practical lab No.</label><br><br>
                            <input type="number" class="form-control" name="practical_lab[]" min="0" id="" >
                    </div> 
                    <div class="col-md-2">
                            <label for="" class="m-2">Theory cum Practical Lab No.
                            </label><br>
                            <input type="number" class="form-control" name="theory_cum_class[]" min="0" id="" >
                    </div>   
                    <div class="col-md-2">
                            <label for="" class="m-2">Theory cum IT Lab No.</label><br>
                            <input type="number" class="form-control" name="it_cum_lab[]" min="0" id="" >
                    </div>                
                    <div class="col-md-2">
                            <label for="" class="m-2">IT cum Practical Lab No.</label><br>
                            <input type="number" class="form-control" name="practical_cum_lab[]" min="0" id="" >
                    </div>                     
                </div> 
            </div>  
             <br>
           <!-- <h5>Trainer Detail</h5>
                <hr>
               <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Trainer Name</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                    @foreach($get_trainer as $trainer)
                        <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                    @endforeach
                    </select>            
                </div>
                <div class="col-md-3">
                        <label for="" class="m-2">Trainer Skill</label><br>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Age">
                </div>  
                <div class="col-md-3">
                    <label for="" class="m-2">Nature of trainer</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Primary</option>
                        <option value="">Secondary</option>
                    </select> 
                </div>       
                <div class="col-md-3">
                    <label for="" class="m-2">Type of Engagement</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Full time</option>
                        <option value="">Part time</option>
                    </select>  
                </div>                          
            </div><br> -->
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
       

        // function getShift(shift)
        // { 
        //     if(shift.value == 'yes')
        //     {
        //         $('#shift-div').append('  <div class="row mb-4" id="append-shift"><div class="col-md-3"><label for="" class="m-2">Start Time (Shift-1)</label><br><input type="time" class="form-control" name="start1" id="" > </div> <div class="col-md-3"><label for="" class="m-2">End Time (Shift-1)</label><br><input type="time" class="form-control" name="end1" id="" ></div>   <div class="col-md-3"><label for="" class="m-2">Start Time (Shift-2)</label><br><input type="time" class="form-control" name="start2" id="" > </div> <div class="col-md-3"><label for="" class="m-2">End Time (Shift-2)</label><br><input type="time" class="form-control" name="end2" id="" ></div></div>  ');
        //     }
            
        //     if(shift.value == 'no')
        //     {
        //        $('#append-shift').remove();
        //     }    
        // }

        function getOjt(ojt)
        { 
            if(ojt.value == 'yes')
            {
                $('#ojt-div').append('  <div class="row" id="append-ojt"><div class="col-md-6"><label for="" class="m-2">Expected OJT start date</label><br> <input type="date" class="form-control"  min="{{date("Y-m-d")}}" name="o_start_date" id="" > </div> <div class="col-md-6"> <label for="" class="m-2">No. of OJT days:</label><br> <input type="number" class="form-control" name="ojt_days" id="" ></div>   </div></div>  ');
            }
            
            if(ojt.value == 'no')
            {
               $('#append-ojt').remove();
            }    
        }

        // function getSection(section)
        // {
        //     if(section.value == 'yes')
        //     {
        //         $('#section-div').append('  <div class="row mb-4" id="append-section"> <div class="col-md-6" ><label for="" class="m-2">Section A- No of Candidates</label><br><input type="number" class="form-control" name="sec1_can_no" id="" ></div><div class="col-md-6"><label for="" class="m-2">Section B- No of Candidates</label><br><input type="number" class="form-control" name="sec2_can_no" id="" ></div></div>   ');
        //     }
            
        //     if(section.value == 'no')
        //     {
        //        $('#append-section').remove();
        //     }    
        // }


        function getClassType(classType)
        { 
            if(classType.value == 'section')
            {
                $('#classtype-div').append('  <div class="row" id="append-classType"> <div class="col-md-2"> <label for="" class="m-2">Theory Classroom No.</label><br>    <input type="number" class="form-control" name="theory_class[]"  min="0" id="" > </div> <div class="col-md-2">     <label for="" class="m-2">IT lab No.</label><br><br><input type="number" class="form-control" name="it_lab[]"  min="0" id="" ></div>   <div class="col-md-2"><label for="" class="m-2">Practical lab No.</label><br><br><input type="number" class="form-control" name="practical_lab[]"  min="0" id="" ></div> <div class="col-md-2"><label for="" class="m-2">Theory cum Practical Lab No.</label><br><input type="number" class="form-control" name="theory_cum_class[]"  min="0" id="" ></div>   <div class="col-md-2"><label for="" class="m-2">Theory cum IT Lab No.</label><br><input type="number" class="form-control" name="it_cum_lab[]"  min="0" id="" ></div>                <div class="col-md-2"><label for="" class="m-2">IT cum Practical Lab No.</label><br><input type="number" class="form-control" name="practical_cum_lab[]"  min="0" id="" ></div> </div> ');
            }
            
            if(classType.value == 'batch')
            {
               $('#append-classType').remove();
            }    
        }
           
            
        </script>