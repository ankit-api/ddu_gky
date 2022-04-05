<footer class="footer ">
          <div class=" d-sm-flex justify-content-center justify-content-sm-between">
            {{-- <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span> --}}
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © {{ date('Y') }} <a href="">{{ env('APP_NAME') }}</a> All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <div id="loading">
        <img id="loading-image" src="{{ asset('images/processing.gif') }}" alt="Loading..."/>
      </div>

      

  <!-- plugins:js -->
  <script src="{{ asset('/star_theme/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('/star_theme/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('/star_theme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('/star_theme/vendors/progressbar.js/progressbar.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('/star_theme/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/star_theme/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/star_theme/js/template.js') }}"></script>
  <script src="{{ asset('/star_theme/js/settings.js') }}"></script>
  <script src="{{ asset('/star_theme/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('/star_theme/js/dashboard.js') }}"></script>
  <script src="{{ asset('/star_theme/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  {{-- datatable link --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
{{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.jqueryui.min.js"></script> --}}
  <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("form").on("submit", function(){
    $("#loading").show();
  });
  $(window).on('load', function() {
    $('#loading').hide();
  })
  </script>
  <script>
    $(document).ready( function () {
      $('#display').DataTable();
      $('#table1').DataTable();
  } );
    </script>
  
</body>

</html>

