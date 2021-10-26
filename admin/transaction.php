
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
  case 'add_transaction':
    include "adminincludes/add_transaction.php";
  break;



  case '34':

    echo "NICE 34";
    break;


    case 'update_transaction':
      include "adminincludes/update_transaction.php";
   break;

    case '100':
    
      echo "NICE 100";
      break;

      case 'allocate_transaction':
        include "adminincludes/allocate_transaction.php";
     break;


      case '200':
    
        echo "NICE 200";
        break;


  default:
   
  include "adminincludes/view_all_transaction.php";

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