@extends('layouts.master')
@section('title', 'PIA List')
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
                        <div class="col-sm-4 ml-2">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">User Manager</a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">PIA</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('pia_list')}}" ><b>PIA List</b></a>
                                </li>
                            </ol>
                        </div>
                            <h3 class="text-center fw-bold">PIA List</h3><br>
                            <div class="container row mb-2">
                      
                      
                    </div>
                            @if (session('alert_success'))
                            <h6 class="alert alert-success">{{ session('alert_success') }}</h6>
                            @endif     
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger">{{ session('alert_danger') }}</h6>
                            @endif       
                            @if ($errors->any())
                                {{-- @foreach ($errors->all() as $error) --}}
                                    <div class="alert alert-danger">{{$errors->first()}}</div>
                                {{-- @endforeach --}}
                            @endif 
                            <div class="container col-sm-12 mx-auto" >
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>PIA Code</th>
                                            <th>PIA Name</th>
                                            <th>PIA Landline No.</th>
                                            <th>PIA Alternate Contact</th>
                                            <th> PIA Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pia as $pia)
                                            <tr>
                                                <td>{{ $pia->pia_code }}</td>
                                                <td>{{ $pia->pia_name }}</td>
                                                <td>{{ $pia->landline_no }}</td>
                                                <td>{{ $pia->phone_no }}</td>
                                                <td>{{ $pia->email }}</td>
                                                <td><button class="text-light btn btn-primary">View</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').dataTable();
        });
    </script>
