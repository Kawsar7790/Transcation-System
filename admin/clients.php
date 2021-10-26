
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

                    <h1 class="page-header">
                            Welcome 
                        </h1>

<?php


if (isset($_GET['source'])) 
{

 $source = $_GET['source'];


}


else

{
  $source = '';
}

switch ($source) {
  case 'add_clients':
    include "adminincludes/add_clients.php";
  break;



case 'update_clients':
include "adminincludes/update_clients.php";
break;






  default:
   
  include "adminincludes/view_all_clients.php";

    break;
}




?>
                        

                    </div>
                </div>


            </div>
     

        </div>


 <?php

include "adminincludes/adminfooter.php";

?>



    
  </body>
</html>