<!-- Modal -->
<div class="modal fade text-light" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#222;" >
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to Mlinks</h5>
                <button type="button" class="btn-close btn-danger" style="background-color:#f00;"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="bits/_handlelogin.php" method="POST" >
                    <div class="mb-3">
                        <label for="loginmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="loginmail" id="loginmail" aria-describedby="emailHelp" required >
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pwd" id="pwd" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
