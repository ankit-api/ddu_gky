@extends('layouts.master')
@section('title', 'Deployed Staff Trade')
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
            <h4 class="text-center fw-bold">SF 5.1E1: Summary of staff deployed at the training centre</h4><br>
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
                    <table class="table table-bordered">
                        <thead>
                            <th>Sno.</th>
                            <th>Name of the trade</th>
                            <th>Full Name</th>
                            <th>Highest qualification</th>
                            <th>Total Years Of Experience</th>
                            <th>Date of Joining</th>
                            <th>Whether ToT completed(yes/no)</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="1">1</td>
                                <td>Centre in Charge</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="2">2</td>
                                <td>MIS in Charge</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <th colspan="7">Trainer Detail</th>
                            </tr>
                            <tr>
                                <td id="3">3</td>
                                <td>IT Skills</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="4">4</td>
                                <td>Soft Skills</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="5">5</td>
                                <td>English Skills</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="6">6</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Domain Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="7">7</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Domain Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <th colspan="7">Other Staff</th>
                            </tr>
                            <tr>
                                <td id="8">8</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Staff Designation"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="9">9</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Staff Designation"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            </tr>
                            <tr>
                                <td id="10">10</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Staff Designation"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Full Name"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Highesht Qualification"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Total Experience in years"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><select class="form-control" style="background-color:white;" name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
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