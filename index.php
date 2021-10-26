
<?php

include "includes/header.php";


?>



    <?php

include "includes/navigation.php";


?>
  <form action="includes/login.php" method="post">
  
              <div class="form-group">
        <input type="text" class="form-control" name="username" 
        placeholder=" Enter Username ">
       
        </div>

        <div class="form-group">
        <input type="password" class="form-control" name="password" 
        placeholder=" Enter Password ">
       
    </div>
               
    <div>
        <button type="submit" name="signin" class="btn btn-primary"> Sign In </button>
        </div>

         <a href="./registration.php">  Create A New Account  </a>       
           
              </form>

        <?php

include "includes/footer.php";

?>