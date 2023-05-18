@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Businesses
                </h1>
            </div>
            <!-- /.col-6-->
            <div class="col-6 text-end">
                <a href="{{ route('web.business.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> &nbsp;
                    Create</a>
            </div>
            <!-- /.col-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>User owner</th>
                                    <th>Is Active</th>
                                    <th> Is Without Reservation</th>
                                    <th>Category</th>

                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($businesses as $business)
                                    <tr>
                                        <td>{{ $business->id }}</td>
                                        <td>
                                            {{ Str::limit($business->name, 20, '...') }}
                                            <div>
                                                <small> <small class="text-muted">
                                                        {{ $business->slug }}</small></small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('web.user.show', $business->user->id) }}">
                                                {{ $business->user->id }} -
                                                {{ $business->user->email }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($business->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($business->is_without_reservation)
                                                <span class="badge bg-success">Without Reservation</span>
                                            @else
                                                <span class="badge bg-warning">With Reservation</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('web.category.show', $business->category->id) }}">
                                                {{ $business->category->name }}
                                            </a>
                                        </td>




                                        <td>{{ $business->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $business->updated_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('web.business.show', ['business' => $business]) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-eye"></i> &nbsp;
                                                Show</a>
                                            <a href="{{ route('web.business.edit', ['business' => $business]) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i> &nbsp;
                                                Edit</a>
                                            <form action="{{ route('web.business.destroy', ['business' => $business]) }}"
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
