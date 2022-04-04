@extends('layouts.master')
@section('title', 'Create Project')
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
                        <div class="col-sm-4 mb-4 ">
                            <ol class="breadcrumb float-sm-left" style="background-color: #6b8ed6;border-radius: 5px;">
                                <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                    <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">Project/Sanction Order</a></li>
                                    <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('project_form')}}" ><b>Add Project</b></a>
                                </li>
                            </ol>
                        </div>
                            <h3 class="text-center fw-bold">Project/Sanction Order Details</h3><br>
                            <form action="{{ route('create_project') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    @if (session('alert_status'))
                                        <h6 class="alert alert-success">{{ session('alert_status') }}</h6>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                                    @endif
                                    <div class="col-md-6">
                                        <label for="" class="m-2">Name of PIA</label><br>
                                      
                                       
                                            @foreach ($pia as $pia)
                                            <input type="hidden" name="pia_id" value="{{ $pia->getPia->id }}">
                                            <input type="text" name="pia_names" value="{{ $pia->getPia->pia_name }}" readonly class="form-control">
                                            @endforeach
                                     
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="m-2">Scheme Name</label><br>
                                        <select name="scheme_id" class="form-control" style="background-color:white;">
                                            <option value="Not Selected">Select Scheme Name</option>
                                            @foreach ($get_scheme as $scheme)
                                                <option value="{{ $scheme->id }}">{{ $scheme->scheme_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-4">
                                      <label for="" class="m-2">Project Name (same as sanction )</label><br>
                                      <input type="text" class="form-control" name="proj_name"
                                          placeholder="Enter Project Name">
                                    </div> -->
                                    <div class="col-md-6">
                                        <label for="" class="m-2">Sanction Order No.</label><br>
                                        <input type="text" class="form-control" max="{{date("Y-m-d")}}" name="sac_order_no"
                                            placeholder="Enter Sanction Order No.">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="m-2">Sanction Order Date</label><br>
                                        <input type="date" class="form-control" max="{{date("Y-m-d")}}" name="sac_order_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="m-2">Proposal Code</label><br>
                                        <input type="text" class="form-control" name="pro_code"
                                            placeholder="Enter Proposal Code">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="m-2">PAC/EC Minutes Date</label><br>
                                        <input type="date" class="form-control" name="pac_date">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">State</label><br>
                                        <select name="state_id" id="state_id" class="form-control"
                                            style="background-color:white;">
                                            <option value="Not Selected">Select State Name</option>
                                            @foreach ($get_state as $state)
                                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">District</label><br>
                                        <select name="district_id" id="district_id" class="form-control" required
                                            style="background-color:white;">
                                            <option value="Not Selected">Select District Name</option>
                                            {{-- @foreach ($get_district as $dist)
                                                <option value="{{ $dist->id }}">{{ $dist->district_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Block</label><br>
                                        <select name="block_id" id="block_id" class="form-control" required
                                            style="background-color:white;">
                                            <option value="Not Selected">Select Block Name</option>
                                            {{-- @foreach ($get_block as $block)
                                                <option value="{{ $block->id }}">{{ $block->block_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Total Project Duration(In Months)</label><br>
                                        <input type="text" class="form-control number_validation" maxlength="4" name="proj_duration" required
                                            placeholder="Enter Project Duration">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Total Target</label><br>
                                        <input type="text" class="form-control number_validation" maxlength="5" name="total_target" required
                                            placeholder="Enter Total Target">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Placement Target</label><br>
                                        <input type="text" class="form-control number_validation" maxlength="5" name="place_target" required
                                            placeholder="Enter Placement Target">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Total Project Cost(In Rs)</label><br>
                                        <input type="text" id="proj_cost" class="form-control number_validation"  maxlength="9" name="proj_cost" required
                                            placeholder="Enter Total Project Cost">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Central Share(In Rs)</label><br>
                                        <input type="text" class="form-control number_validation"  maxlength="9" name="central_share" required
                                            placeholder="Enter Centre Share">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">State Share(In Rs)</label><br>
                                        <input type="text" class="form-control number_validation" maxlength="9" name="state_share" required
                                            placeholder="Enter State Share">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">MPR Project Id</label><br>
                                        <input type="text" class="form-control" name="mpr_proj_id" required
                                            placeholder="Enter MPR Project Id">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Consortium Partnership</label><br>
                                        <select name="con_part" class="form-control" style="background-color:white;">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="m-2">Consortium Partner PRN</label><br>
                                        <input type="text" class="form-control" name="con_part_no"
                                            placeholder="Enter Consortium Partner PRN">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="m-2">Project Application Document <span style="font-size: 14px;font-weight: 600;color: #ee1201;">(Document size should be less than 1MB)</span></label><br>
                                        <input type="file" name="project_doc" accept="application/pdf"
                                            class="form-control " style="background-color:white;" required>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <label for="" class="m-2">Description</label><br>
                                        <textarea name="proj_description" required placeholder="  "  rows="3" style="width:100%; border-radius: 4px; border:1px solid #dee2e6;padding-left: 10px; font-size: 14px;"></textarea>
                                    </div> --}}
                                </div><br><br>
                                <div class="row">
                                    <table class="table table-bordered text-center">
                                        <tr class="bg-dark text-white">
                                            <th rowspan="2"></th>
                                            <th rowspan="2">Target</th>
                                            <th colspan="5">Category-wise Target</th>
                                            <th rowspan="2">Placement</th>
                                        </tr>
                                        <tr class="bg-dark text-white">
                                            <th>SC</th>
                                            <th>ST</th>
                                            <th>Others</th>
                                            <th>Minorities</th>
                                            <th>Women</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <th><input type="hidden" name="cat_type[]" value="Sanctioned">Sanctioned</th>
                                                <td><input type="text" name="target_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="sc_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="st_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="others_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="minorities_no[]" class="form-control number_validation">
                                                </td>
                                                <td><input type="text" name="women_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="placement_no[]" class="form-control number_validation">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><input type="hidden" name="cat_type[]" value="Proposed">Proposed</th>
                                                <td><input type="text" name="target_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="sc_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="st_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="others_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="minorities_no[]" class="form-control number_validation">
                                                </td>
                                                <td><input type="text" name="women_no[]" class="form-control number_validation"></td>
                                                <td><input type="text" name="placement_no[]" class="form-control number_validation">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><br>
                                <button type="submit" class="text-light btn btn-lg btn-success btn-icon-text">
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
    $(document).ready(function () {
            $('.number_validation').on('keyup', function () {
                if (/\D/g.test(this.value))
                 this.value = this.value.replace(/\D/g,'')
            });


            $('#state_id').on('change', function () {
                var idState = this.value;
                $("#district_id").html('');
                $.ajax({
                    url: "{{url('fetch_district')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district_id').html('<option value="">Select District</option>');
                        $.each(result, function (key, value) {
                            $("#district_id").append('<option value="' + value
                                .id + '">' + value.district_name + '</option>');
                        });
                        $('#block_id').html('<option value="">Select Block</option>');
                    }
                });
            });
            $('#district_id').on('change', function () {
                var idDistrict = this.value;
                $("#block_id").html('');
                $.ajax({
                    url: "{{url('fetch_block')}}",
                    type: "POST",
                    data: {
                        district_id: idDistrict,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#block_id').html('<option value="">Select Block</option>');
                        $.each(res, function (key, value) {
                            $("#block_id").append('<option value="' + value
                                .id + '">' + value.block_name + '</option>');
                        });
                    }
                });
            });
        });
</script>
    @endsection

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
         

    </script>
