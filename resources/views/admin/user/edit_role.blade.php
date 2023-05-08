@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Edit user role
                </h1>
                <div>
                    <small class="text-mute h6 fw-normal">
                        ID : {{ $user->id }} &nbsp; &nbsp;
                        email : {{ $user->email }}
                    </small>
                </div>
                <div>
                    <small class="text-mute h6 fw-normal">
                        Role : {{ $user->role }}
                    </small>
                </div>
            </div>
            <!-- /.col-6 -->
            <div class="col-6 text-end">
                <div>
                    <a href="{{ route('web.user.edit_role', $user->id) }}">Change user role</a> &nbsp;| &nbsp;
                    <a href="{{ route('web.user.edit_password', $user->id) }}">Change user password</a>
                </div>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">

                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('web.user.change_role', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- role select --}}
                            <div class="mb-3">
                                <label for="role" class="form-label">Select Role <span
                                        class="text-danger">*</span></label>
                                <select name="role" id="role" class="form-control">
                                    <option value="">-----</option>
                                    <option value="{{ App\Models\User::ROLE_SUPERADMIN }}"
                                        {{ old('role', $user->role) == App\Models\User::ROLE_SUPERADMIN ? 'selected' : '' }}>
                                        {{ App\Models\User::ROLE_SUPERADMIN }}
                                    </option>
                                    <option value="{{ App\Models\User::ROLE_ADMIN }}"
                                        {{ old('role', $user->role) == App\Models\User::ROLE_ADMIN ? 'selected' : '' }}>
                                        {{ App\Models\User::ROLE_ADMIN }}
                                    </option>
                                    <option value="{{ App\Models\User::ROLE_SUBSCRIBER }}"
                                        {{ old('role', $user->role) == App\Models\User::ROLE_SUBSCRIBER ? 'selected' : '' }}>
                                        {{ App\Models\User::ROLE_SUBSCRIBER }}
                                    </option>
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update password</button>
                            <a href="{{ route('web.user.index') }}" class="btn btn-link">Cancel</a>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
