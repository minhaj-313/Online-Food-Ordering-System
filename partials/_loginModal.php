<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FFC107; color: black;">
        <h5 class="modal-title" id="loginModal">Login Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        <form action="partials/_handleLogin.php" method="post">
          <div class="text-left my-2">
            <b><label for="username">Username</label></b>
            <input class="form-control" id="loginusername" name="loginusername" placeholder="Enter Your Username" type="text" required>
          </div>
          <div class="text-left my-2">
            <b><label for="password">Password</label></b>
            <input class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter Your Password" type="password" required data-toggle="password">
          </div>
          <button type="submit" class="btn custom-btn btn-1">Submit</button>
        </form>
        <p class="mb-0 mt-1">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up now</a>.</p>
      </div>
    </div>
  </div>
</div>