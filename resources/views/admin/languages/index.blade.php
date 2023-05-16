@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Languages
                </h1>
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                <a href="{{ route('web.language.create') }}" class="btn btn-primary float-end">
                    <i class="bi bi-plus-circle"></i> &nbsp;
                    Add Language</a>
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
                                    <th>Slug</th>
                                    <th>Name</th>
                                    <th>Is Active</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($languages as $language)
                                    <tr>
                                        <td>{{ $language->id }}</td>
                                        <td>{{ $language->slug }}</td>
                                        <td>{{ $language->name }}</td>
                                        <td>
                                            @if ($language->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ $language->created_at }}</td>
                                        <td>{{ $language->updated_at }}</td>
                                        <td class="text-end">
                                            <a href="{{ route('web.language.show', ['language' => $language]) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-eye"></i> &nbsp;
                                                Show</a>
                                            <a href="{{ route('web.language.edit', ['language' => $language]) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i> &nbsp;
                                                Edit</a>
                                            <form action="{{ route('web.language.destroy', ['language' => $language]) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
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
