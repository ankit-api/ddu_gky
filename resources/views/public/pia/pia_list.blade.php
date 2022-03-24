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
                                    <th>PIA Landline No.</th>
                                    <th>PIA Alternate Contact</th>
                                    <th> PIA Email</th>
                                    <th>PIA Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pia as $pia)
                                <tr>
                                    <td>{{ $pia->pia_code }}</td>
                                    <td>{{ $pia->pia_name }}</td>
                                    <td>{{ $pia->landline_no }}</td>
                                    <td>{{ $pia->phone_no }}</td>
                                    <td>{{ $pia->email }}</td>
                                    <td>{{ $pia->address }}</td>
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