@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    New business
                </h1>
            </div>
            <!-- /.col-6 -->


        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('web.business.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Business name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Business name" value="{{ old('name') }}">
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
                            {{-- is_actvie --}}
                            <div class="mb-3">
                                <label for="is_active" class="form-label">Is Active <span
                                        class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ old('is_active') == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('is_active')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- phone_one --}}
                            <div class="mb-3">
                                <label for="phone_one" class="form-label">Phone One <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone_one" name="phone_one"
                                    placeholder="Phone One" value="{{ old('phone_one') }}">
                                @error('phone_one')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- phone_two --}}
                            <div class="mb-3">
                                <label for="phone_two" class="form-label">Phone Two <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone_two" name="phone_two"
                                    placeholder="Phone Two" value="{{ old('phone_two') }}">
                                @error('phone_two')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- is_verified --}}
                            <div class="mb-3">
                                <label for="is_verified" class="form-label">Is Verified <span
                                        class="text-danger">*</span></label>
                                <select name="is_verified" id="is_verified" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ old('is_verified') == 1 ? 'selected' : '' }}>Verified
                                    </option>
                                    <option value="0" {{ old('is_verified') == 0 ? 'selected' : '' }}>Not Verified
                                    </option>
                                </select>
                                @error('is_verified')
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
                                    <option value="0" {{ old('is_active') == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('is_active')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            {{-- is_without_reservation --}}
                            <div class="mb-3">
                                <label for="is_without_reservation" class="form-label">Is Without Reservation <span
                                        class="text-danger">*</span></label>
                                <select name="is_without_reservation" id="is_without_reservation" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ old('is_without_reservation') == 1 ? 'selected' : '' }}>
                                        Without Reservation</option>
                                    <option value="0" {{ old('is_without_reservation') == 0 ? 'selected' : '' }}>With
                                        Reservation</option>
                                </select>
                                @error('is_without_reservation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- address --}}
                            <div class="mb-3">
                                <label for="address" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <textarea name="address" id="address" cols="30" rows="4" class="form-control">{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- city --}}
                            <div class="mb-3">
                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="City" value="{{ old('city') }}">
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- zip_code --}}
                            <div class="mb-3">
                                <label for="zip_code" class="form-label">Zip Code <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code"
                                    placeholder="Zip Code" value="{{ old('zip_code') }}">
                                @error('zip_code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- country --}}
                            <div class="mb-3">
                                <label for="country" class="form-label">Country <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="country" name="country"
                                    placeholder="Country" value="{{ old('country') }}">
                                @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- logo --}}
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="logo" name="logo"
                                    placeholder="Logo" value="{{ old('logo') }}">
                                @error('logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- latitude --}}
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Latitude <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="latitude" name="latitude"
                                    placeholder="Latitude" value="{{ old('latitude') }}">
                                @error('latitude')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- longitude --}}
                            <div class="mb-3">
                                <label for="longitude" class="form-label">Longitude <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="longitude" name="longitude"
                                    placeholder="Longitude" value="{{ old('longitude') }}">
                                @error('longitude')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>

                            {{-- website --}}
                            <div class="mb-3">
                                <label for="website" class="form-label">Website </label>
                                <input type="text" class="form-control" id="website" name="website"
                                    placeholder="Website" value="{{ old('website') }}">
                                @error('website')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- facebook --}}
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook </label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    placeholder="Facebook" value="{{ old('facebook') }}">
                                @error('facebook')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- twitter --}}
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter </label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    placeholder="Twitter" value="{{ old('twitter') }}">
                                @error('twitter')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- instagram --}}
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram </label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    placeholder="Instagram" value="{{ old('instagram') }}">
                                @error('instagram')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- linkedin --}}
                            <div class="mb-3">
                                <label for="linkedin" class="form-label">Linkedin </label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    placeholder="Linkedin" value="{{ old('linkedin') }}">
                                @error('linkedin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- youtube --}}
                            <div class="mb-3">
                                <label for="youtube" class="form-label">Youtube </label>
                                <input type="text" class="form-control" id="youtube" name="youtube"
                                    placeholder="Youtube" value="{{ old('youtube') }}">
                                @error('youtube')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- tiktok --}}
                            <div class="mb-3">
                                <label for="tiktok" class="form-label">Tiktok </label>
                                <input type="text" class="form-control" id="tiktok" name="tiktok"
                                    placeholder="Tiktok" value="{{ old('tiktok') }}">
                                @error('tiktok')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- whatsapp --}}
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp </label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    placeholder="Whatsapp" value="{{ old('whatsapp') }}">
                                @error('whatsapp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- user_id --}}
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User <span class="text-danger">*</span></label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- category_id --}}
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category <span
                                        class="text-danger">*</span></label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ route('web.business.index') }}" class="btn btn-link">Cancel</a>





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
