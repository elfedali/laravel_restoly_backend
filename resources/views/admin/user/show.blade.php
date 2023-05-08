@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Show user #{{ $user->id }}
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th> ID </th>
                                <td> {{ $user->id }} </td>
                            </tr>
                            <tr>
                                <th> Email </th>
                                <td> {{ $user->email }} </td>
                            </tr>
                            <tr>
                                <th> Is Active </th>
                                <td>
                                    @if ($user->is_active == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th> Created At </th>
                                <td> {{ $user->created_at }} </td>
                            </tr>
                            <tr>
                                <th> Updated At </th>
                                <td> {{ $user->updated_at }} </td>
                            </tr>
                            <tr>
                                <th>Role </th>
                                <td> {{ $user->role }} </td>
                            </tr>

                        </table>
                        <a href="{{ route('web.user.edit', $user->id) }}" class="btn btn-link ">Edit</a>
                        <a href="{{ route('web.user.index') }}" class="btn btn-link">Cancel</a>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
