<!DOCTYPE html>
<html lang="en">
@section('title', 'Register')
@include('auth.customer.layouts._headerlinks')

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/logo.png') }}" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form id="register_customer" class="pt-3" action="{{ route('newcustomer.register') }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1name">Full Name *</label>
                                            <input type="text" class="form-control form-control-lg"
                                                id="exampleInputEmail1name" name="name" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1">Email *</label>
                                            <input name="email" type="email" class="form-control form-control-lg"
                                                id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1pn">Phone Number *</label>
                                            <input type="text" class="form-control form-control-lg"
                                                id="exampleInputEmail1pn" name="phone_number"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmaila">Address *</label>
                                            <input name="address" type="text" class="form-control form-control-lg"
                                                id="exampleInputEmaila" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1p1">Password *</label>
                                            <input type="password" class="form-control form-control-lg"
                                                id="exampleInputEmail1p1" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1p2">Confirm Password
                                                *</label>
                                            <input name="confirm_password" type="password"
                                                class="form-control form-control-lg" id="exampleInputEmail1p2"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <input type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        value="Sign Up">
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>

                                <div class="text-center mt-4 fw-light">
                                    Already have an account? <a href="{{ route('customer.login') }}"
                                        class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @include('auth.customer.layouts._footerlinks')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\Frontend\CreateCustomerRequest', '#register_customer') !!}
</body>

</html>
