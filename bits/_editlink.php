<!-- Modal -->
<div class="modal fade text-light" id="editLinkModal" tabindex="-1" aria-labelledby="editLinkModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#222;" >
            <div class="modal-header">
                <h5 class="modal-title" id="editLinkModalLabel">Lets edit this link</h5>
                <button type="button" class="btn-close btn-danger" style="background-color:#f00;"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="bits/_handleeditlink.php" method="POST" >
                    <div class="mb-3">
                        <label for="editlinktitle" class="form-label">Edit Title</label>
                        <input type="name" class="form-control" value="" name="editlinktitle" id="editlinktitle"  required >
                    </div>
                    <div class="mb-3">
                        <label for="editlinkurl" class="form-label">Edit Link</label>
                        <input type="text" class="form-control" value="" name="editlinkurl" id="editlinkurl" required>
                    </div>
                    <input type="hidden" id="editlinksno" name="editlinksno" value="" />
                    <button type="submit" class="btn btn-primary">Save this link</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
