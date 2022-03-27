@extends('layouts.master')
@section('title', 'Q-Team Member List')
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
                  <h4 class="text-center fw-bold">Q-Team Member List</h4><br>
                    <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>PIA Code</th>
                                    <th>PIA Name</th>
                                    <th>Sanction Order No.</th>
                                    <th>Q-Team Member Designation</th>
                                    <th>Q-Team Member Reporting Office</th>
                                    <th>Q-Team Member Code</th>
                                    <th>Q-Team Member Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($qteam_data as $qteam)
                                <tr>
                                    <td>{{ $qteam->getPiaName->pia_code }}</td>
                                    <td>{{ $qteam->getPiaName->pia_name }}</td>
                                    <td>{{ $qteam->getProjectName->sanction_order_no }}</td>
                                    <td>{{ $qteam->designation }}</td>
                                    <td>{{ $qteam->reporting_office }}</td>
                                    <td>{{ $qteam->qteam_member_code }}</td>
                                    <td>{{ $qteam->name }}</td>
                                    <td>{{ $qteam->gender }}</td>
                                    <td>{{ $qteam->email }}</td>
                                    <td>{{ $qteam->contact }}</td>
                                    <td>{{ $qteam->address }}</td>
                                    <td>
                                  <button class="text-light btn btn-info">Edit</button><button class="text-light btn btn-danger">Delete</button>
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
         
@endsection
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table').dataTable();
    });
</script>