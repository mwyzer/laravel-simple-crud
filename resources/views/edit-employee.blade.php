<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Employee</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="">
        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Employee</h2>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form method="post" action="{{ url('update-employee') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="md-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ $data->name }}">
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{ $data->email}}">
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter your phone" value="{{ $data->phone}}">
                            @error('phone')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="md-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="address" placeholder="Enter your address" value="{{ $data->address }}"></textarea>
                            @error('address')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('employee-list') }}" class="btn btn-danger">Back</a>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
