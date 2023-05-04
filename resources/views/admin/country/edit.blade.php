@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Country</h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-12">
                <form action="{{ route('web.country.update', $country->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Country <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Country"
                            value="{{ old('name', $country->name) }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- slug --}}
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                            value="{{ old('slug', $country->slug) }}">
                        @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    {{-- code --}}
                    <div class="mb-3">
                        <label for="code" class="form-label">Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Code"
                            value="{{ old('code', $country->code) }}">
                        @error('code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- phone_code --}}
                    <div class="mb-3">
                        <label for="phone_code" class="form-label">Phone Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="phone_code" name="phone_code"
                            placeholder="Phone Code" value="{{ old('phone_code', $country->phone_code) }}">
                        @error('phone_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- currency --}}
                    <div class="mb-3">
                        <label for="currency" class="form-label">Currency <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="currency" name="currency" placeholder="Currency"
                            value="{{ old('currency', $country->currency) }}">
                        @error('currency')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- currency_symbol --}}
                    <div class="mb-3">
                        <label for="currency_symbol" class="form-label">Currency Symbol <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="currency_symbol" name="currency_symbol"
                            placeholder="Currency Symbol" value="{{ old('currency_symbol', $country->currency_symbol) }}">
                        @error('currency_symbol')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- is_active --}}
                    <div class="mb-3">
                        <label for="is_active" class="form-label">Is Active <span class="text-danger">*</span></label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="1" {{ old('is_active', $country->is_active) == 1 ? 'selected' : '' }}>
                                Active</option>
                            <option value="0" {{ old('is_active', $country->is_active) == 0 ? 'selected' : '' }}>
                                Inactive</option>
                        </select>
                        @error('is_active')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('web.country.index') }}" class="btn btn-link">Back</a>


                </form>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
