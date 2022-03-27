@extends('layouts.master')
@section('title', 'Centre Incharge List')
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
                  <h4 class="text-center fw-bold">Centre Incharge List</h4><br>
                    <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>                                    
                                    <th>Sanction Order No.</th>
                                    <th>Centre Code</th>
                                    <th>Centre Name</th>
                                    <th>Centre Incharge Code</th>
                                    <th>Centre Incharge Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Qualification</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($centre_incharge_data as $centre_incharge)
                                <tr>
                                <td>{{ $centre_incharge->getProjectName->sanction_order_no }}</td> 
                                <td>{{ $centre_incharge->getCentreName->center_code }}</td> 
                                <td>{{ $centre_incharge->getCentreName->centre_name }}</td> 
                                <td>{{ $centre_incharge->centre_incharge_code }}</td>
                                <td>{{ $centre_incharge->name }}</td>
                                <td>{{ $centre_incharge->gender }}</td>
                                <td>{{ $centre_incharge->email }}</td>
                                <td>{{ $centre_incharge->contact }}</td>
                                <td>{{ $centre_incharge->address }}</td>
                                <td>{{ $centre_incharge->qualification }}</td>
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