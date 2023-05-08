@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Cities</h1>
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                <a href="{{ route('web.city.create') }}" class="btn btn-success float-end">
                    <i class="bi bi-plus-circle"></i> &nbsp;
                    Add city</a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Is active</th>
                            <th>Created At</th>
                            <th class="text-end">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- for each city in cities  -->
                        @foreach ($cities as $city)
                            <tr>

                                <td>
                                    <a
                                        href="
                                {{ route('web.city.show', ['city' => $city->id]) }}
                                ">
                                        <strong> {{ $city->name }}</strong>
                                    </a>
                                    &nbsp;
                                    <small><small class="text-muted">{{ $city->slug }}</small></small>
                                </td>
                                <td><small>{{ $city->country->name }}</small></td>
                                <td>
                                    @if ($city->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ $city->created_at }}</td>

                                <td class="text-end">

                                    <a href="{{ route('web.city.edit', ['city' => $city->id]) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i> &nbsp;
                                        Edit
                                    </a>
                                    <form action="{{ route('web.city.destroy', ['city' => $city->id]) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this city?')">
                                            <i class="bi bi-trash"></i> &nbsp;
                                            Delete
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
