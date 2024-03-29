<div class="row">
    <div class="col-12 mt-4">
        <h2>Edit profile</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('web.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- first_name --}}
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="First Name" value="{{ old('first_name', $user->profile->first_name) }}">
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- last_name --}}
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            placeholder="Last Name" value="{{ old('last_name', $user->profile->last_name) }}">
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- phone --}}
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
                            value="{{ old('phone', $user->profile->phone) }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <a href="{{ asset('storage/' . $user->profile->avatar) }}" target="_blank">
                        <img class="img-fluid" src="{{ asset('storage/' . $user->profile->avatar) }}" alt="avatar"
                            width="100px">
                    </a>
                    {{-- avatar --}}
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" placeholder="Avatar">
                        @error('avatar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    {{-- address --}}
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                            value="{{ old('address', $user->profile->address) }}">
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- city --}}
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City"
                            value="{{ old('city', $user->profile->city) }}">
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- country --}}
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country"
                            value="{{ old('country', $user->profile->country) }}">
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- zip_code --}}
                    <div class="mb-3">
                        <label for="zip_code" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code"
                            value="{{ old('zip_code', $user->profile->zip_code) }}">
                        @error('zip_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    {{-- user_id hidden --}}
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('web.user.index') }}" class="btn btn-link">Cancel</a>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col-12 -->
</div>
<!-- /.row -->
