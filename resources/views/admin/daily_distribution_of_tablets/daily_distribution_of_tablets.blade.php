@extends('layouts.master')
@section('title', 'Daily Distribution of Tablets')
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
            <h4 class="text-center fw-bold">SF 4.8A: Daily Distribution Of Tablets</h4><br>
            <form action="" method="">
            <div class="row d-flex justify-content-between">
                <div class="col-md-3">
                    <label for="" class="m-2">Batch No.</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Batch 1</option>
                        <option value="">Batch 2</option>
                        <option value="">Batch 3</option>
                    </select>       
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Date:</label><br>
                    <input type="date" name="" id="" class="form-control">   
                </div>
            </div><br><br>
            {{-- <h5>Have the following items been received by the candidates (yes/No)</h5> --}}
               <hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Sno.</th>
                            <th>Tablet code</th>
                            <th>Name of the candidate</th>
                            <th>Receiving signature</th>
                            <th>Returning signature</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="1">1</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Tablet Code"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Candidate Name"></td>
                                <td><input type="button" name="" id="rec_btn1" class="btn btn-dark text-white rec_btn" value="Receive"></td>
                                <td><input type="button" name="" id="ret_btn1" class="btn btn-dark text-white ret_btn" value="Return"></td>
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

                    $('tbody').append('<tr><td id="'+sno+'">'+sno+'</td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Tablet Code"></td><td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Candidate Name"></td><td><input type="button" name="" id="rec_btn'+sno+'" class="btn btn-dark text-white" value="Receive"></td><td><input type="button" name="" id="ret_btn'+sno+'" class="btn btn-dark text-white" value="Return"></td><td><button class="btn btn-danger text-white rem_data" data-id="'+sno+'" name="remove" data-target="tr">Remove</button></td></tr>');
                    
                    $('button[data-id='+sno+']').click(function(e){
                        e.preventDefault();
                        $('#'+sno).parent().remove();
                    });

                    $('#ret_btn'+sno).click(function(e){
                        e.preventDefault();
                        $(this).attr('value','Returned');
                    });
                    $('#rec_btn'+sno).click(function(e){
                        e.preventDefault();
                        $(this).attr('value','Received');
                    });
            });

            $('#ret_btn1').click(function(e){
                e.preventDefault();
                $(this).attr('value','Returned');
            });
            $('#rec_btn1').click(function(e){
                e.preventDefault();
                $(this).attr('value','Received');
            });

            });

            
        </script>