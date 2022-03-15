@extends('layouts.master')
@section('title', 'Items Given To Candidates')
@section('admin_dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel ">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
            <div class="container col-sm-12">
            <h4 class="text-center fw-bold">SF 5.1K: Checklist of items given to candidates</h4><br>
            <form action="" method="">
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="m-2">Batch No.</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Batch 1</option>
                        <option value="">Batch 2</option>
                        <option value="">Batch 3</option>
                    </select>       
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Name of Domain</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Domain Name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Training Start Date</label><br>
                    <input type="date" class="form-control" name="" id="">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Training End Date</label><br>
                    <input type="date" class="form-control" name="" id="">
                </div>
            </div><br><br>
            {{-- <h5>Have the following items been received by the candidates (yes/No)</h5> --}}
               <hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Sno.</th>
                            <th>Company Name and Address</th>
                            <th>Department Name</th>
                            <th>Supervisor Name and Contact No.</th>
                            <th>No. of Candidates Required</th>
                            <th>Nature of OJT</th>
                            <th>Stipend to be paid(if any)</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="1">1</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Company Name and Address"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Department Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Supervisor Name and Contact No."></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter No. of Candidates Required"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Department Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Stipend to be paid(if any)"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Duration"></td>
                                <td><button class="btn btn-info text-white add_more">Add More</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-3">
                    <input type="submit" value="Submit" class="btn btn-lg btn-primary text-white">
                </div>
            </div>
            </form>
               
              </div>
            </div> 
          </div>
        </div>
        @endsection   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                

                $('.add_more').click(function(e){
                    e.preventDefault();
                    var sno = $('tbody tr:last-child td:first-child').html();
                    sno = parseInt(sno)+1;

                    $('tbody').append('<tr><td id="'+sno+'">'+sno+'</td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Company Name and Address"></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Department Name"></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Supervisor Name and Contact No."></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter No. of Candidates Required"></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Department Name"></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Stipend to be paid(if any)"></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Duration"></td><td><button class="btn btn-danger text-white rem_data" data-id="'+sno+'" name="remove" data-target="tr">Remove</button></td></tr>');
                    
                    $('button[data-id='+sno+']').click(function(e){
                        e.preventDefault();
                        $('#'+sno).parent().remove();
                    });
                });

            });
        </script>