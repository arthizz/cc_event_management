<div class="modal fade" tabindex="-1" id="add-user-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Student Number</label>
                                <input type="number" class="form-control" placeholder="Student Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Department</label>
                                <select class="form-control" name="department">
                                    <option selected disabled></option>
                                    <option value="1">CCS</option>
                                    <option value="2">CBA</option>
                                    <option value="3">ENGR</option>
                                    <option value="4">ARCH</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Year Level</label>
                                <input type="text" class="form-control" placeholder="Year Level">
                            </div>
                            <div class="mb-3">
                                <label>Select Gender</label>
                                <select class="form-control" name="gender">
                                    <option selected disabled></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Student</button>
            </div>
        </div>
    </div>
</div>