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
                <div class="col-md-4">
                    <label for="" class="m-2">Batch No.</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Batch 1</option>
                        <option value="">Batch 2</option>
                        <option value="">Batch 3</option>
                    </select>       
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Batch Start Date</label><br>
                    <input type="date" class="form-control" name="" id="" placeholder="Enter Candidate Name">
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Trade</label><br>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Trade Name">
                </div>
            </div><br><br>
            <h5>Have the following items been received by the candidates (yes/No)</h5>
               <hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>Select</th>
                            <th>Sno.</th>
                            <th>Candidate Name</th>
                            <th>Candidate Id No.</th>
                            <th>ID</th>
                            <th>Uniform</th>
                            <th>TLM</th>
                            <th>Entitlements List</th>
                            <th>Training Plan</th>
                            <th>List of Contacts</th>
                            <th>Information of Trade</th>
                            <th>Do & Don'ts List</th>
                            <th>Signature</th>
                        </thead>
                        <tbody>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>1</td>
                            <td>Ankit</td>
                            <td>5547899</td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td><select name="" id=""><option value="yes">Yes</option><option value="no">No</option></select></td>
                            <td>signature</td>
                            {{-- <td class="text-center" colspan="10">
                                First Select Batch No
                            </td> --}}
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