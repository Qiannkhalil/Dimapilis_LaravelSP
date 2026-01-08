@extends('layout')

@section('content')
<div class="card col-md-8 mx-auto">
    <div class="card-header">
        <h4>Student Profile</h4>
    </div>
    <div class="card-body">
        <div class="mb-3 row">
            <label class="col-sm-3 fw-bold">Full Name:</label>
            <div class="col-sm-9">
                John Doe
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 fw-bold">Email:</label>
            <div class="col-sm-9">
                john.doe@example.com
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 fw-bold">Course:</label>
            <div class="col-sm-9">
                BS Information Technology
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 fw-bold">Year Level:</label>
            <div class="col-sm-9">
                3rd Year
            </div>
        </div>

        <a href="{{ url('/students') }}" class="btn btn-primary mt-3">Back to Student List</a>
    </div>
</div>
@endsection