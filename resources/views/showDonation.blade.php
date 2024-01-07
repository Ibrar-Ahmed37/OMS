@extends('app.layout');
<div class="container mt-5">
    <h2>Donation Records</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User Used for Donations</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Comments</th>
                    <th>Amount</th>
                    <th>Payment Mode</th>
                    <th>Address</th>
                    <th>City</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach($donations as $donation)
                    <tr>
                        <td>{{ $donation->id }}</td>
                        <td>{{ $donation->user->first_name }} {{$donation->user->last_name }}</td> 
                        <td>{{ $donation->first_name }}</td>
                        <td>{{ $donation->last_name }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>{{ $donation->phone_number }}</td>
                        <td>{{ $donation->comments }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td>{{ $donation->payment_mode }}</td>
                        <td>{{ $donation->address }}</td>
                        <td>{{ $donation->city }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
