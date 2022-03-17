@extends('layouts.master')
@section('title', 'Add Staff')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
        <div class="container col-sm-12">
                <h4 class="text-center fw-bold">SF 5.1E2: Trainers’ profile</h4><br>
        <form action="" method="">
            <div class="row">            
                <div class="col-md-4">
                    <label for="" class="m-2">Name PIA</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Prakhar Softwares</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Project Code</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Project 1</option>
                    </select> 
                </div>
                <div class="col-md-4">
                    <label for="" class="m-2">Name of Training Centre</label><br>
                    <select name="pia_name" id="" class="form-control" style="background-color:white;">
                        <option value="prakhar softwares">Centre 1</option>
                    </select> 
                </div>
            </div><br><br>
            <h5>Trainer’s profile</h5><hr>
            <div class="row">            
                <div class="col-md-3">
                    <label for="" class="m-2">Name</label><br>
                    <input type="text" class="form-control" placeholder="Enter name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Relation</label><br>
                    <select name="relation_name" id="" class="form-control" style="background-color:white;">
                        <option value=" ">Father</option>
                        <option value=" ">Mother</option>
                        <option value=" ">Husband</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Relative Name</label><br>
                    <input type="text" class="form-control" placeholder="Enter relative's name">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">If Trainer, Domain(Course)</label><br>
                    <input type="text" class="form-control" placeholder="Enter ">
                </div>
            </div><br>
             <div class="row">            
                <div class="col-md-6">
                    <label for="" class="m-2">If not the domain trainer or with additional skill</label><br>  
                    <input type="checkbox"  class="" id="" name="add_skill" value="computer skills">
                    <label class="mx-2"> Computer skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill" value="soft skills">
                    <label class="mx-2"> Soft skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill" value="english skills">
                    <label class="mx-2"> English skills </label>
                    <input type="checkbox"  class="" id="" name="add_skill" value="others">
                    <label class="mx-2"> Others </label>
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Gender</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Date of Birth</label><br>
                   <input type="date" class="form-control">
                </div>
            </div><br>
            <div class="row">            
                <div class="col-md-3">
                <label for="" class="m-2">Category</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">General</option>
                        <option value="">SC</option>
                        <option value="">ST</option>
                        <option value="">OBC</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Physical Disability</label><br>
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">No</option>
                        <option value="">Yes</option>
                    </select> 
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Physical Disability Category</label><br>
                   <input type="text" class="form-control" placeholder="Enter type of disability">
                </div>
                <div class="col-md-3">
                    <label for="" class="m-2">Adhaar no </label><br>
                  <input type="text" class="form-control" placeholder="Enter adhaar no.">
                </div>
            </div><br><br>
            <h5>Education Qualification</h5><hr> 
            <div class="row">            
                <div class="col-md-2">
                    <label class="m-2">Educational qualification</label>                    
                </div>
                <div class="col-md-2">
                    <label class="m-2">Qualification specify</label>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Board/University</label><br>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Subject</label><br>
                </div>
                <div class="col-md-2">
                    <label class="m-2">Year of passing</label>
                </div>
                <div class="col-md-1">
                    <label class="m-2">% of marks</label>
                </div>
                <div class="col-md-1">
                <label class="m-2">Action</label>
                </div>
            </div>
            <div class="qualification-div" id="qualification-div">
            <div class="row" id="1">      
                <div class="col-md-2">
                    <select name="" id="" class="form-control" style="background-color:white;">
                        <option value="">10th</option>
                        <option value="">12th</option>
                        <option value="">Graduation</option>
                        <option value="">Post Graduation</option>
                        <option value="">Other qualification</option>
                    </select> 
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Enter qualification detail">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Enter Board/University">
                </div>
                <div class="col-md-2">                    
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-2">                  
                    <input type="text" class="form-control"style="padding: 8px;"  placeholder="Enter year of passing">
                </div>
                <div class="col-md-1">                  
                    <input type="text" style="padding: 8px;" class="form-control" placeholder="Enter percentage">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-info text-white add_more1">Add More</button>
                </div>
                </div>
            </div><br>    
        

        <h5>Experience</h5><hr> 
        <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Sno.</th>
                            <th>From (month & Year)</th>
                            <th>To (month & Year)</th>
                            <th>Company name</th>
                            <th>Starting designation</th>
                            <th>Last designation</th>
                            <th>Last salary drawn</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="1">1</td>
                                <td><input type="date" name="" id="" class="form-control" value="" placeholder=""></td>
                                <td><input type="date" name="" id="" class="form-control" value="" placeholder=""></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Company Name "></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Starting designation"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Last designation"></td>
                                <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Last salary drawn"></td>
                                <td><button class="btn btn-info text-white add_more2">Add More</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <br><br>

        <h5>Other information (if any) </h5><hr> 
            <div class="row">            
                <div class="col-md-12">
                    <textarea cols="120" rows="4" placeholder="Comments.."></textarea>
                </div>
            </div><br>
               <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>
                          Submit
                </button>
                </form>
            </div> 
          </div>
        </div>
        
@endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                
                    var no1 = 1;
                    $('.add_more1').click(function(e){
                    // var sno = $(this).parent().parent().attr('id');
                    e.preventDefault();
                    // sno = parseInt(sno)+1;
                    no1 = no1+1;
                    $('#qualification-div').append(' <div class="row" id="'+no1+'"><div class="col-md-2"><select name="" id="" class="form-control" style="background-color:white;"><option value="">10th</option><option value="">12th</option><option value="">Graduation</option><option value="">Post Graduation</option><option value="">Other qualification</option></select></div><div class="col-md-2">    <input type="text" class="form-control" placeholder="Enter qualification detail"></div><div class="col-md-2">    <input type="text" class="form-control" placeholder="Enter Board/University"></div><div class="col-md-2">                       <input type="text" class="form-control" placeholder="Enter Subject"></div><div class="col-md-2">                     <input type="text" class="form-control"style="padding: 8px;"  placeholder="Enter year of passing"></div><div class="col-md-1">                     <input type="text" style="padding: 8px;" class="form-control" placeholder="Enter percentage"></div><div class="col-md-1"><button class="btn btn-danger text-white rem_data1" data-id="'+no1+'" name="remove1" data-target="tr">Remove</button></div>');

                   
                    $('.rem_data1').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');     
                        $('#'+id).remove();
                    });
                });



               
                $('.add_more2').click(function(e){
                    e.preventDefault();
                    var sno = $('tbody tr:last-child td:first-child').html();
                    sno = parseInt(sno)+1;

                    e.preventDefault();
                    // sno = parseInt(sno)+1;
                    $('tbody').append('<tr><td id="'+sno+'">'+sno+'</td> <td><input type="date" name="" id="" class="form-control" value="" placeholder=""></td>  <td><input type="date" name="" id="" class="form-control" value="" placeholder=""></td>  <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Company Name "></td>  <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Starting designation"></td>  <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Last designation"></td>  <td><input type="text" name="" id="" class="form-control" value="" placeholder="Enter Last salary drawn"></td>  <td><button class="btn btn-danger text-white rem_data1" data-id="'+sno+'" name="remove1" data-target="tr">Remove</button></div></tr>');

                    
                    $('button[data-id='+sno+']').click(function(e){
                        e.preventDefault();
                        $('#'+sno).parent().remove();
                    });
                });

                
                      
            });
    </script>