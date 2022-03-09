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
            <h4 class="text-center fw-bold">SF 5.1T: Daily Failure Items Report</h4><br>
            <form action="" method="">
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="m-2">Centre Name</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Centre Name 1</option>
                        <option value="">Centre Name 2</option>
                        <option value="">Centre Name 3</option>
                    </select>       
                </div>
                
            </div><br><br>
            {{-- <h5>Have the following items been received by the candidates (yes/No)</h5> --}}
               <hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>Sno.</th>
                            <th>Name of Equipment</th>
                            <th>Available at the centre/residential facilities</th>
                            <th>Items reported as failed</th>
                            <th>Remarks</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="1">1</td>
                                <td><input type="text" name="" id="" class="form-control" value="Blackboard"></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Centre</option><option value="no">Residential</option></select></td>
                                <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                                <td><textarea name="" id="" cols="30" rows="5"></textarea></td>
                                <td><button class="btn btn-info text-white add_more">Add More</button></td>
                                {{-- <td class="text-center" colspan="10">
                                    First Select Batch No
                                </td> --}}
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
                    
                    $('tbody').append('<tr><td id="'+sno+'">'+sno+'</td><td><input type="text" name="" id="" class="form-control" value="Blackboard"></td><td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Centre</option><option value="no">Residential</option></select></td><td><textarea name="" id="" cols="30" rows="5"></textarea></td><td><textarea name="" id="" cols="30" rows="5"></textarea></td><td><button class="btn btn-info text-white add_more">Add More</button><button class="btn btn-danger text-white" data-id="'+sno+'" name="remove" onclick="event.preventDefault();removefield('+sno+')" data-target="tr">Remove</button></td></tr>');
                });

                function removefield(sno){
                    // alert("hello");
                    $('#'+sno).parent().parent().remove();
                }
            });
        </script>