@extends('layout')

@section('content')
<div class="card col-md-8 mx-auto">
    <div class="card-header">
        <h4>Add New Student</h4>
    </div>
    <div class="card-body">
        <form action="" method="POST"> <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter full name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" id="course" placeholder="e.g. BSCS">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year Level</label>
                <select class="form-select" id="year">
                    <option selected>Select Year</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </div>
            
            <button type="button" class="btn btn-primary">Save Student</button>
            <a href="{{ url('/students') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection