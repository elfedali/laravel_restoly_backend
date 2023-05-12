@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Businesses
                </h1>
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Title</td>
                                    <td>Slug</td>
                                    <td>Body</td>
                                    <td>Locale</td>
                                    <td>Created At</td>
                                    <td>Updated At</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($businesses as $business)
                                    <tr>
                                        <td>{{ $business->id }}</td>
                                        <td>{{ $business->title }}</td>
                                        <td>{{ $business->slug }}</td>
                                        <td>{{ $business->body }}</td>
                                        <td>{{ $business->locale }}</td>
                                        <td>{{ $business->created_at }}</td>
                                        <td>{{ $business->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.business.show', ['business' => $business]) }}"
                                                class="btn btn-sm btn-outline-primary">Show</a>
                                            <a href="{{ route('admin.business.edit', ['business' => $business]) }}"
                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <form action="{{ route('admin.business.destroy', ['business' => $business]) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Are you sure ?')">Delete</button>
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
