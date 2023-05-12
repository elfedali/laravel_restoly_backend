@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Show category #{{ $category->id }}
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
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    {{ $category->id }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{ $category->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Slug
                                </td>
                                <td>
                                    {{ $category->slug }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description
                                </td>
                                <td>
                                    {{ $category->description }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Image
                                </td>
                                <td>
                                    {{ $category->image }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Icon
                                </td>
                                <td>
                                    {{ $category->icon }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Color
                                </td>
                                <td>
                                    <span class="badge "
                                        style="background-color:{{ $category->color }}">{{ $category->color }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Position
                                </td>
                                <td>
                                    {{ $category->position }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Is Active
                                </td>
                                <td>
                                    @if ($category->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Locale
                                </td>
                                <td>
                                    {{ $category->locale }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Prent Id
                                </td>
                                <td>
                                    <?php if ($category->parent_id == null) {
                                        echo 'No Parent';
                                    } else {
                                        echo $category->parent_id;
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Created At
                                </td>
                                <td>
                                    {{ $category->created_at }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Updated At
                                </td>
                                <td>
                                    {{ $category->updated_at }}
                                </td>
                            </tr>
                        </table>
                        <!-- /.table -->
                        <a href="{{ route('web.category.edit', $category) }}" class="btn btn-link">
                            Edit
                        </a>
                        <a href="{{ route('web.category.index') }}" class="btn btn-link">
                            Cancel
                        </a>
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
