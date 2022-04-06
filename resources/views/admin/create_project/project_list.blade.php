@extends('layouts.master')
@section('title', 'Project List')
@section('dashboard')


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">Project/Sanction Order</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('project_list')}}" ><b>Project List </b></a>
                                </li>
                            </ol>
                        </div>
                            <h3 class="text-center fw-bold">Sanction Order List</h3><br>
                            @if (session('alert_success'))
                            <h6 class="alert alert-success mx-4 fw-bold fs-6">{{ session('alert_success') }}</h6>
                            @endif     
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger mx-4 fw-bold fs-6">{{ session('alert_danger') }}</h6>
                            @endif       
                            @if ($errors->any())
                                {{-- @foreach ($errors->all() as $error) --}}
                                    <div class="alert alert-danger mx-4 fw-bold fs-6">{{$errors->first()}}</div>
                                {{-- @endforeach --}}
                            @endif
                            <div class="container col-sm-12 mx-auto" >
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>PIA Code</th>
                                            <th>PIA Name</th>
                                            <th>Project Name</th>
                                            <th>State</th>
                                            <th>District</th>
                                            <th>Sanction Date</th>                                         
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($project_data as $project)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $project->getProjectList->pia_code }}</td> 
                                                <td>{{ $project->getProjectList->pia_name }}</td>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->getState->state_name }}</td>
                                                <td>{{ ucwords($project->district) }}</td> 
                                                <td>{{ $project->sanction_date }}</td>
                                                <td>                                                  
                                                    <button class="text-light btn btn-primary">View</button>
                                                    <!-- <button class="text-light btn btn-danger">Deactive</button> -->
                                                </td>
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
    {{-- </div> --}}
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

