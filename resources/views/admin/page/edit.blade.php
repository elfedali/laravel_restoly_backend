@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Edit Page
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('web.page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- title --}}
                            <div class="mb-3">
                                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                    value="{{ old('title', $page->title) }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- body textarea --}}
                            <div class="mb-3">
                                <label for="body" class="form-label">Body <span class="text-danger">*</span></label>
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body', $page->body) }}</textarea>
                                @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            {{-- position integer --}}

                            <div class="mb-3">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="position" name="position"
                                    placeholder="Position" value="{{ old('position', $page->position) }}">
                                @error('position')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- thumbnail --}}
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail <span
                                        class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                    placeholder="Thumbnail" value="{{ old('thumbnail', $page->thumbnail) }}">
                                @error('thumbnail')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- locale --}}
                            <div class="mb-3">
                                <label for="locale" class="form-label">Locale <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="locale" name="locale"
                                    placeholder="Locale" value="{{ old('locale', $page->locale) }}">
                                @error('locale')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- is_active --}}
                            <div class="mb-3">
                                <label for="is_active" class="form-label">Is Active <span
                                        class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ old('is_active', $page->is_active) == 1 ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="0" {{ old('is_active', $page->is_active) == 0 ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                                @error('is_active')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('web.page.index') }}" class="btn btn-link">Cancel</a>

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
