<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Employee List</title>

        <!-- CSS Only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="">
        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Employee List</h2>
                    <div style="margin-right:10%; float: right">
                        <a href="{{ url('add-employee') }} " class="btn btn-primary">Add Employee</a>
                    </div>
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp

                            @foreach ( $data as $emp )
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $emp->name }}</td>
                                <td>{{ $emp->email }}</td>
                                <td>{{ $emp->phone }}</td>
                                <td>{{ $emp->address }}</td>
                                <td>
                                    <a href="{{ url('edit-employee/' .$emp->id) }}" class="btn btn-outline-primary">
                                        Edit
                                    </a>
                                    <a href="{{ url('delete-employee/' .$emp->id) }}" class="btn btn-outline-danger">Delete </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
