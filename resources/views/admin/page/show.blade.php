@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Show Page #{{ $page->id }}
                </h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <strong>ID</strong>
                                </td>
                                <td>
                                    {{ $page->id }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Title</strong>
                                </td>
                                <td>
                                    {{ $page->title }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Body</strong>
                                </td>
                                <td>
                                    {{ $page->body }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Locale</strong>
                                </td>
                                <td>
                                    {{ $page->locale }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Position</strong>
                                </td>
                                <td>
                                    {{ $page->position }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Is Active</strong>
                                </td>
                                <td>
                                    @if ($page->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            <tr>
                                <td>
                                    <strong>Created At</strong>
                                </td>
                                <td>
                                    {{ $page->created_at }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Updated At</strong>
                                </td>
                                <td>
                                    {{ $page->updated_at }}
                                </td>
                            </tr>


                        </table>
                        <a href="{{ route('web.page.edit', $page->id) }}" class="btn btn-link ">Edit</a>
                        <a href="{{ route('web.page.index') }}" class="btn btn-link">Cancel</a>
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
