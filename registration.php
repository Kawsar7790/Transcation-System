
<?php  include "includes/db.php"; ?>
<?php  include "admin/function.php"; ?>


<?php  


    if (isset($_POST['signupbtn'])) 
    {
       $Username = $_POST['Username'];
       
       $Password = $_POST['Password'];

       $Username = mysqli_real_escape_string($conn ,$Username);
       
       $Password = mysqli_real_escape_string($conn ,$Password);



            $registerquery=" INSERT INTO owner_db (Username , Password)
                             VALUES ( '$Username'  ,  '$Password') ";
            

        header("Location:   ../transaction/registration.php");



    }


            


?>





<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/registration.css">

    <title>Sign Up</title>
  </head>
  <body>
      <div>
          <h1 style="color: white; text-align: center;">
              <br>Create Your New Account
          </h1>
  
      </div>


    <div class="container" style="border-color: red ; border: 2px solid;  margin-top: 90px; background: white;" id="signup">


      <form class="text-center border border-light p-5" action=""   method="POST" > 

          <p class="h4 mb-4">Sign up</p>
      
          <div class="form-row mb-4">
              <div class="col">
        
                  <input type="text" name="Username"  class="form-control" placeholder="Username"  style="border-color: black; border: 1px solid;">
              </div>
             
          </div>
      

          
      
 
          <input type="password" class="form-control" name="Password" placeholder="Password"  style="border-color: black; border: 1px solid;">
         
         
      

          <button class="btn btn-info my-4 btn-block" type="submit"  name="signupbtn">Sign Up</button>
 

      
      </form>
    </div>


<?php


?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/Database/SignUpfirebase.js"></script>
    <script src="js/registration.js"></script>
  </body>
</html>