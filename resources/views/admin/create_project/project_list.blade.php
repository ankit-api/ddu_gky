@extends('layouts.master')
@section('title', 'PIA List')
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
                  <h4 class="text-center fw-bold">PIA List</h4><br>
                    <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>PIA Code</th>
                                    <th>PIA Name</th>
                                    <th>Project Name</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>PIA Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project as $project)
                                <tr>
                                    <td>{{ $project->pia->pia_code }}</td>
                                    <td>{{ $project->pia->pia_name }}</td>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->phone_no }}</td>
                                    <td>{{ $project->email }}</td>
                                    <td>{{ $project->address }}</td>
                                    <td></td>
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