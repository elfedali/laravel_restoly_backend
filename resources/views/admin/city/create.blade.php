@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add new city in *{{ $country->name }}</h1>
                <form action="{{ route('web.city.store', ['country' => $country]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="country_id" value="{{ $country->id }}">
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

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
