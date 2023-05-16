@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Edit language #{{ $language->id }}
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('web.language.update', $language->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Language <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Language" value="{{ old('name', $language->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- slug --}}
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                    value="{{ old('slug', $language->slug) }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- is_active --}}
                            <div class="mb-3">
                                <label for="is_active" class="form-label">Is Active <span
                                        class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1"
                                        {{ old('is_active', $language->is_active) == 1 ? 'selected' : '' }}>
                                        Active</option>
                                    <option value="0"
                                        {{ old('is_active', $language->is_active) == 0 ? 'selected' : '' }}>
                                        InActive</option>
                                </select>
                                @error('is_active')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('web.language.index') }}" class="btn btn-link">Cancel</a>



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
