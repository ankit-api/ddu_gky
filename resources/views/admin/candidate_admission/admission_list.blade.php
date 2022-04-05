@extends('layouts.master')
@section('title', 'Candidate Admission List')
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
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic17" aria-expanded="false" aria-controls="ui-basic17">Admission</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('admission_list')}}" ><b>Admission List</b></a>
                                </li>
                            </ol>
                        </div>
                            <h3 class="text-center fw-bold">Candidate Admission List</h3><br>
                            @if (session('alert_success'))
                            <h6 class="alert alert-success mx-4">{{ session('alert_success') }}</h6>
                            @endif     
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger mx-4">{{ session('alert_danger') }}</h6>
                            @endif
                            <div class="container col-sm-12 mx-auto">
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Student Code</th>
                                            <th>Student Name</th>
                                            <th>D.O.B</th>
                                            <th>Added By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate_data as $candidate)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $candidate->registrationCode->reg_code }}</td>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ $candidate->dob }}</td>
                                                <td>{{ $candidate->cenInchName->name.' ('.$candidate->cenInchName->user_code.')' }}</td>
                                                <td>
                                                    <button class="text-light btn btn-primary">View</button>
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
