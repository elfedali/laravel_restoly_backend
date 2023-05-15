@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Show business #{{ $business->id }}
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table  table-striped">
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    {{ $business->id }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{ $business->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Slug
                                </td>
                                <td>
                                    {{ $business->slug }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description
                                </td>
                                <td>
                                    {{ $business->description }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone one
                                </td>
                                <td>
                                    {{ $business->phone_one }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone two
                                </td>
                                <td>
                                    {{ $business->phone_two }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    {{ $business->email }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Is verified
                                </td>
                                <td>
                                    @if ($business->is_verified)
                                        <span class="badge bg-success">Verified</span>
                                    @else
                                        <span class="badge bg-danger">Not verified</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Is active
                                </td>
                                <td>
                                    @if ($business->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Is Without Reservation
                                </td>
                                <td>
                                    @if ($business->is_without_reservation)
                                        <span class="badge bg-success">Without Reservation</span>
                                    @else
                                        <span class="badge bg-danger">With Reservation</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    {{ $business->address }}
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    {{ $business->city }}
                                </td>
                            </tr>
                            <tr>
                                <td>Zip Code</td>
                                <td>
                                    {{ $business->zip_code }}
                                </td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>
                                    {{ $business->country }}
                                </td>
                            </tr>
                            <tr>
                                <td>Logo</td>
                                <td>
                                    <img src="{{ asset('storage/' . $business->logo) }}" alt="{{ $business->name }}"
                                        class="img-fluid">
                                </td>
                            </tr>
                            <tr>
                                <td>Latitude</td>
                                <td>
                                    {{ $business->latitude }}
                                </td>
                            </tr>
                            <tr>
                                <td>Longitude</td>
                                <td>
                                    {{ $business->longitude }}
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    Website
                                </td>
                                <td>
                                    {{ $business->website }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Facebook
                                </td>
                                <td>
                                    {{ $business->facebook }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Twitter
                                </td>
                                <td>
                                    {{ $business->twitter }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Instagram
                                </td>
                                <td>
                                    {{ $business->instagram }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Linkedin
                                </td>
                                <td>
                                    {{ $business->linkedin }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Youtube
                                </td>
                                <td>
                                    {{ $business->youtube }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tiktok
                                </td>
                                <td>
                                    {{ $business->tiktok }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    whatsapp
                                </td>
                                <td>
                                    {{ $business->whatsapp }}
                                </td>
                            </tr>


                            <tr>
                                <td>Created At</td>
                                <td>
                                    {{ $business->created_at }}
                                </td>
                            </tr>
                            <tr>
                                <td>Updated At</td>
                                <td>
                                    {{ $business->updated_at }}
                                </td>
                            </tr>

                        </table>
                        <!-- /.table table-bordered table-striped -->
                        .
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
