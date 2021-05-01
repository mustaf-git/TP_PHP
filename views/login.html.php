<?php 
require_once(ROOT_VIEWS_INC."header.inc.php");
require_once(ROOT_VIEWS_INC."menu.inc.php");

?>
      <div class="container mt-5">
      <h1>Connexion</h1>
      <form action="<?php ROOT_CONTROLLERS.'/security.php' ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="login">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control"name="password" >
            </div>
            <div class="row float-right">
             <button type="submit" class="btn btn-primary" name="btn_submit" value="btn_login">Connexion</button>
            </div>
            
        </form>

      </div>
<?php 
require_once(ROOT_VIEWS_INC."footer.inc.php");
?>