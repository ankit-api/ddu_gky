@extends('layouts.master')
@section('title', 'Batch List')
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
                            <h4 class="text-center fw-bold">Batch List</h4><br>
                            <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                                <table class="table table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Batch Code</th>
                                            <th>Trainer Name</th>
                                            <th>Centre Code</th>
                                            <th>Nature Of Training</th>
                                            <th>Start Date - End Date</th>
                                            <th>Batch Status</th>
                                            <th>Added By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($batch_data as $batch_data)
                                            <tr>
                                                <td>{{ $batch_data->batch_code }}</td>
                                                <td>{{ $batch_data->trainerDetails->name }}</td>
                                                <td>{{ $batch_data->trainerDetails->centreCode->center_code }}</td>
                                                <td>{{ $batch_data->nature_of_training }}</td>
                                                <td>{{ $batch_data->batch_start_date.' - '.$batch_data->batch_end_date }}</td>
                                                <td>{{ ucwords($batch_data->batch_summary_status) }}</td>
                                                <td>{{ $batch_data->addedBy->name }}</td>
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
