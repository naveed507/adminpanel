@extends('admin.master')
@section('title', 'Allocated Meters')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('allocate-meter') }}" class="btn btn-primary" style="float: right">
                                    Allocate Meter To Customer</a>
                            </div>
                        </div>

                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped" id="userstable">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Customer
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Point No
                                        </th>
                                        <th>
                                            Serial No
                                        </th>
                                        <th>
                                            Reference No
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customerMeters as $key => $meter)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $meter->customerdetail->name }}</td>

                                            <td>{{ $meter->metertype->type }}</td>
                                            <td>{{ $meter->meter_point_number }}</td>
                                            <td>{{ $meter->meter_serial_number }}</td>
                                            <td>{{ $meter->meter_reference }}</td>
                                            <td>
                                                @if ($meter->status == 'ACTIVE')
                                                    <label class="badge badge-success">Active</label>
                                                @else
                                                    <label class="badge badge-warning">In Active</label>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('allocated-meter.edit', $meter->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                {{-- <a href="javascript:void(0);" class="text-decoration-none"
                                                    onclick="deleteRecord({{ $user->id }}, '/admin/users/')">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                </a> --}}

                                                <button onclick="deleteRecord({{ $meter->id }}, '/admin/users/')"
                                                    class="btn btn-sm btn-danger "><i class="fas fa-trash-restore-alt"></i>
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- Button trigger modal -->


                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
