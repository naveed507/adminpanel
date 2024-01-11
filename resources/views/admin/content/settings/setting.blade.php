@extends('admin.master')
@section('title', 'Account Settings')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Account</h4>
                        <p class="card-description">
                            Update User Account Settings
                        </p>
                        <form id="update_user_profile" action="{{ route('users.update.settings', $admin->id) }}" method="post"
                            class="forms-sample">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Full Name</label>
                                        <input type="text" name="name" value="{{ $admin->name }}"
                                            class="form-control" id="exampleInputUsername1" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" value="{{ $admin->email }}"
                                            class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Mobile Number</label>
                                        <input type="number" value="{{ $admin->phone_number }}" name="phone_number"
                                            class="form-control" id="exampleInputPassword2" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Address</label>
                                        <input type="text" name="address" value="{{ $admin->address }}"
                                            class="form-control" id="exampleInputPassword3" placeholder="Address">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
