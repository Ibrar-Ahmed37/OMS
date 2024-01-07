<!-- resources/views/home/guardianRegistrationForm.blade.php -->

<div class="container mt-5">
    <h2>User Registration Form</h2>

    <form method="POST" action="{{ route('user.registration.submit') }}">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="user_name">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_contact_number">User Contact Number</label>
                <input type="text" class="form-control" id="user_contact_number" name="user_contact_number" required>
            </div>
        </div>

        <div class="row">
        <div class="col-md-6 mb-3">
                <label for="user_gender">User Gender</label>
                <select class="form-control" id="user_gender" name="user_gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <!-- Add more options if needed -->
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="user_cnic">User CNIC</label>
                <input type="text" class="form-control" id="user_cnic" name="user_cnic" required>
            </div>
        </div>

    
        <div class="row">
        <div class="col-md-6 mb-3">
                <label for="orphan_name">Orphan Name</label>
                <input type="text" class="form-control" id="orphan_name" name="orphan_name" required>
            </div>
        <div class="col-md-6 mb-3">
                <label for="orphan_gender">Orphan Gender</label>
                <select class="form-control" id="orphan_gender" name="orphan_gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <!-- Add more options if needed -->
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="rescue_location">From where Child is Rescued?</label>
                <textarea class="form-control" id="rescue_location" name="rescue_location" rows="3" required></textarea>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
