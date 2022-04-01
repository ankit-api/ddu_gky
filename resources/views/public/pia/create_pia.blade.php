@extends('layouts.master')
@section('title', 'Add PIA')
@section('dashboard')

     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                  
                <div class="container col-sm-12 mx-auto" >
                <div class="col-sm-3 ml-2 mb-4">
                            <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">User Manager</a></li>
                                    <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">PIA</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('pia_form')}}" ><b>Add PIA</b></a>
                                </li>
                            </ol>
                        </div>
                  <h3 class="text-center fw-bold">Create PIA</h3><br>
                  <form action="{{ route('create_pia') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">     
                      @if (session('alert_success'))
                          <h6 class="alert alert-success">{{ session('alert_success') }}</h6>
                      @endif     
                      @if (session('alert_danger'))
                          <h6 class="alert alert-danger">{{ session('alert_danger') }}</h6>
                      @endif  
                      @if ($errors->any())
                          {{-- @foreach ($errors->all() as $error) --}}
                              <div class="alert alert-danger">{{$errors->first()}}</div>
                          {{-- @endforeach --}}
                      @endif 
                      <div class="col-md-6">
                        <label for="" class="m-2">PIA Code <span class="text-danger" style="display:none;" id="code_exist">(PIA Code Already Exist)</span></label><br>
                        <input name="pia_code" id="pia_code" type="text" placeholder="Enter PIA Code" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label for="" class="m-2">Name of PIA</label><br>
                          <input name ="name" type="text" placeholder="Enter PIA Name" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label for="" class="m-2">Official Email</label><br>
                        <input name ="official_email" type="email" placeholder="Enter Official Email" class="form-control">
                      </div> 
                      <div class="col-md-6">
                          <label for="" class="m-2">Contact No.</label><br>
                          <input name ="contact_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" placeholder="Enter Contact No." class="form-control">
                      </div> 
                      <div class="col-md-6">
                        <label for="" class="m-2">Landline No.</label><br>
                        <input name ="landline_no" type="text" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="15" placeholder="Enter Landline No." class="form-control">
                      </div> 
                      <div class="col-md-6">
                        <label for="" class="m-2">PIA Document <span style="font-size: 14px;font-weight: 600;color: #ee1201;">(Pdf size should be less than 1Mb)</span></label><br>
                        <input type="file" name="pia_doc" accept="application/pdf"
                            class="form-control " style="background-color:white;" required>
                      </div>
                      <div class="col-md-12">
                          <label for="" class="m-2">Address of PIA</label><br>
                          <textarea name ="address" rows="3" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;padding-left: 15px; font-size: 15px;" placeholder="Enter Full Address Of PIA"></textarea>
                      </div> 
                    </div><br>     
                    <button type="submit" id="pia_submit" class="text-light btn btn-lg btn-success btn-icon-text">
                              <i class="ti-upload btn-icon-prepend"></i>
                              Submit
                    </button>   
                  </form>           
                </div> 

              </div>
            </div>
          </div> 
        </div>
         

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $("#pia_code").keyup(function () {
        var pia_code = $('#pia_code').val();
        $.ajax({
            type: "POST",
            url: "/pia_check_duplicate",
            data: { pia_code : pia_code, _token: '{{csrf_token()}}' },
            dataType: 'json',
            success: function (data) {
                if (data > 0) {
                    $('#code_exist').css('display','');
                    $('#pia_submit').attr('disabled','disabled');
                } else {
                    $('#code_exist').css('display','none');
                    $('#pia_submit').removeAttr('disabled');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection
