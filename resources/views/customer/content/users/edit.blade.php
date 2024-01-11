@extends('admin.master')
@section('title', 'Edit User')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create User</h4>
                        <p class="card-description">
                            Create New User
                        </p>
                        <form id="editUser" action="{{ route('users.update', $finduser->id) }}" method="post"
                            class="forms-sample">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Full Name</label>
                                        <input type="text" name="name" value="{{ $finduser->name }}"
                                            class="form-control" id="exampleInputUsername1" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" value="{{ $finduser->email }}"
                                            class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Mobile Number</label>
                                        <input type="number" value="{{ $finduser->phone_number }}" name="phone_number"
                                            class="form-control" id="exampleInputPassword2" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Address</label>
                                        <input type="text" name="address" value="{{ $finduser->address }}"
                                            class="form-control" id="exampleInputPassword3" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Status</label>
                                        <select class="form-control" name="status">
                                            <option selected disabled>Please Select </option>
                                            <option @if ($finduser->status == 'ACTIVE') {{ 'selected' }} @endif
                                                value="ACTIVE">Active</option>
                                            <option @if ($finduser->status == 'INACTIVE') {{ 'selected' }} @endif
                                                value="INACTIVE">InActive</option>

                                        </select>
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
