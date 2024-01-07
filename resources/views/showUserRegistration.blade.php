@extends('app.layout');
<div class="container mt-5">
    <h2>User Requests</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Contact Number</th>
                    <th>Gender</th>
                    <th>CNIC</th>
                    <th>Orphan Name</th>
                    <th>Orphan Gender</th>
                    <th>Rescue Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userRequests as $userRequest)
                    <tr>
                        <td>{{ $userRequest->id }}</td>
                        <td>{{ $userRequest->user_name }}</td>
                        <td>{{ $userRequest->user_contact_number }}</td>
                        <td>{{ $userRequest->user_gender }}</td>
                        <td>{{ $userRequest->user_cnic }}</td>
                        <td>{{ $userRequest->orphan_name }}</td>
                        <td>{{ $userRequest->orphan_gender }}</td>
                        <td>{{ $userRequest->rescue_location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
