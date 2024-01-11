@extends('admin.master')
@section('title', 'Account Password')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">User Account</h4>
                        <p class="card-description">
                            Update User Account Password
                        </p>
                        <form id="user_account_password" action="{{ route('users.update.passwords', $admin->id) }}"
                            method="post" class="forms-sample">
                            @csrf

                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Old Password</label>
                                        <input type="text" name="old_password" class="form-control"
                                            id="exampleInputPassword4" placeholder="Old Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword5">New Password</label>
                                        <input type="text" name="new_password" class="form-control"
                                            id="exampleInputPassword5" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword6">Confirm New Password</label>
                                        <input type="text" name="confirm_password" class="form-control"
                                            id="exampleInputPassword6" placeholder="Confirm New Password">
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
