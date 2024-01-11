<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/js/proBanner.js') }}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
    integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<script src="{{ asset('adminjs/custom.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

{!! JsValidator::formRequest('App\Http\Requests\Admin\CreateUserRequest', '#createUser') !!}
{!! JsValidator::formRequest('App\Http\Requests\Admin\EditUserRequest', '#editUser') !!}
{!! JsValidator::formRequest('App\Http\Requests\Admin\EditUserRequest', '#update_user_profile') !!}
{!! JsValidator::formRequest('App\Http\Requests\Admin\Settings\AccountSettingRequest', '#user_account_password') !!}
{!! JsValidator::formRequest('App\Http\Requests\Admin\Meter\AllocateMeterRequest', '#allocate_meter') !!}
