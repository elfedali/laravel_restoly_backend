@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Show Kitchen #{{ $kitchen->id }}
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
                                    {{ $kitchen->id }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{ $kitchen->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Slug
                                </td>
                                <td>
                                    {{ $kitchen->slug }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Description
                                </td>
                                <td>
                                    {{ $kitchen->description }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Is active
                                </td>
                                <td>
                                    @if ($kitchen->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Language
                                </td>
                                <td>
                                    {{ $kitchen->language }}
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('web.kitchen.edit', ['kitchen' => $kitchen]) }}" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil-square"></i> &nbsp;
                            Edit</a>
                        <a href="{{ route('web.kitchen.index') }}" class="btn btn-link">cancel</a>

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
