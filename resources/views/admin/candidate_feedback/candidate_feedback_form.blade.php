@extends('layouts.master')
@section('title', 'Candidate Feedback Form')
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
            <h4 class="text-center fw-bold">SF 5.1L1: Candidate Feedback Form</h4><br>
            <form action="" method="">
            <div class="row">
                <div class="col-md-12 text-center">
                    <label for="" class="display-4">DDU-GKY<br>Ministry Of Rural Development, Government of India</label> 
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
                            </tr>
                            <tr>
                                <th>Name of training centre</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Training Centre Name"></td>
                            </tr>
                            <tr>
                                <th>Course Name</th>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Course Name"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><br>
            <div class="row mt-2">
                <div class="col-12 text-center">
                    <h3>Candidate Feedback Form</h3>
                    <label for="">Please circle the number that most closely represents your views:</label>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12">
                    <h4>1. How good was the knowledge of the trainers?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>2. Were the trainers attentive?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>3. To what extent has your understanding of the subject improved or increased as a result of the programme?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>4. To what extent have you developed your soft skills through the course?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>5. To what extent have you developed your English skills through the course?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>6. To what extent have you developed your computer skills through the course?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>7. Was the course material useful during the training?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>8. Were the entitlements provided to you on time?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>9. How effective were the practical activities?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>10. Were the training instructions easy to follow?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div><div class="col-12 mt-4">
                    <h4>11. How do you rate the training programme?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <h3 class="mt-4">Rest of the items to be filled by candidates who have undergone residential training.</h3>
                <div class="col-12 mt-4">
                    <h4>12. How were the living facilities?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>13. How was the food?</h4>
                    <span class="mx-4">5 <input type="radio" name="ques1" id=""> &nbsp;&nbsp;4 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 3 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 2 <input type="radio" name="ques1" id="">&nbsp;&nbsp; 1 <input type="radio" name="ques1" id=""></span>
                </div>
                <div class="col-12 mt-4">
                    <h4>Suggestions & Comments</h4>
                    <textarea name="" id="" cols="50" rows="7"></textarea>
                </div>
            </div>
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