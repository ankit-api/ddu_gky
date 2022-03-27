@extends('layouts.master')
@section('title', 'Trainer List')
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
                  <h4 class="text-center fw-bold">Trainer List</h4><br>
                    <div class="container col-sm-12 mx-auto" style="overflow:scroll;">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>Centre Code</th>
                                    <th>Centre Name</th>
                                    <th>Sanction Order No.</th>
                                    <th>Trainer Code</th>
                                    <th>Trainer Name</th>
                                    <th>Type of Engagement</th>
                                    <th>Training type</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Domain</th>
                                    <th>Additional Skill</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trainer_data as $trainer)
                                <tr>
                                    <td>{{ $trainer->getCentreName->center_code }}</td>
                                    <td>{{ $trainer->getCentreName->centre_name }}</td>
                                    <td></td>                                    
                                    <td>{{ $trainer->trainer_code }}</td>
                                    <td>{{ $trainer->name }}</td>
                                    <td>{{ $trainer->type_of_engagement }}</td>
                                    <td>{{ $trainer->training_type }}</td>
                                    <td>{{ $trainer->gender }}</td>
                                    <td>{{ $trainer->dob }}</td>
                                    <td>{{ $trainer->domain }}</td>
                                    <td>{{ $trainer->additional_skill }}</td>
                                    
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