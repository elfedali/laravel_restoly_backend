@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Edit service #{{ $service->id }}
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('web.service.update', $service) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Service name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="service"
                                value="{{ old('name', $service->name) }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- slug --}}
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                value="{{ old('slug', $service->slug) }}">
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        {{-- description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ old('description', $service->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- language  select --}}
                        <?php $languages = App\Models\Language::all(); ?>
                        <div class="mb-3">
                            <label for="language" class="form-label">Language <span class="text-danger">*</span></label>
                            <select name="language" id="language" class="form-control">
                                <option value="">Select Language</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->slug }}"
                                        {{ old('language', $service->language) == $language->slug ? 'selected' : '' }}>
                                        {{ $language->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('language')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- is_active --}}
                        <div class="mb-3">
                            <label for="is_active" class="form-label">Is Active <span class="text-danger">*</span></label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1" {{ old('is_active', $service->is_active) == 1 ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('is_active', $service->is_active) == 0 ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                            @error('is_active')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>






                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('web.service.index') }}" class="btn btn-link">Cancel</a>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
