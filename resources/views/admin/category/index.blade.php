@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>
                    Categories
                </h1>
            </div>
            <!-- /.col-6 -->
            <div class="col-6">
                <div class="text-end">
                    <a href="{{ route('web.category.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> &nbsp;
                        Create
                    </a>
                </div>
                <!-- /.text-end -->
            </div>

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
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Color </th>
                                    <th>Position </th>
                                    <th>Is Active</th>
                                    <th>Parent Category</th>
                                    <th>Language</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td> {{ $category->id }} </td>
                                        <td> {{ $category->name }} </td>


                                        <td>
                                            <a target="_blank" href="{{ asset('storage/' . $category->icon) }}">
                                                <img src="{{ asset('storage/' . $category->icon) }}" alt=""
                                                    width="50px">
                                            </a>
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ asset('storage/' . $category->image) }}">
                                                <img src="{{ asset('storage/' . $category->image) }}" alt=""
                                                    width="50px">
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge "
                                                style="background-color:{{ $category->color }}">{{ $category->color }}</span>
                                        </td>
                                        <td> {{ $category->position }} </td>
                                        <td>
                                            @if ($category->is_active)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($category->parent_id)
                                                {{ $category->parent->name }}
                                            @else
                                                <span class="badge bg-secondary">No Parent</span>
                                            @endif
                                        </td>
                                        <td> {{ $category->language }} </td>

                                        <td class="text-end">
                                            <a href="{{ route('web.category.show', ['category' => $category]) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-eye"></i> &nbsp;
                                                Show</a>
                                            <a href="{{ route('web.category.edit', ['category' => $category]) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i> &nbsp;
                                                Edit</a>
                                            <form action="{{ route('web.category.destroy', ['category' => $category]) }}"
                                                method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure ?')">
                                                    <i class="bi bi-trash"></i> &nbsp;
                                                    Delete</button>
                                            </form>
                                        </td>

                                    </tr>
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
