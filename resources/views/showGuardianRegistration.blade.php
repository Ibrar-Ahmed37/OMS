@extends('app.layout');
<div class="container mt-5">
    <h2>Guardian Requests</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Mother Name</th>
                    <th>Mother CNIC</th>
                    <th>Father Name</th>
                    <th>Father CNIC</th>
                    <th>Parent Contact Number</th>
                    <th>Address</th>
                    <th>Child Name</th>
                    <th>Child Age</th>
                    <th>Bayform Number</th>
                    <th>Child Gender</th>
                    <th>Reason to Register</th>
                    <th>Picture</th>
                    <th>Report</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guardianRequests as $guardianRequest)
                    <tr>
                        <td>{{ $guardianRequest->id }}</td>
                        <td>{{ $guardianRequest->mother_name }}</td>
                        <td>{{ $guardianRequest->mother_cnic }}</td>
                        <td>{{ $guardianRequest->father_name }}</td>
                        <td>{{ $guardianRequest->father_cnic }}</td>
                        <td>{{ $guardianRequest->parent_contact_number }}</td>
                        <td>{{ $guardianRequest->address }}</td>
                        <td>{{ $guardianRequest->child_name }}</td>
                        <td>{{ $guardianRequest->age }}</td>
                        <td>{{ $guardianRequest->bayform_number }}</td>
                        <td>{{ $guardianRequest->child_gender }}</td>
                        <td>{{ $guardianRequest->reason_to_register }}</td>
                        <td>
                            @if($guardianRequest->picture)
                                <a href="{{ asset('../storage/' . $guardianRequest->picture) }}" target="_blank">
                                    <img src="{{ asset('../storage/' . $guardianRequest->picture) }}" alt="User Picture" width="100">
                                </a>
                            @else
                                No Picture Available
                            @endif
                        </td>
                        <td>
                            @if($guardianRequest->file)
                                <a href="{{ asset('../storage/' . $guardianRequest->file) }}" download="{{ $guardianRequest->file }}">
                                    {{ $guardianRequest->file }}
                                </a>
                            @else
                                No Report Available
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
