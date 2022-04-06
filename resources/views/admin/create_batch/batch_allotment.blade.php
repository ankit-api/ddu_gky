@extends('layouts.master')
@section('title', 'Batch Allotment')
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
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic16" aria-expanded="false" aria-controls="ui-basic16">Batch</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('batch_allotment')}}" ><b>Batch Allotment</b></a>
                                </li>
                            </ol>
                        </div>                            
                            <h3 class="text-center fw-bold">Batch Allotment</h3><br>
                            @if (session('alert_success'))
                            <h6 class="alert alert-success mx-4 fw-bold fs-6">{{ session('alert_success') }}</h6>
                            @endif     
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger mx-4 fw-bold fs-6">{{ session('alert_danger') }}</h6>
                            @endif
                            <div class="container col-sm-12 mx-auto" >
                            <form action="{{ route('post_batch_allotment') }}" method="post">
                            @csrf
                                <div class = "row">
                                    <div class="col-md-3">
                                        <label for="" class="m-2">Name of Project</label><br>
                                        <select name="project_id" id="" class="form-control" style="background-color:white;">
                                            <option value="{{ $project['id'] }}">{{ $project->sanction_order_no}}</option>                      
                                        </select> 
                                    </div>   
                                    <div class="col-md-3">
                                            <label for="" class="m-2">Centre Name</label><br>
                                            <select name="centre_id" id="" class="form-control centre" style="background-color:white;">
                                            <option value="">Select Centre</option>
                                            @foreach($centre as $centre)
                                                <option value="{{ $centre['id'] }}">{{ $centre['centre_name']}}</option>
                                            @endforeach
                                            </select> 
                                    </div>    
                                    <div class="col-md-3">
                                            <label for="" class="m-2">Batch</label><br>
                                            <select name="batch_id" id="batch" class="form-control"  style="background-color:white;">
                                            <option value="">Select Batch</option>
                                            </select> 
                                    </div>  
                                    <div class="col-md-3 mt-4">
                                            <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">Batch Assign</button>
                                    </div>  
                                </div>
                                <h4 class="alert alert-danger mt-2 d-none fw-bold fs-6" id="enroll-error"></h4>
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>S.No.</th>
                                            <th>Registration Code</th>
                                            <th>Name</th>
                                            <th>Phone no.</th>
                                            <!-- <th>Added By</th> -->
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </form>    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function () {
                    $('.number_validation').on('keyup', function () {
                        if (/\D/g.test(this.value))
                        this.value = this.value.replace(/\D/g,'')
                    });

            $('.centre').on('change', function () {
                var id = this.value;
                $("#batch").html('');
                $.ajax({
                    url: "{{url('fetch_batch_by_centre')}}",
                    type: "POST",
                    data: {
                        centre_id: id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#batch').html('<option value="">Select Batch</option>');
                        $.each(result, function (key, value) {
                            $("#batch").append('<option value="' + value
                                .id + '">' + value.batch_code + '</option>');
                        });
                      
                    }
                });
            });


            $('#batch').on('change', function () {
                var id = $('.centre').val();
                $.ajax({
                    url: "{{url('fetch_can_for_allot')}}",
                    type: "POST",
                    data: {
                        centre_id: id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#table1 tbody').html('<tbody>');
                        var sno = 0
                        $.each(result, function (key, value) {
                            sno = sno+1;
                            $("#table1").append('<tr><td><input type="checkbox" class="checkbox" name="admi_reg_id[]" value="'+value.id+','+value.registration_code.id+'"> </td><td>'+sno+'</td><td>'+value.registration_code.reg_code+'</td><td>'+value.name+'</td><td>'+value.contact+'</td></tr>');
                        });
                        $('#table1').append('</tbody>');
                        
                        $('input[type="checkbox"]').change(function () {
                            $('#enroll-error').addClass('d-none');
                            $('button').prop('disabled', false);
                                        
                            $.ajax({
                                url: "{{url('fetch_enroll_can')}}",
                                type: "POST",
                                data: {
                                    batch_id: $('[name="batch_id"]').val(),
                                    count: $('input:checkbox:checked'). length,
                                    _token: '{{csrf_token()}}'
                                },
                                dataType: 'json',
                                success: function (result) {
                                    if(result != "")
                                    {
                                        $('#enroll-error').removeClass('d-none');
                                        $('#enroll-error').html(result);
                                        $('button').prop('disabled', true);
                                    }
                                
                                
                                }
                            });
                        });
                    }
                    
                    

                });                
            });
        });

                    
      

       

      
           
            
        </script>
