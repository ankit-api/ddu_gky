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
                        <div class="col-sm-4 ml-2 mb-4">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic6">User Manager</a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">MIS</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('mis_form')}}" ><b>Add MIS</b></a>
                                </li>
                            </ol>
                        </div> 
                            <h4 class="text-center fw-bold">MIS List</h4><br>
                            <div class="container col-sm-12 mx-auto" >
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
                                                <td><button class="text-light btn btn-primary">View</button></td>
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
