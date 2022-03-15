<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#c6cbc6;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item nav-category">UI Elements</li> -->


 <!-- Master Menu -->
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Master</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-pia') }}">Add PIA</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-project') }}">Add Project</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-centre')}}">Add Centre</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-qteam-member') }}">Add Q-team Member</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-centre-incharge') }}">Add Centre Incharge</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Project</a></li> -->
              </ul>
            </div>
          </li>  
          
 <!-- Centre Menu -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Centre</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-centre')}}">Add Centre</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Centre List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('centre_status_of_15_days')}}">Centre Status</a></li>
              </ul>
            </div>
          </li> 
          
          <!-- Staff Menu -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-trainer') }}">Add Staff</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">staff List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('deployed_staff_trade') }}">Summary of Staff Deployed</a></li>
              </ul>
            </div>
          </li>  

          <!-- Candidate Menu -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Candidate</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic11">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Candidate List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('candidate_feedback') }}">Candidate Feedback Form</a></li>
              </ul>
            </div>
          </li>  

<!-- Student Registration  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Registration</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('candidate-register') }}">Student Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Student Register List</a></li>
              </ul>
            </div>
          </li>
<!-- Aptitude  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Aptitude</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Student Register</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Apptitude Result List</a></li>
              </ul>
            </div>
          </li>
<!-- Batch  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Batch</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('create-batch')}}">Create Batch</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Batch List</a></li>
              </ul>
            </div>
          </li>
<!-- Addmission  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Addmission</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('candidate-admission') }}">Candidate Addmission </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Addmission List</a></li>
              </ul>
            </div>
          </li>

          <!-- Assessment  -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Evaluation and Assessment</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('evaluation_and_assessment_details') }}">Assessment Details</a></li>
              </ul>
            </div>
          </li>

 <!-- Hostel  -->
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Hostel</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic7">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Hostel Details</a></li>
              </ul>
            </div>
          </li>  
 <!-- Study Material  -->
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Study Material </span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic8">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Study Material  List</a></li>
              </ul>
            </div>
          </li> 
          <!-- Items Material  -->
 <li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic">
    <i class="menu-icon mdi mdi-floor-plan"></i>
    <span class="menu-title">Items </span>
    <i class="menu-arrow"></i> 
  </a>
  <div class="collapse" id="ui-basic9">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ route('items_given')}}">Items Given</a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('items_failure')}}">Items Failure</a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('daily_distribution_of_tablets')}}">Daily Tablet Distribution </a></li>
    </ul>
  </div>
</li> 
<!-- OJT Section  -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic10" aria-expanded="false" aria-controls="ui-basic">
    <i class="menu-icon mdi mdi-floor-plan"></i>
    <span class="menu-title">On The Job Training </span>
    <i class="menu-arrow"></i> 
  </a>
  <div class="collapse" id="ui-basic10">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ route('ojt_plan_for_batch')}}">OJT Batch Plan</a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('verification_for_ojt')}}">OJT verification</a></li>
    </ul>
  </div>
</li> 

<!-- Assessment  -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic13" aria-expanded="false" aria-controls="ui-basic">
    <i class="menu-icon mdi mdi-floor-plan"></i>
    <span class="menu-title">Inspection</span>
    <i class="menu-arrow"></i> 
  </a>
  <div class="collapse" id="ui-basic13">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ route('inspection_form') }}">Inspection Form</a></li>
    </ul>
  </div>
</li>
<!-- Certificate -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic13" aria-expanded="false" aria-controls="ui-basic">
    <i class="menu-icon mdi mdi-floor-plan"></i>
    <span class="menu-title">Certificate</span>
    <i class="menu-arrow"></i> 
  </a>
  <div class="collapse" id="ui-basic13">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ route('create-certificate-distribution') }}">Certificate Distribution</a></li>
    </ul>
  </div>
</li>
<!-- Letter -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic13" aria-expanded="false" aria-controls="ui-basic">
    <i class="menu-icon mdi mdi-floor-plan"></i>
    <span class="menu-title">Letter</span>
    <i class="menu-arrow"></i> 
  </a>
  <div class="collapse" id="ui-basic13">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ route('letter-to-srlm') }}">Letter to SRLM</a></li>
    </ul>
  </div>
</li>

        </ul>
    </nav>        
