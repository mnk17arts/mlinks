<!-- Modal -->
<div class="modal fade text-light" id="addLinkModal" tabindex="-1" aria-labelledby="addLinkModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#222;" >
            <div class="modal-header">
                <h5 class="modal-title" id="addLinkModalLabel">Lets add a link</h5>
                <button type="button" class="btn-close btn-danger" style="background-color:#f00;"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="bits/_handleaddlink.php" method="POST" >
                    <div class="mb-3">
                        <label for="addlinktitle" class="form-label">link Title</label>
                        <input type="name" class="form-control" name="addlinktitle" id="addlinktitle"  required >
                    </div>
                    <div class="mb-3">
                        <label for="addlinkurl" class="form-label">Link</label>
                        <input type="text" class="form-control" name="addlinkurl" id="addlinkurl" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add this link</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
