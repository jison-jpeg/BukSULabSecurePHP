{{-- Add User Modal --}}
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" required>
                        <div class="invalid-feedback">
                            Please enter a valid first name.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name">
                        <div class="invalid-feedback">
                            Please enter a valid middle name.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" required>
                        <div class="invalid-feedback">
                            Please enter a valid last name.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Institutional Email</label>
                        <input type="email" class="form-control" name="email" required>
                        <div class="invalid-feedback">
                            Please provide a unique and valid email address.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                        <div class="invalid-feedback">
                            Please provide a unique and valid username.
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div> --}}
                    <div class="col-md-3 col-sm-6">
                        <label for="phone_number" class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone_number" placeholder="09123456789"
                            pattern="[0-9]{11}" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone number with 11 digits.
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="birth_date" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" name="birth_date" required>
                        <div class="invalid-feedback">
                            Please provide a birthdate.
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="position" class="form-label">Role</label>
                        <select class="form-select" id="position" required="" name="position">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="admin">Admin</option>
                            <option value="support">Support</option>
                            <option value="dean">Dean</option>
                            <option value="chairperson">Chairperson</option>
                            <option value="instructor">Instructor</option>
                            <option value="part-time instructor">Part-time Instructor</option>

                            
                        </select>
                        <div class="invalid-feedback">
                            Please select a role.
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <label for="position" class="form-label">Department</label>
                        <select class="form-select" id="position" required="" name="position">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option value="COA">College of Administration</option>
                            <option value="CAS">College of Arts and Sciences</option>
                            <option value="COB">College of Business</option>
                            <option value="COE">College of Education</option>
                            <option value="COL">College of Law</option>
                            <option value="CON">College of Nursing</option>
                            <option value="COT">College of Technologies</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a department.
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>
