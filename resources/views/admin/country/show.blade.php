@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <h1>Country: {{ $country->name }}</h1>
                <table class="table table-sm">
                    <tr>
                    <tr>
                        <td>Name :</td>
                        <td>{{ $country->name }}</td>
                    </tr>
                    <tr>
                        <td>Slug :</td>
                        <td>{{ $country->slug }}</td>
                    </tr>
                    <tr>
                        <td>Code :</td>
                        <td>{{ $country->code }}</td>
                    </tr>
                    <tr>
                        <td>Phone Code :</td>
                        <td>{{ $country->phone_code }}</td>
                    </tr>
                    <tr>
                        <td>Currency :</td>
                        <td>{{ $country->currency }}</td>
                    </tr>
                    <tr>
                        <td>Currency Symbol :</td>
                        <td>{{ $country->currency_symbol }}</td>
                    </tr>
                    <tr>
                        <td>Created At :</td>
                        <td>{{ $country->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated At :</td>
                        <td>{{ $country->updated_at }}</td>
                    </tr>
                    </tr>

                </table>
                <a href="{{ route('web.country.index') }}" class="btn btn-link">Back</a>
            </div>
            <!-- /.col-6 -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <h2>Cities</h2>
                    </div>
                    <div class="col"> <a href="{{ route('web.city.create', ['country' => $country]) }}"
                            class="btn btn-primary float-end">Add City</a></div>
                </div>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Name</th>

                            <th>is Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($country->cities as $city)
                            <tr>
                                <td>
                                    <a href="{{ route('web.city.show', ['country' => $country, 'city' => $city]) }}">
                                        {{ $city->name }}
                                    </a>
                                </td>

                                <td>
                                    @if ($city->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $city->created_at }}</td>
                                <td>{{ $city->updated_at }}</td>
                                <td>
                                    <a href="{{ route('web.city.edit', ['country' => $country, 'city' => $city]) }}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form
                                        action="{{ route('web.city.destroy', ['country' => $country, 'city' => $city]) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
            <!-- /.col-lg-6 -->


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
