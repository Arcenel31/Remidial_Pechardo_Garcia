@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="#" class="btn btn-info">Add New Employee</a> <br> <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($employees as $item)

                                    <tbody  >
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->first_name }}</td>
                                            <td>{{ $item->last_name }}</td>
                                            <td>{{ $item->middle_name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->date_of_birth }}</td>
                                            <td> 
                                                <a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
                                                <a href="#" class="btn btn-danger btn-md active" role="button" aria-pressed="true">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
