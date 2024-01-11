@extends('app.layout');
<div class="container mt-5">
    <h2>Orphan Registrations</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>NGO Name</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Orphan Name</th>
                    <th>Orphan Age</th>
                    <th>Orphan Gender</th>
                    <th>Orphan Description</th>
                    <th>City</th>
                    <th>Orphan Bayform</th>
                    <th>Picture</th>
                    <th>Report</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrations as $registration)
                    <tr>
                        <td>{{ $registration->id }}</td>
                        <td>{{ $registration->ngo_name }}</td>
                        <td>{{ $registration->address }}</td>
                        <td>{{ $registration->contact_no }}</td>
                        <td>{{ $registration->orphan_name }}</td>
                        <td>{{ $registration->orphan_age }}</td>
                        <td>{{ $registration->orphan_gender }}</td>
                        <td>{{ $registration->orphan_description }}</td>
                        <td>{{ $registration->city }}</td>
                        <td>{{ $registration->orphan_bayform }}</td>
                        <td>
                            @if($registration->picture)
                                <a href="{{ asset('../storage/' . $registration->picture) }}" target="_blank">
                                    <img src="{{ asset('../storage/' . $registration->picture) }}" alt="User Picture" width="100">
                                </a>
                            @else
                                No Picture Available
                            @endif
                        </td>
                        <td>
                            @if($registration->file)
                                <a href="{{ asset('../storage/' . $registration->file) }}" download="{{ $registration->file }}">
                                    {{ $registration->file }}
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
