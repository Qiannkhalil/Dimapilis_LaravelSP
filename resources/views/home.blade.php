@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Student List</h2>
    <a href="{{ url('/students/create') }}" class="btn btn-success">Add New Student</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>BS Information Technology</td>
                    <td>3rd Year</td>
                    <td>
                        <a href="{{ url('/students/1') }}" class="btn btn-info btn-sm text-white">View</a>
                        <a href="{{ url('/students/1/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>BS Computer Science</td>
                    <td>2nd Year</td>
                    <td>
                        <a href="{{ url('/students/2') }}" class="btn btn-info btn-sm text-white">View</a>
                        <a href="{{ url('/students/2/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection