@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Edit user password
                    <div>
                        <small class="text-mute h6 fw-normal">ID : {{ $user->id }} &nbsp; &nbsp;
                            email : {{ $user->email }}</small>
                    </div>
                </h1>
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
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('web.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- password --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- password_confirmation --}}

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Password Confirmation <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Password Confirmation">
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update password</button>
                            <a href="{{ route('web.user.index') }}" class="btn btn-link">Cancel</a>

                            {{-- TODO : if is the connected user --}}
                        </form>
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
