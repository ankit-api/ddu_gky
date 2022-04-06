@extends('layouts.master')
@section('title', 'Candidate Registration List')
@section('dashboard')

    <script>
        $(document).ready(function() {
            $(".mymodal").click(function() {
                var data_id = $(this).data("id");
                var data_status = $(this).data("status");
                $('#reg_code_for_remark').val(data_id);
                if(data_status=="wait"){
                    $("input[name='remark_name']").prop('checked', false); 
                }
                else{
                    $("input[name='remark_name'][value="+data_status+"]").prop("checked",true);
                }
                $("#myModal").modal('show');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                                <ol class="breadcrumb float-sm-right"
                                    style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                    <li class="breadcrumb-item"><a style="color:#fff; text-decoration: none;"
                                            href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i
                                                class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a style="color:#fff; text-decoration: none;"
                                            data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false"
                                            aria-controls="ui-basic3">Registration</a></li>
                                    <li class="breadcrumb-item active"><a style="color:#fff; text-decoration: none;"
                                            href="{{ route('candidate_register_list') }}"><b>Candidate Registration
                                                List</b></a>
                                    </li>
                                </ol>

                            </div>
                            <h3 class="text-center fw-bold">SF 6.1C: Candidate Registration List</h3><br>
                            @if (session('alert_success'))
                                <h6 class="alert alert-success mx-4">{{ session('alert_success') }}</h6>
                            @endif
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger mx-4">{{ session('alert_danger') }}</h6>
                            @endif
                            <div class="container col-sm-12 mx-auto">
                                <table class="table display table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Registration Code</th>
                                            <th>Candidate Name</th>
                                            <th>Current Status</th>
                                            <th>Reference Name</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($candidate_data as $candidate)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $candidate->reg_code }}</td>
                                                <td>{{ $candidate->name }}</td>
                                                <td>{{ ucwords($candidate->remarks) }}</td>
                                                <td>{{ !empty($candidate->mob_name->name)? $candidate->mob_name->name . '(Mobilizer)': $candidate->other_reference }}
                                                </td>
                                                <td><button type="button" class="btn btn-success mymodal" data-id="{{ $candidate->reg_code }}" data-status="{{ $candidate->remarks }}">Remarks</button>
                                                </td>
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
        <!-- Modal Start -->
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title">Update Remarks</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form method="post" action="{{route('update_remarks')}}">
                        @csrf
                        <div class="modal-body">
                            <div class="col-md-10">
                                <span style="font-weight:bold;" data-placement="right" title="Project Name">Select Remark :</span><br>
                                <input type="radio" id="rejected" name="remark_name" value="rejected">
                                <label for="rejected">Rejected</label>
                                <input type="radio" id="hold" name="remark_name" value="hold">
                                <label for="hold">On Hold</label>
                                <input type="radio" id="proceed" name="remark_name" value="proceed">
                                <label for="proceed">Proceed</label>
                            </div>

                            <input type="hidden" class="form-control" placeholder="Enter data Here" name="reg_code_for_remark"
                                id="reg_code_for_remark">
                            <div class="col-md-12" style="text-align:center;margin:auto;">
                                <span style="font-weight:bold;margin-bottom:10px;" id="status_label" title="status"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="update_status" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

