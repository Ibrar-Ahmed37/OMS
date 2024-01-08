<!-- Guardian Registration Modal -->
<div class="modal" id="guardianRegistrationModal" tabindex="-1" aria-labelledby="guardianRegistrationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guardianRegistrationModalLabel">Guardian Registration Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                            <input type="text" class="form-control" id="parent_contact_number"
                                name="parent_contact_number" required>
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
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="reason_to_register">Reason to Register</label>
                            <textarea class="form-control" id="reason_to_register" name="reason_to_register" rows="3"
                                required></textarea>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="age">Age</label>
                            <select class="form-control" id="age" name="age" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>