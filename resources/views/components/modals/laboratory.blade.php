{{-- Add Laboratory Modal --}}
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Laboratory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST">
                    @csrf
                    <div class="col-md-4">
                        <label for="dorm_name" class="form-label">Comlab Name</label>
                        <input type="text" class="form-control" name="dorm_name" placeholder="Name of the Comlab">
                    </div>
                    <div class="col-md-4">
                        <label for="tenant" class="form-label">Laboratory Type</label>
                        <select id="tenant" class="form-select" name="tenant">
                            <option selected="" disabled>Choose...</option>
                            <option value="Computer">Computer</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="address" class="form-label">Location</label>
                        <input type="text" class="form-control" name="address" placeholder="ex. COT Building">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>