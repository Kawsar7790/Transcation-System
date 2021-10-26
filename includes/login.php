<?php include "db.php"; ?>

<?php session_start(); ?>


<?php  


// This is for the form
    if (isset($_POST['signin']))
    {
      
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username =mysqli_real_escape_string($conn , $username);

        $sql  = "SELECT * FROM client_db WHERE Username = '{$username}'";
        $userresult = mysqli_query($conn , $sql);

        if (!$userresult) 
        {
            die( " Query Failed " .mysqli_error($conn));
        }


        // This is for the DB

        while ($row= mysqli_fetch_array($userresult)) 
        {
         
            $Username	= $row ['Username'];
            $loginPassword = $row ['Password'];
            $role = $row['Role'];
            
           
        }

        
      

            if ($username === $Username && $password === $loginPassword  && $role === 'Owner') 
            {
                
              
                $_SESSION['Username'] = $Username;

               header("Location: ../admin/adminindex.php");

               

            } 

            elseif ($username === $Username && $password === $loginPassword && $role === 'Client') {
                header("Location: ../client/adminindex.php");
            }
   
            else 
            {
                header("Location:  ../index.php  ");
            }




    }


?>