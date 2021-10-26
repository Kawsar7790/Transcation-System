<?php


include "adminincludes/adminheader.php";

?>

    <div id="wrapper">


<?php

include "adminincludes/adminnavigation.php"



?>



        <div id="page-wrapper">

            <div class="container-fluid">

     
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="text-align: center;">
                            Welcome 

                            <small> <?php echo $_SESSION['Username']; ?> </small>
                        
                        </h1>
                        
                    </div>
                </div>


            </div>
     

        </div>


    <?php

include "adminincludes/adminfooter.php"


?>