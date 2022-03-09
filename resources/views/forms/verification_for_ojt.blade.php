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
            <h4 class="text-center fw-bold">SF 4.6D: Verification For OJT</h4><br>
            <form action="" method="">
            <div class="row">
                <div class="col-md-4">
                    <label for="" class="display-3">Basic Information</label> 
                </div>
                
            </div>
            {{-- <h5>Have the following items been received by the candidates (yes/No)</h5> --}}
               <hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                            
                        <tbody>
                            <tr>
                                <th>Select Candidate Id</th>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="Candidate1">Candidate1</option><option value="Candidate2">Candidate2</option></select></td>
                                <th>Month</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Month Name"></td>
                            </tr>
                            <tr>
                                <th>Trainee Name</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Month Name"></td>
                                <th>Father's Name</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Month Name"></td>
                            </tr>
                            <tr>
                                <th>Block</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Month Name"></td>
                                <th>District</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Month Name"></td>
                            </tr>
                            <tr>
                                <th>Centre Name</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Month Name"></td>
                                <th>Training start date</th>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                            </tr>
                            <tr>
                                <th>Training end date</th>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <th>OJT start date</th>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                            </tr>
                            <tr>
                                <th>OJT end date</th>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <th>Date of verification</th>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                            </tr>
                            <tr>
                                <th>Verification time</th>
                                <td><input type="time" name="" id="" class="form-control" value=""></td>
                            </tr>
                            <tr>
                                <th colspan="2">Is the candidate available on the day of visit to the OJT location?</th>
                                <td colspan="2"><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <th colspan="2">If no,Give Reason</th>
                                <td colspan="2"><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Reason here"></td>
                            </tr>
                            <tr>
                                <th colspan="4">
                                    If yes, Interview of the candidate with a time stamped, geo tagged video device (it could be mobile, Tablet etc.) for the following;
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">When did you start your OJT?</th>
                                <td colspan="2"><input type="date" name="" id="" class="form-control" value=""></td>
                            </tr>
                            <tr>
                                <th colspan="2">What activity are you doing today?</th>
                                <td colspan="2"><textarea name="" id="" cols="60" rows="6"></textarea></td>
                            </tr>
                            <tr>
                                <th colspan="2">What activity did you do (A random day to be chosen by the system from last 6 days)?</th>
                                <td colspan="2"><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Activity"></td>
                            </tr>
                            <tr>
                                <th colspan="2">Whether the field level supervisor is nominated for the OJT?</th>
                                <td colspan="2"><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <th colspan="2">How many times during the day did the supervisor interact with you?</th>
                                <td colspan="2"><input type="text" name="" id="" class="form-control" value="" placeholder="Enter no. of interactions"></td>
                            </tr>
                            <tr>
                                <th colspan="2">Are you given sufficient instruments to work during OJT (tools, machinery, computers etc.)?
                                    </th>
                                <td colspan="2"><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <th colspan="2">Are you given enough materials to work upon?</th>
                                <td colspan="2"><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <th colspan="2">How much stipend are you eligible for?</th>
                                <td colspan="2"><input type="text" name="" id="" class="form-control" value="" placeholder="Enter stipend, you are eligible for"></td>
                            </tr>
                            <tr>
                                <th colspan="2">How much stipend are you getting?</th>
                                <td colspan="2"><input type="text" name="" id="" class="form-control" value="" placeholder="Enter stipend, you are getting"></td>
                            </tr>
                            <tr>
                                <th colspan="2">Are boarding & lodging facilities provided?</th>
                                <td colspan="2"><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
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
                

                
            });
        </script>