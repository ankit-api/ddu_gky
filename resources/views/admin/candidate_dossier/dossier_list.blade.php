@extends('layouts.master')
@section('title', 'Candidate Dossier List')
@section('dashboard')

    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-5 ml-2 mb-4">
                        <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 52px;">
                            <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic26" aria-expanded="false" aria-controls="ui-basic26">Candidate Dossier</a></li>
                                <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('candidate_dossier_list')}}" ><b>Candidate Dossier List</b></a>
                            </li>
                        </ol>
                    </div>
                    <div class="home-tab">

                        <div class="container col-sm-12 mx-auto">
                            <h3 class="text-center fw-bold">Candidate Dossier List</h3><br>
                            <div class="container col-sm-12 mx-auto" >
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Student Code</th>
                                            <th>Student Name</th>
                                            {{-- <th>Batch ID</th> --}}
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Parent Consent Form</th>
                                            <th>Final Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate_data as $candidate)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{ $candidate->registrationCode->reg_code }}</td>
                                                <td>{{ $candidate->name }}</td>
                                                {{-- <td>{{ $candidate->batchCode->batch_code }}</td> --}}
                                                <td>{{ $candidate->contact }}</td>
                                                <td>{{ $candidate->email }}</td>
                                                <td class="text-center"><input type="button" class="text-light btn btn-info" onclick="frames['frame'].print()" value="Print"></td>
                                                <td>
                                                    <button class="text-light btn btn-info">Print</button>
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
        <iframe src="parent_consent_form_print" style="display:none;" name="frame"></iframe>

    {{-- </div> --}}
@endsection
