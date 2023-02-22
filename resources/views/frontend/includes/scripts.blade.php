 <!-- jQuery -->
 <script src="{{asset('frontend/plugins/jquery/jquery.min.js')}}"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{asset('frontend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
$.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <!-- ChartJS -->
 <script src="{{asset('frontend/plugins/chart.js/Chart.min.js')}}"></script>
 <!-- Sparkline -->
 <script src="{{asset('frontend/plugins/sparklines/sparkline.js')}}"></script>
 <!-- JQVMap -->
 <script src="{{asset('frontend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
 <script src="{{asset('frontend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{asset('frontend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
 <!-- daterangepicker -->
 <script src="{{asset('frontend/plugins/moment/moment.min.js')}}"></script>
 <script src="{{asset('frontend/plugins/daterangepicker/daterangepicker.js')}}"></script>
 <!-- Datepicker cdn --> 
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> --}}
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{asset('frontend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
 <!-- Summernote -->
 <script src="{{asset('frontend/plugins/summernote/summernote-bs4.min.js')}}"></script>
 <!-- overlayScrollbars -->
 <script src="{{asset('frontend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
 <!-- AdminLTE App -->
 {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
 <script src="{{asset('frontend/dist/js/adminlte.js')}}"></script>
 <script src="{{asset('assets/js/main.js')}}"></script>
 <script src="{{asset('assets/js/datatable.js')}}"></script>
 <script src="{{asset('assets/js/custom.js')}}"></script>
 <script src="{{asset('assets/js/bootstrap3-typeahead.min.js')}}"></script>
 <!-- AdminLTE for demo purposes -->
 {{-- <script src="{{asset('frontend/dist/js/demo.js')}}"></script> --}}
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{asset('frontend/dist/js/pages/dashboard.js')}}"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script> --}}

 @stack('js')