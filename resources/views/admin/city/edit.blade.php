@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit City</h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-12">
                <form action="{{ route('web.city.update', $city->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">City <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="city"
                            value="{{ old('name', $city->name) }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- slug --}}
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                            value="{{ old('slug', $city->slug) }}">
                        @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {{-- select country --}}

                    <div class="mb-3">
                        <select name="country_id" id="country_id" class="form-control">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ old('country_id', $city->country_id) == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}</option>
                            @endforeach
                        </select>

                        @error('country_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    {{-- is_active --}}
                    <div class="mb-3">
                        <label for="is_active" class="form-label">Is Active <span class="text-danger">*</span></label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="1" {{ old('is_active', $city->is_active) == 1 ? 'selected' : '' }}>
                                Active</option>
                            <option value="0" {{ old('is_active', $city->is_active) == 0 ? 'selected' : '' }}>
                                Inactive</option>
                        </select>
                        @error('is_active')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('web.city.index') }}" class="btn btn-link">Back</a>


                </form>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
