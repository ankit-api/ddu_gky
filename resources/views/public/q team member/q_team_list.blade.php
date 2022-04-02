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
                  
                <div class="container col-sm-12 mx-auto" >

                <div class="col-sm-7 ml-2 mb-4">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic6">User Manager</a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">Quality Team Member </a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('q_team_member_list')}}" ><b>Quality Team Member List</b></a>
                                </li>
                            </ol>
                        </div>                
                        <h3 class="text-center fw-bold">Quality Team Member List</h3><br>
                        @if (session('alert_success'))
                            <h6 class="alert alert-success mx-4">{{ session('alert_success') }}</h6>
                            @endif     
                            @if (session('alert_danger'))
                                <h6 class="alert alert-danger mx-4">{{ session('alert_danger') }}</h6>
                            @endif       
                            @if ($errors->any())
                                {{-- @foreach ($errors->all() as $error) --}}
                                    <div class="alert alert-danger mx-4">{{$errors->first()}}</div>
                                {{-- @endforeach --}}
                            @endif 
                    <div class="container col-sm-12 mx-auto">
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    {{-- <th>PIA Code</th> --}}
                                    {{-- <th>PIA Name</th> --}}
                                    <th>Sanction Order No.</th>
                                    <th>Q-Team Member Designation</th>
                                    <th>Q-Team Member Code</th>
                                    <th>Q-Team Member Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($qteam_data as $qteam)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    {{-- <td>{{ $qteam->getPiaName->pia_code }}</td> --}}
                                    {{-- <td>{{ $qteam->getPiaName->pia_name }}</td> --}}
                                    <td>{{ $qteam->getSanctionOrder->sanction_order_no }}</td>
                                    <td>{{ $qteam->designation }}</td>
                                    <td>{{ $qteam->qteam_member_code }}</td>
                                    <td>{{ $qteam->name }}</td>
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