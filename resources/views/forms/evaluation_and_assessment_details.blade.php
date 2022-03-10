@extends('layouts.master')
@section('title', 'Evaluation and Assessment Details')
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
            <h4 class="text-center fw-bold">SF 5.1M: Summary of evaluation and assessment done</h4><br>
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
                <div class="col-md-4">
                    <label for="" class="m-2">Batch No.</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Batch 1</option>
                        <option value="">Batch 2</option>
                        <option value="">Batch 3</option>
                    </select>       
                </div>
            </div><br>
               <hr>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Test Type</th>
                            <th>Subject</th>
                            <th>Date of Test</th>
                            <th>Average performance of the candidates (scoring)>75/75-60/59-50/<50 </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Surprise Test</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Subject Name"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Average performance of Candidates"></td>
                            </tr>
                            <tr>
                                <td>Monthly Test</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Subject Name"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Average performance of Candidates"></td>
                            </tr>
                            <tr>
                                <td>Surprise Test</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Subject Name"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Average performance of Candidates"></td>
                            </tr>
                            <tr>
                                <td>Monthly Test</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Subject Name"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Average performance of Candidates"></td>
                            </tr>
                            <tr>
                                <td>Surprise Test</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Subject Name"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Average performance of Candidates"></td>
                            </tr>
                            <tr>
                                <td>Monthly Test</td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Subject Name"></td>
                                <td><input type="date" name="" id="" class="form-control" value=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Average performance of Candidates"></td>
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