@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Create Kitchen
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action={{ route('web.kitchen.store') }} method="POST">
                            @csrf
                            {{-- name  --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Kitchen <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Kitchen" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- slug --}}
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                    value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- description --}}
                            <div class="mb-3">
                                <label for="description" class="form-label">Description <span
                                        class="text-danger">*</span></label>
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- language --}}
                            <div class="mb-3">
                                <label for="language" class="form-label">Language <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="language" name="language"
                                    placeholder="Language" value="{{ old('language') }}">
                                @error('language')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ route('web.kitchen.index') }}" class="btn btn-link">Cancel</a>
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
