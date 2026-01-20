@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 style="color: var(--barbie-hot-pink); font-weight: 700;">Student List</h2>
    
    <x-action-button href="{{ url('/students/create') }}" type="primary" class="px-4 py-2">
        + Add New Student
    </x-action-button>
</div>

<div class="card">
    <div class="card-body p-4">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th class="py-3">Name</th>
                    <th class="py-3">Course</th>
                    <th class="py-3">Year Level</th>
                    <th class="py-3" width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-bold">John Doe</td>
                    <td>BS Information Technology</td>
                    <td>3rd Year</td>
                    <td>
                        <x-action-button href="{{ url('/students/1') }}" type="view">
                            View
                        </x-action-button>

                        <x-action-button href="{{ url('/students/1/edit') }}" type="edit">
                            Edit
                        </x-action-button>
                    </td>
                </tr>
                <tr>
                    <td class="fw-bold">Jane Smith</td>
                    <td>BS Computer Science</td>
                    <td>2nd Year</td>
                    <td>
                        <x-action-button href="{{ url('/students/2') }}" type="view">
                            View
                        </x-action-button>

                        <x-action-button href="{{ url('/students/2/edit') }}" type="edit">
                            Edit
                        </x-action-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
