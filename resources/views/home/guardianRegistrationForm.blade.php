<!-- resources/views/home/guardianRegistrationForm.blade.php -->

<div class="container mt-5">
    <h2>Guardian Registration Form</h2>

    <form method="POST" action="{{ route('guardian.registration.submit') }}">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="mother_name">Mother Name</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mother_cnic">Mother CNIC</label>
                <input type="text" class="form-control" id="mother_cnic" name="mother_cnic" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="father_name">Father Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="father_cnic">Father CNIC</label>
                <input type="text" class="form-control" id="father_cnic" name="father_cnic" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="parent_contact_number">Parent Contact Number</label>
                <input type="text" class="form-control" id="parent_contact_number" name="parent_contact_number" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="child_name">Child Name</label>
                <input type="text" class="form-control" id="child_name" name="child_name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="bayform_number">Bayform No. / CNIC</label>
                <input type="text" class="form-control" id="bayform_number" name="bayform_number" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="child_gender">Child Gender</label>
                <select class="form-control" id="child_gender" name="child_gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <!-- Add more options if needed -->
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="reason_to_register">Reason to Register</label>
                <textarea class="form-control" id="reason_to_register" name="reason_to_register" rows="3" required></textarea>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
