@extends('layouts.master')
@section('title', 'Centre List')
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
                  <h4 class="text-center fw-bold">Centre List</h4><br>
                    <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <!-- <th>PIA Code</th>
                                    <th>PIA Name</th> -->
                                    <th>Project Name</th>
                                    <th>Centre Code</th>
                                    <th>Centre Name</th> 
                                    <th>State</th>
                                    <th>District</th> 
                                    <th>Centre Address</th>                                                                      
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($centre_data as $centre)
                                <tr>
                                <td>{{ $centre->getProjectName->name }}</td> 
                                <td>{{ $centre->centre_code }}</td>                        
                                <td>{{ $centre->centre_name }}</td>
                                <td>{{ $centre->getState->state_name }}</td>
                                <td>{{ $centre->getDistrict->district_name }}</td>                              
                                <td>{{ $centre->address }}</td>
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
        $('#table1').dataTable();
    });
</script>