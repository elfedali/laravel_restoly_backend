@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add new city </h1>
                <form action="{{ route('web.city.store', ['country' => $country]) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">City <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="City"
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

                    {{-- select country from $countries --}}
                    <div class="mb-3">
                        <select name="country_id" id="country_id" class="form-control">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    {{-- is active --}}
                    <div class="mb-3">
                        <label for="is_active" class="form-label">Is Active <span class="text-danger">*</span></label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        @error('is_active')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
