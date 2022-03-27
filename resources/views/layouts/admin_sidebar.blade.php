<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#c6cbc6;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item nav-category">UI Elements</li> -->


 <!-- Master Menu -->
 <hr>
 <h4 style="padding:10px 0px 0px 20px;">Master</h4>
 <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">User Manager</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic16" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">PIA</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic16">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('pia_form')}}">Add PIA</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('pia_list')}}">PIA List</a></li>
                  </ul>
                </div></li>
                 <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic15" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Project</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic15">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('project_form')}}">Add Project</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('project_list')}}">Project List</a></li>
                 
                  </ul>
                </div></li>
               
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic14" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Centre</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic14">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('centre_form')}}">Add Centre</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('centre_list')}}">Centre List</a></li>
                  </ul>
                </div></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic17" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Mobilizer</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic17">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('mobilizer_form')}}">Add Mobilizer</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('mobilizer_list')}}">Mobilizer List</a></li>
                  </ul>
                </div></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic18" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Q-team Member</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic18">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('q_team_member_form')}}">Add Q-team Member</a></li>
                  </ul>
                </div></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic19" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Centre Incharge</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic19">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('centre_incharge_form')}}">Add Centre Incharge</a></li>
                  </ul>
                </div></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic20" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">Trainer</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic20">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('trainer_form')}}"> Add Trainer</a></li>
                  </ul>
                </div></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="collapse" href="#ui-basic21" aria-expanded="false" aria-controls="ui-basic">
                  <span class="menu-title">MIS</span>
                  <i class="menu-arrow"></i> 
                </a>
                <div class="collapse" id="ui-basic21">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('mis_form')}}">Add MIS</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('mis_list')}}">MIS List</a></li>
                  </ul>
                </div></li>
              </ul>
            </div>
          </li>  
          
 
          
          <!-- Staff Menu -->
          <!-- <hr>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
               
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">staff List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('deployed_staff_trade') }}">Summary of Staff Deployed</a></li>
              </ul>
            </div>
          </li>   -->
<!-- Student Registration  -->
<hr>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Registration</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('candidate_register_list') }}">Candidate Register List</a></li>
              </ul>
            </div>
          </li>

          <!-- Candidate Menu -->
          <hr>
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


<!-- Aptitude  -->
          <hr>
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
          <hr>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Batch</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('batch_form')}}">Create Batch</a></li> --}}
                <li class="nav-item"> <a class="nav-link" href="{{ route('batch_list')}}">Batch List</a></li>
              </ul>
            </div>
          </li>
<!-- Addmission  -->
          <hr>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Admission</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('candidate-admission') }}">Candidate Addmission </a></li> --}}
                <li class="nav-item"> <a class="nav-link" href="{{ route('admission_list') }}">Addmission List</a></li>
              </ul>
            </div>
          </li>

          <!-- Assessment  -->
          <hr>
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
 <hr>
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
 <hr>
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
          <hr>
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
<hr>
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
<hr>
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
<hr>
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
<hr>
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
<style>
  hr{
    margin: 0.1rem 0px;
  }
</style>