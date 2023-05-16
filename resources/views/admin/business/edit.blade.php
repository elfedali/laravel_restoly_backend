@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Edit business #{{ $business->id }}
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('web.business.update', $business->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Business name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Business" value="{{ old('name', $business->name) }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- slug --}}
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                    value="{{ old('slug', $business->slug) }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- description --}}
                            <div class="mb-3">
                                <label for="description" class="form-label">Description <span
                                        class="text-danger">*</span></label>
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control">{{ old('description', $business->description) }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- icon file --}}
                            <div class="mb-3">
                                <div>
                                    <a target="_blank" href="{{ asset('storage/' . $business->icon) }}">
                                        <img src="{{ asset('storage/' . $business->icon) }}" alt="" width="50px">
                                    </a>
                                </div>

                                <div>
                                    <label for="icon" class="form-label">Icon <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="icon" name="icon"
                                        placeholder="Icon" value="{{ old('icon', $business->icon) }}">
                                    @error('icon')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- image file --}}
                            <div class="mb-3">
                                <div>
                                    <a target="_blank" href="{{ asset('storage/' . $business->image) }}">
                                        <img src="{{ asset('storage/' . $business->image) }}" alt=""
                                            width="50px">
                                    </a>
                                </div>

                                <div>
                                    <label for="image" class="form-label">Image <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        placeholder="Image" value="{{ old('image', $business->image) }}">
                                    @error('image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            {{-- is active --}}
                            <div class="mb-3">
                                <label for="is_active" class="form-label">Is Active <span
                                        class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="1"
                                        {{ old('is_active', $business->is_active) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0"
                                        {{ old('is_active', $business->is_active) == 0 ? 'selected' : '' }}>Inactive
                                    </option>
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
                                    placeholder="Phone One" value="{{ old('phone_one', $business->phone_one) }}">
                                @error('phone_one')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- phone_two --}}
                            <div class="mb-3">
                                <label for="phone_two" class="form-label">Phone Two <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone_two" name="phone_two"
                                    placeholder="Phone Two" value="{{ old('phone_two', $business->phone_two) }}">
                                @error('phone_two')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" value="{{ old('email', $business->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- is_verified --}}
                            <div class="mb-3">
                                <label for="is_verified" class="form-label">Is Verified <span
                                        class="text-danger">*</span></label>
                                <select name="is_verified" id="is_verified" class="form-control">
                                    <option value="1"
                                        {{ old('is_verified', $business->is_verified) == 1 ? 'selected' : '' }}>Verified
                                    </option>
                                    <option value="0"
                                        {{ old('is_verified', $business->is_verified) == 0 ? 'selected' : '' }}>Not
                                        Verified</option>
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
                                    <option value="1"
                                        {{ old('is_active', $business->is_active) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0"
                                        {{ old('is_active', $business->is_active) == 0 ? 'selected' : '' }}>Inactive
                                    </option>
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
                                    <option value="1"
                                        {{ old('is_without_reservation', $business->is_without_reservation) == 1 ? 'selected' : '' }}>
                                        Without Reservation</option>
                                    <option value="0"
                                        {{ old('is_without_reservation', $business->is_without_reservation) == 0 ? 'selected' : '' }}>
                                        With Reservation
                                    </option>
                                </select>
                                @error('is_without_reservation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- address --}}
                            <div class="mb-3">
                                <label for="address" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Address" value="{{ old('address', $business->address) }}">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- city --}}
                            <div class="mb-3">
                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="City" value="{{ old('city', $business->city) }}">
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- zip_code --}}
                            <div class="mb-3">
                                <label for="zip_code" class="form-label">Zip Code <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code"
                                    placeholder="Zip Code" value="{{ old('zip_code', $business->zip_code) }}">
                                @error('zip_code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- country --}}
                            <div class="mb-3">
                                <label for="country" class="form-label">Country <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="country" name="country"
                                    placeholder="Country" value="{{ old('country', $business->country) }}">
                                @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- latitude --}}
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Latitude <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="latitude" name="latitude"
                                    placeholder="Latitude" value="{{ old('latitude', $business->latitude) }}">
                                @error('latitude')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- longitude --}}
                            <div class="mb-3">
                                <label for="longitude" class="form-label">Longitude <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="longitude" name="longitude"
                                    placeholder="Longitude" value="{{ old('longitude', $business->longitude) }}">
                                @error('longitude')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- website --}}
                            <div class="mb-3">
                                <label for="website" class="form-label">Website <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="website" name="website"
                                    placeholder="Website" value="{{ old('website', $business->website) }}">
                                @error('website')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- facebook --}}
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    placeholder="Facebook" value="{{ old('facebook', $business->facebook) }}">
                                @error('facebook')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- twitter --}}
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    placeholder="Twitter" value="{{ old('twitter', $business->twitter) }}">
                                @error('twitter')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- instagram --}}
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    placeholder="Instagram" value="{{ old('instagram', $business->instagram) }}">
                                @error('instagram')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- linkedin --}}
                            <div class="mb-3">
                                <label for="linkedin" class="form-label">Linkedin <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    placeholder="Linkedin" value="{{ old('linkedin', $business->linkedin) }}">
                                @error('linkedin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- youtube --}}
                            <div class="mb-3">
                                <label for="youtube" class="form-label">Youtube <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="youtube" name="youtube"
                                    placeholder="Youtube" value="{{ old('youtube', $business->youtube) }}">
                                @error('youtube')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- tiktok --}}
                            <div class="mb-3">
                                <label for="tiktok" class="form-label">Tiktok <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="tiktok" name="tiktok"
                                    placeholder="Tiktok" value="{{ old('tiktok', $business->tiktok) }}">
                                @error('tiktok')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- whatsapp --}}
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    placeholder="Whatsapp" value="{{ old('whatsapp', $business->whatsapp) }}">
                                @error('whatsapp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- user_id --}}
                            <?php $users = App\Models\User::all(); ?>
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User <span class="text-danger">*</span></label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="">Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            {{ old('user_id', $business->user_id) == $user->id ? 'selected' : '' }}>
                                            {{ $user->id }} - {{ $user->email }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- category_id --}}
                            <?php $categories = App\Models\Category::all(); ?>
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category <span
                                        class="text-danger">*</span></label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $business->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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
