<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">First Name:</label>
                        <input type="text" class="form-control form-control-firstName" id="first-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control form-control_lastName" id="last-name">
                    </div>
                </form>

                <div class="form-check form-switch">
                    <label class="role_title">Status</label>
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>

                </div>
                <div class="role_block">
                    <label class="role_title">Role</label>
                    <select class="form-select form_select-addUser" aria-label="Default select example">
                        <option value="" selected>Pease Select</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>

                    </select>
                </div>
                <div class="errorBlock">
                    
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="btn_addUser" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>