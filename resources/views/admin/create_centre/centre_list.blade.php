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
                        <div class="col-sm-3 ml-2">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 28px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">Centre</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('centre_list')}}" ><b>Centre List </b></a>
                                </li>
                            </ol>
                        </div>
                  <h3 class="text-center fw-bold">Centre List</h3><br>
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
                        <table class="table table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <!-- <th>PIA Code</th>-->
                                    <th>PIA Name</th> 
                                    {{-- <th>Sanction Order No.</th> --}}
                                    <th>Centre Code</th>
                                    <th>Centre Name</th> 
                                    <th>State</th>
                                    {{-- <th>District</th>  --}}
                                    <th>Centre Address</th>                                                                      
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($centre_data as $centre)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                {{-- <td>{{ $centre->getProjectName->sanction_order_no }}</td>  --}}
                                <td>{{ $centre->getPiaName->pia_name }}</td>
                                <td>{{ $centre->centre_code }}</td>                        
                                <td>{{ $centre->centre_name }}</td>
                                <td>{{ $centre->getState->state_name }}</td>
                                {{-- <td>{{ $centre->getDistrict->district_name }}</td>                               --}}
                                <td>{{ $centre->address }}</td>
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
        $('#table1').dataTable();
    });
</script>