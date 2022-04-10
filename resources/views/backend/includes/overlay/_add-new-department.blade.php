<div class="modal fade" tabindex="-1" id="add-department">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-action="/administrator/backend-ajax/add-department" id="admin-add-department-form" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Add Department</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" placeholder="Department" name="department">
                            <small id="department_error" class="text-danger error" style="display:none;"></small>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Department</button>
                </div>
            </form>
        </div>
    </div>
</div>