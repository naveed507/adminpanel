@extends('admin.master')
@section('title', 'Meter Types')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="card-title">Meter Tpes</h4>
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
                                            Types
                                        </th>
                                        <th>
                                            Status
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meterTypes as $key => $meter)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $meter->type }}</td>

                                            <td>
                                                <label class="badge badge-success">Active</label>

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
