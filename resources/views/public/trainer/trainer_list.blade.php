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
                <div class="col-sm-5 ml-2 mb-4">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic6">User Manager</a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">Trainer</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('trainer_list')}}" ><b>Trainer List</b></a>
                                </li>
                            </ol>
                        </div> 
                  <h4 class="text-center fw-bold">Trainer List</h4><br>
                    <div class="container col-sm-12 mx-auto" >
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>Sanction Order No.</th>
                                    <th>Centre Code</th>
                                    <th>Centre Name</th>                                    
                                    <th>Trainer Code</th>
                                    <th>Trainer Name</th>
                                    <th>Type of Engagement</th>    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trainer_data as $trainer)
                                <tr>
                                    <td>{{ $trainer->getProjectName->sanction_order_no }}</td>  
                                    <td>{{ $trainer->getCentreName->centre_code }}</td>
                                    <td>{{ $trainer->getCentreName->centre_name }}</td>
                                    <td>{{ $trainer->trainer_code }}</td>
                                    <td>{{ $trainer->name }}</td>
                                    <td>{{ $trainer->type_of_engagement }}</td>
                                    
                                    <td>
                                  <button class="text-light btn btn-primary">View</button>
                                  <!-- <button class="text-light btn btn-danger">Deactive</button> -->
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