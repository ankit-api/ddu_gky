@extends('layouts.master')
@section('title', 'MIS List')
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
                            <h4 class="text-center fw-bold">MIS List</h4><br>
                            <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>MIS Code</th>
                                            <th>MIS Name</th>
                                            <th>MIS Type</th>
                                            <th>MIS Email</th>
                                            <th>MIS Contact</th>
                                            <th>MIS Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mis_data as $mis)
                                            <tr>
                                                <td>{{ $mis->mis_code }}</td>
                                                <td>{{ $mis->name }}</td>
                                                <td>{{ $mis->getUserType->role_name }}</td>
                                                <td>{{ $mis->email }}</td>
                                                <td>{{ $mis->phone_no }}</td>
                                                <td>{{ $mis->address }}</td>
                                                <td><button class="text-light btn btn-info">Edit</button></td>
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
