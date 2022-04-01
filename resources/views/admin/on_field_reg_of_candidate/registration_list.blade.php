@extends('layouts.master')
@section('title', 'Candidate Registration List')
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
                        <div class="col-sm-5 ml-2 mb-4">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic14" aria-expanded="false" aria-controls="ui-basic14">Registration</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('candidate_register_list')}}" ><b>Candidate Registration List</b></a>
                                </li>
                            </ol>
                        </div> 
                            <h4 class="text-center fw-bold">Candidate Registration List</h4><br>
                            <div class="container col-sm-12 mx-auto" >
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Registration Code</th>
                                            <th>Candidate Name</th>
                                            <th>Village Name</th>
                                            <th>Added By Mobilizer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate_data as $candidate)
                                            <tr>
                                                <td>{{ $candidate->reg_code }}</td>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ $candidate->village }}</td>
                                                <td>{{ $candidate->mob_name->name }}</td>
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
{{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // $('#table1').dataTable();
        $('#table1').DataTable({
            "processing": true,
            "serverSide": true
        });
    });
</script>
