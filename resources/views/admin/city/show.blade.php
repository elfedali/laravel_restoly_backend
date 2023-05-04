@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Show {{ $city->country->name }} : {{ $city->name }}</h1>
            </div>
            <!-- /.ol-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td>Name :</td>
                        <td>{{ $city->name }}</td>
                    </tr>
                    <tr>
                        <td>Slug :</td>
                        <td>{{ $city->slug }}</td>
                    </tr>
                    <tr>
                        <td>Country :</td>
                        <td>{{ $city->country->name }}</td>
                    </tr>

                    <tr>
                        <td>Is active :</td>
                        <td>
                            @if ($city->is_active)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif

                        </td>
                    </tr>

                    <tr>
                        <td>Created At :</td>
                        <td>{{ $city->created_at }}</td>
                    </tr>

                    <tr>
                        <td>Updated At :</td>
                        <td>{{ $city->updated_at }}</td>
                    </tr>

                </table>
                <a href="{{ route('web.country.show', ['country' => $city->country]) }}" class="btn btn-link">Back</a>

            </div>
            <!-- /.col-12 -->
        </div>
    </div>
    <!-- /.container -->
@endsection
