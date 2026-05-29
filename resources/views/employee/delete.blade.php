@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Delete Employee</h1>
        <p>Are you sure you want to delete this employee?</p>
        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection