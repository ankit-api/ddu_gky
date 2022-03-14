@extends('layouts.master_print')
@section('print_body_section')
<div class="row">
    <div class="col-12 text-center">
        <h4 class="m-0">SF 6.1B: Letter from SRLM regarding mobilization plan</h4>
        <span>(To be printed on SRLM Letterhead)</span>
    </div>
    <div class="col-11 mt-5 mx-auto">
        <p>
            To,<br><br>
            Name of the PIA  <br>
            Designation <br>
            Organization <br>
            Address <br><br>
            <span style="font-weight: bold">Subject:</span> Information on mobilization plan for the _______________ (Name of State)<br>
            <span style="font-weight: bold">Reference:</span> Your letter No ________________ dated ___________<br><br>
            Dear Sir,<br><br>
            I invite your kind attention to the reference cited. You should mobilise the candidates as per the details given below.<br><br>
            <table class="table table-bordered">
                <thead>
                    <th>S.No.</th>
                    <th>Name of the district</th>
                    <th>Names of Panchayats</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ankit Bisht</td>
                        <td>Gram Panchayat</td>
                    </tr>
                </tbody>
            </table><br>
            A copy of this letter is being sent to the District Administration to help you with the mobilisation.<br><br>
            <div class="text-center">Or</div><br><br>
            You are requested to select the Panchayats with which you would like to work and inform us and the district administration. A copy of the letter is being forwarded to District Administration to help you in implementing the mobilisation plan.<br><br>
            Yours sincerely,<br><br>
            Name<br>
            Designation
        </p>
    </div>
</div>
@endsection