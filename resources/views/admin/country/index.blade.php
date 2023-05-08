@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Countries</h1>
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                <a href="{{ route('web.country.create') }}" class="btn btn-success float-end">
                    <i class="bi bi-plus-circle"></i> &nbsp;
                    Add Country</a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">

            <!-- /.col-12 -->

            <div class="col-12 mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>is Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($countries as $country)
                            <tr>
                                <td>
                                    <a href="{{ route('web.country.show', $country->id) }}">
                                        <strong>{{ $country->name }}</strong>
                                    </a>
                                    <div>
                                        <small class="text-muted">{{ $country->slug }}</small>;
                                        <small class="text-muted">{{ $country->code }}</small>;
                                        <small class="text-muted">{{ $country->phone_code }}</small>;
                                        <small class="text-muted">{{ $country->currency }}</small>;
                                        <small class="text-muted"> {{ $country->currency_symbol }}</small>
                                    </div>

                                </td>
                                <td>
                                    @if ($country->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif

                                </td>
                                <td> {{ $country->created_at->format('d-m-Y') }}</td>
                                <td> {{ $country->updated_at->format('d-m-Y') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('web.country.edit', $country->id) }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i> &nbsp; Edit
                                    </a>
                                    <form action="{{ route('web.country.destroy', $country->id) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this country?');"
                                            type="submit" name="button" value="delete">
                                            <i class="bi bi-trash"></i> &nbsp; Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    @endsection
