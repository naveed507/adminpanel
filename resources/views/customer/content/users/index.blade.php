@extends('admin.master')
@section('title', 'Users List')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('users.create') }}" class="btn btn-primary" style="float: right">Create
                                    User</a>
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
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Mobile
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
                                    @foreach ($users as $key => $user)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->phone_number }}</td>
                                            <td>
                                                @if ($user->status == 'ACTIVE')
                                                    <label class="badge badge-success">Active</label>
                                                @else
                                                    <label class="badge badge-warning">In Active</label>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                {{-- <a href="javascript:void(0);" class="text-decoration-none"
                                                    onclick="deleteRecord({{ $user->id }}, '/admin/users/')">
                                                    <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                </a> --}}

                                                <button onclick="deleteRecord({{ $user->id }}, '/admin/users/')"
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
