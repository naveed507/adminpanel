@extends('admin.master')
@section('title', 'Allocate Meter')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Allocate Meter</h4>
                        <p class="card-description">
                            Allocate Meter To Customer
                        </p>
                        <form id="allocate_meter" action="{{ route('allocate-meter-to-customer') }}" method="post"
                            class="forms-sample">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Meter Type</label>
                                        <select class="form-control" name="meter_type">
                                            <option selected disabled>Please Select </option>
                                            @foreach ($meterTypes as $key => $meter)
                                                <option value="{{ $meter->id }}">{{ $meter->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Users / Customers</label>
                                        <select class="form-control" name="user_id">
                                            <option selected disabled>Please Select </option>
                                            @foreach ($users as $key => $user)
                                                <option value="{{ $user->id }}">{{ $user->name }} --
                                                    {{ $user->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Meter Point Number</label>
                                        <input type="text" name="meter_point_number" class="form-control"
                                            id="exampleInputPassword2" placeholder="Meter Point Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Meter Serial Number</label>
                                        <input type="text" name="meter_serial_number" class="form-control"
                                            id="exampleInputPassword3" placeholder="Meter Serial Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Meter Reference</label>
                                        <input type="text" name="meter_reference" class="form-control"
                                            id="exampleInputPassword3" placeholder="Meter Reference">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Status</label>
                                        <select class="form-control" name="status">
                                            <option selected disabled>Please Select </option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">InActive</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">


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
