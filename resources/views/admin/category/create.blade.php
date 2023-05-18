@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Add New Category
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('web.category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    value="{{ old('name') }}">
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
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- icon file --}}
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="icon" name="icon" placeholder="Icon"
                                    value="{{ old('icon') }}">
                                @error('icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- image  file --}}
                            <div class="mb-3">
                                <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" placeholder="Image"
                                    value="{{ old('image') }}">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- color --}}
                            <div class="mb-3">
                                <label for="color" class="form-label">Color <span class="text-danger">*</span></label>
                                <input type="color" class="form-control" id="color" name="color" placeholder="Color"
                                    value="{{ old('color') }}">
                                @error('color')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- position --}}
                            <div class="mb-3">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="position" name="position"
                                    placeholder="Position" value="{{ old('position') }}">
                                @error('position')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- language select --}}
                            <?php $languages = App\Models\Language::all(); ?>
                            <div class="mb-3">
                                <label for="language" class="form-label">Language <span class="text-danger">*</span></label>
                                <select name="language" id="language" class="form-control">
                                    <option value="">Select Language</option>
                                    @foreach ($languages as $language)
                                        <option value="{{ $language->slug }}"
                                            {{ old('language') == $language->slug ? 'selected' : '' }}>
                                            {{ $language->name }}</option>
                                    @endforeach
                                </select>
                                @error('language')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- parent_id --}}
                            <?php $categories = App\Models\Category::all(); ?>
                            <div class="mb-3">
                                <label for="parent_id" class="form-label">Parent Category <span
                                        class="text-danger">*</span></label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="">Select Parent Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('parent_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- is_active --}}
                            <div class="mb-3">
                                <label for="is_active" class="form-label">Is Active <span
                                        class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>InActive</option>
                                </select>
                                @error('is_active')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('web.category.index') }}" class="btn btn-link">Cancel</a>
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
