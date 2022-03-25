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
                            <h4 class="text-center fw-bold">Project List</h4><br>
                            <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>PIA Code</th>
                                            <th>PIA Name</th>
                                            <th>Project Name</th>
                                            <th>State</th>
                                            <th>District</th>
                                            <th>Project Duration</th>
                                            <th>Project Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($project_data as $project)
                                            <tr>
                                                <td>{{ $project->getProjectList->pia_code }}</td>
                                                <td>{{ $project->getProjectList->pia_name }}</td>
                                                <td>{{ $project->name }}</td>
                                                <td>{{ $project->getState->state_name }}</td>
                                                <td>{{ $project->getDistrict->district_name }}</td>
                                                <td>{{ $project->duration }}</td>
                                                <td>{{ $project->description }}</td>
                                                <td>
                                                    <button class="text-light btn btn-info">Edit</button><button
                                                        class="text-light btn btn-danger">Delete</button>
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
