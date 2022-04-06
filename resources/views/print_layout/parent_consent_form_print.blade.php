@extends('layouts.master_print')
@section('print_body_section')
<div class="row">
    <div class="col-12 text-center">
        <h4 class="m-0">SF 5.1G2: Parents’ consent form</h4><br>
        <h5>Name of the PIA</h5><br>
        <h5>DDU-GKY</h5>
        <h5>Ministry Of Rural Development, Government of India</h5>
    </div>
    <div class="col-11 mt-5 mx-auto">
        <p>
            <span style="font-weight: bold;text-align:center;">Parent’s consent form</span><br><br>
            <span style="font-weight: bold">Name of the candidate </span><u>&nbsp;{{ $cand_data->name }}&nbsp;</u>  <br>
            <span style="font-weight: bold">Candidate's father's name ___________________________</span> <br>
            <span style="font-weight: bold">Candidate's mother's name ___________________________</span> <br>
            <span style="font-weight: bold">Basic information</span> <br><br>
            a) The DDU-GKY programme is run by the Ministry of Rural Development, Government of India with to train and place rural poor youth in the age group of 18-35 years.<br>
            b) Under the DDU-GKY programme, ____________________________ (Name of PIA) will provide skills training in ______________________(Name of courses) for __________________________ (duration of courses in hours). <br>
            c)  On completion of the training, the PIA will assist to place him/her in a job as per his/her proficiency for a monthly minimum salary of ₹. 6,000 per month. <br>
            d) During training, your ward will be trained on the course specific skills; soft skills, life skills, and computer handling skills. <br>
            <span style="font-weight: bold;text-align:center;">Entitlements</span> <br>
            <span style="font-weight: bold;text-align:center;">Your ward is entitled to the following:</span> <br>
            1) Training without any payment. <br>
            2)	Free accommodation and food. If candidates opts for non-residential training ₹ 100 for 8 hours of training completed will be credited to the bank account of the candidate once in 15 days for regular training and once in a month for part time training. <br>
            3)	Candidates who complete their training and get placed will receive post placement support of <br>
                •    ₹. 1000 per month for 2 months for the Placements within District of domicile <br>
                •    ₹. 1000 per month for 3 months for the Placements within State of domicile <br>
                •    ₹. 1000 per month for 6 months for the Placements outside State of domicile <br>
            4)        All candidates will be provided an uniform on the day the training starts: <br>
                •    One pair in case of 3 month or 6 month course <br>
                •    Two pair in case of 9 month or 12 month course <br>
            5)        A bank account will be opened by the PIA for all candidates in the first month of training <br>
            6) All candidates will be assessed free of cost and those who pass will be given Training Certificate as per ________________ (NCVT/SSC) guidelines and assessed by ___________________ (assessing agency). <br>
            7) At the time of placement, candidate will be given a Preliminary Offer Letter from the PIA which lists down the expected remuneration and terms and conditions of employment. The candidate will receive this before leaving his/her native place for the job.<br>
            8) All candidates will receive training material free of cost including work books, note books and other study materials.<br>
            9) If a candidate has not received the above entitlements, he/she can call or SMS the Helpline at ______________________ to register their complaints.<br>
            <span style="font-weight: bold;text-align:center;">Your consent <br>
                If you agree to admit your child in the training programme offered by __________________ (Name of PIA) please sign below.
                </span><br>
                Parent signature _________________________ <br>
                Date: ______________________ <br>
            <span style="font-weight: bold;text-align:center;">Except this consent letter, PIA shall not take any affidavit / certificate from either the parent or the candidate. </span><br><br><br>

        </p>
    </div>
</div>
@endsection