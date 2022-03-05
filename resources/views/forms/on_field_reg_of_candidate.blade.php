@extends('layouts.master')

@section('title')
On Field Registration of Candidate
@endsection

@section('content')
<div class="col-md-8 mx-auto main_table border border-dark p-3">
    <div class="row">
        <div class="col-md-4">
            <label for="can_name">Name of Candidates</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_name" id="can_name" placeholder="Enter Candidate Name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_loc">Village/GP/Block</label>
        </div>
        <div class="col-md-8 form-group">
            <textarea class="form-control" name="can_loc" id="can_loc" placeholder="Enter Village Name"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_mob_date">Date of mobilization</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="date" class="form-control" name="can_mob_date" id="can_mob_date">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_dob">Date of Birth</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_dob" id="can_dob">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_age">Age</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="number" class="form-control" name="can_age" id="can_age" placeholder="Enter Candidate Age">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_gender">Gender</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_gender" id="can_gender">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_cat">Category(SC/ST/OBC)</label>
        </div>
        <div class="col-md-8 form-group">
            <select name="can_cat" id="can_cat" class="form-control">
                <option value="">SC</option>
                <option value="">ST</option>
                <option value="">OBC</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_pwd">Category(PWD)</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_pwd" id="can_pwd" placeholder="Enter Candidate PWD type name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_min">Minority</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_min" id="can_min">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_high">Highest Education</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_high" id="can_high" placeholder="Enter Candidate Highesht Education">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_ref_stk">Referring Stakeholder</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_ref_stk" id="can_ref_stk" placeholder="Enter Candidate Referring Stakeholder Name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_add">Address</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_add" id="can_add">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_cont_det">Contact details</label>
        </div>
        <div class="col-md-8 form-group">
            <input type="text" class="form-control" name="can_cont_det" id="can_cont_det" placeholder="Enter Candidate Contact Details">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="can_remarks">Remarks</label>
        </div>
        <div class="col-md-8 form-group">
            <textarea class="form-control" name="can_remarks" id="can_remarks" placeholder="Enter Remarks"></textarea>
        </div>
    </div>
</div>
@endsection

