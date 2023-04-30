@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Users</h1>
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- for each user in users  -->
                    @foreach($users as $user)
                    <tr>
                        <!-- display the user email and created_at -->
                        <td>
                            <a href="
                            {{ route('web.users.show', ['user' => $user->id]) }}
                            ">{{ $user->email }}</a>
                        </td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.col-12 -->

    </div>
</div>
<!-- /.container -->

@endsection