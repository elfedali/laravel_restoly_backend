@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Show Language #{{ $language->id }}
                </h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    {{ $language->id }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{ $language->name }}
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Slug
                                </td>
                                <td>
                                    {{ $language->slug }}
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Is Active
                                </td>
                                <td>
                                    @if ($language->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                        </table>

                        <a href="{{ route('web.language.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> &nbsp;
                            Back to list
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
