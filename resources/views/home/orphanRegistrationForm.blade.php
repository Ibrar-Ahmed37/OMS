<!-- Orphan Registration Modal -->
<div class="modal" id="orphanRegistrationModal" tabindex="-1" aria-labelledby="orphanRegistrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orphanRegistrationModalLabel">Orphan Registration Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Error Display -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('orphan.registration.submit') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="ngo_name">Ngo Name</label>
                            <input type="text" class="form-control" id="ngo_name" name="ngo_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="contact_no">Contact no.</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="orphan_name">Orphan Name</label>
                            <input type="text" class="form-control" id="orphan_name" name="orphan_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="orphan_age">Orphan Age</label>
                            <input type="text" class="form-control" id="orphan_age" name="orphan_age" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="orphan_gender">Orphan Gender</label>
                            <select class="form-control" id="orphan_gender" name="orphan_gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="orphan_description">Orphan Description</label>
                            <textarea class="form-control" id="orphan_description" name="orphan_description" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city">City</label>
                            <textarea class="form-control" id="city" name="city" rows="3" required></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="orphan_bayform">Orphan Bayform/CNIC</label>
                            <textarea class="form-control" id="orphan_bayform" name="orphan_bayform" rows="3" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
