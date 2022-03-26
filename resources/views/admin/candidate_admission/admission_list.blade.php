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
                            <h4 class="text-center fw-bold">Candidate Admission List</h4><br>
                            <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Student Code</th>
                                            <th>Student Name</th>
                                            <th>Batch ID</th>
                                            <th>D.O.B</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Added By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate_data as $candidate)
                                            <tr>
                                                <td>{{ $candidate->student_code }}</td>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ $candidate->batchCode->batch_code }}</td>
                                                <td>{{ $candidate->dob }}</td>
                                                <td>{{ $candidate->contact }}</td>
                                                <td>{{ $candidate->email }}</td>
                                                <td>{{ $candidate->cenInchName->name.' ('.$candidate->cenInchName->user_code.')' }}</td>
                                                <td>
                                                    <button class="text-light btn btn-info">Edit</button>
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
