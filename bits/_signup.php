<!-- Modal -->
<div class="modal fade text-light" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#222;">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">SignUp for an Mlinks account</h5>
                <button type="button" class="btn-close btn-danger" style="background-color:#f00;"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="bits/_handlesignup.php" method="POST" >
                <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="signupmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="signupmail" id="signupmail" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pwd" id="pwd" required> 
                    </div>
                    <div class="mb-3">
                        <label for="cpwd" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpwd" id="cpwd" required>
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
