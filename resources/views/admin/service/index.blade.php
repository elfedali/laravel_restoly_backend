@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Services
                </h1>
            </div>
            <!-- /.col-6 -->
            <div class="col-6 text-end">
                <a href="{{ route('web.service.create') }}" class="btn btn-primary float-right">
                    <i class="bi bi-plus-circle"></i> &nbsp;
                    New</a>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Is Active</th>
                                    <th>Language</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->slug }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>
                                            @if ($service->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ $service->language }}</td>
                                        <td>{{ $service->created_at }}</td>
                                        <td>{{ $service->updated_at }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('web.service.show', ['service' => $service]) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-eye"></i> &nbsp;
                                                Show</a>
                                            <a href="{{ route('web.service.edit', ['service' => $service]) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i> &nbsp;
                                                Edit</a>
                                            <form action="{{ route('web.service.destroy', ['service' => $service]) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure ?')">
                                                    <i class="bi bi-trash"></i> &nbsp;
                                                    Delete</button>
                                            </form>
                                        </td>
                                @endforeach

                            </tbody>
                        </table>
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
