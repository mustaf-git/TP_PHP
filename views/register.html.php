<?php 
require_once(ROOT_VIEWS_INC."header.inc.php");
require_once(ROOT_VIEWS_INC."menu.inc.php");
?>
  <div class="container mt-5">
              <h3 class="text-center text-info">INSCRIPTION</h3>
            <form action="../controllers/security.php" method="POST">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control " placeholder="First name" name="fname">
                    </div>

                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <input class="form-control"  type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control"  type="password" name="confirm_password" placeholder="Confirm Password">
                </div>
              


                <div class="form-group">
                    <button type="submit" class="btn  btn-block btn-primary" name="btn_submit" value="register">Register</button>
                </div>
            </form>

    </div>

<?php 
require_once(ROOT_VIEWS_INC."footer.inc.php");
?>
   