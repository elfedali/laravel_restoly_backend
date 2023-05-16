@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Users
                </h1>
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                {{-- add  user --}}
                <a href="{{ route('web.user.create') }}" class="btn btn-success float-end">
                    <i class="bi bi-plus-circle"></i> &nbsp;
                    Add user</a>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="container">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>ID</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Is Active</th>
                                    <th>Role</th>
                                    <th>City</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th class="text-end"> Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                            <td>
                                                {{-- if has profile show first_name and last_name --}}
                                                @if ($user->profile and $user->profile->first_name or $user->profile->last_name)
                                                    {{ $user->profile->first_name }} {{ $user->profile->last_name }}
                                                @else
                                                    <small class="text-muted">Not set</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                @if ($user->is_active)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->role }}
                                            </td>
                                            <td>
                                                @if ($user->profile and $user->profile->city)
                                                    {{ $user->profile->city }}
                                                @else
                                                    <span class="text-muted">Not set</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $user->created_at }}
                                            </td>
                                            <td>
                                                {{ $user->updated_at }}
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ route('web.user.show', ['user' => $user->id]) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="bi bi-pencil-square"></i> &nbsp;
                                                    Show
                                                </a>
                                                <a href="{{ route('web.user.edit', ['user' => $user->id]) }}"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="bi bi-pencil-square"></i> &nbsp;
                                                    Edit
                                                </a>
                                                <form action="{{ route('web.user.destroy', ['user' => $user->id]) }}"
                                                    method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="bi bi-trash"></i> &nbsp;
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
