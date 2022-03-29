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
                    <div class="home-tab">

                        <div class="container col-sm-12 mx-auto">
                            <h4 class="text-center fw-bold">Candidate Dossier List</h4><br>
                            <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Student Code</th>
                                            <th>Student Name</th>
                                            <th>Batch ID</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Parent Consent Form</th>
                                            <th>Final Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate_data as $candidate)
                                            <tr>
                                                <td>{{ $candidate->student_code }}</td>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ $candidate->batchCode->batch_code }}</td>
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
