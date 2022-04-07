@extends('layouts.master')
@section('title', 'Candidate In Batch')
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
                        <div class="col-sm-4 ml-2 mb-4">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic16" aria-expanded="false" aria-controls="ui-basic16">Batch</a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;" href="{{ route('batch_list')}}">Batch List</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="" ><b>Candidate List In Batch</b></a>
                                </li>
                            </ol>
                        </div>
                            <h3 class="text-center fw-bold">SF 6.3A1: Candidate List In Batch</h3><br>
                            @if (session('alert_success'))
                            <h6 class="alert alert-success mx-4 fw-bold fs-6">{{ session('alert_success') }}</h6>
                            @endif     
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger mx-4 fw-bold fs-6">{{ session('alert_danger') }}</h6>
                            @endif
                            <div class="container col-sm-12 mx-auto" >
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                        <th>S.No.</th>
                                            <th>Batch Code</th>
                                            <th>Register Id</th>
                                            <th>Candidate Name</th>
                                            <th>Trainer Name</th>                                           
                                            <th>Nature Of Training</th>
                                            <th>Batch Status</th>
                                            {{-- <th>Added By</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($candidate_data as $candidate_data)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $candidate_data->batchCode->batch_code }}</td>
                                                <td>{{ $candidate_data->allotedCandidateList->reg_code }}</td>
                                                <td>{{ $candidate_data->allotedCandidateList->name }}</td>
                                                <td>{{ $candidate_data->batchCode->trainerDetails->name }}</td>
                                                <td>{{ ucwords($candidate_data->batchCode->nature_of_training) }}</td>
                                                <td>{{ ucwords($candidate_data->batchCode->batch_summary_status) }}</td>                                                
                                                {{-- <td>{{ $batch_data->addedBy->name }}</td> --}}
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
