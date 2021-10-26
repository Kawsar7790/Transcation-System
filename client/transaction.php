
  <?php


include "clientincludes/adminheader.php";


?>





    <div id="wrapper">

<?php

include "clientincludes/adminnavigation.php"



?>



        <div id="page-wrapper">

            <div class="container-fluid">

     
                <div class="row">
                    <div class="col-lg-12">


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
  case 'add_my_transaction':
    include "clientincludes/add_my_transaction.php";
  break;



  case '34':

    echo "NICE 34";
    break;


    case 'update_my_transaction':
      include "clientincludes/update_my_transaction.php";
   break;

    case '100':
    
      echo "NICE 100";
      break;

      case 'check_my_balance':
        include "clientincludes/check_my_balance.php";
     break;


      case '200':
    
        echo "NICE 200";
        break;


  default:
   
  include "clientincludes/view_my_transaction.php";

    break;
}




?>
                        

                    </div>
                </div>


            </div>
     

        </div>


 <?php

include "clientincludes/adminfooter.php";

?>



    
  </body>
</html>