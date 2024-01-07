<script src="{{asset('assets/js/oneui.app.min.js')}}"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>


<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<!-- General Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<!-- Page JS Code -->
{{-- <script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
 --}}
 <!-- Axios  -->
 <script src="{{ asset('assets/js/plugins/axios/dist/axios.min.js') }}"></script>
 <!-- SweetAlert2 js -->
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/chart.js/chart.umd.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/select2/js/select2.min.js') }}"></script>

@stack('page-scripts')