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
                            Welcome Admin
                            <small>Subheading</small>
                        </h1>
                        
                <div class="col-xs-6">






                <?php

    createcategory();       


            ?>

                <form action="" method="POST">

                <div class="form-group"> 

                <label> Add Client Id  </label>
                    

                <input  type="text" name="id" class="form-control" placeholder=" Enter Product Category Id "> 
               

                </div>


                <div class="form-group"> 

                <label> Add Client Name </label>
                    
                <input  type="text" name="title" class="form-control" placeholder=" Enter Product Category Name "> 

                </div>


                <div class="form-group">

                <input  class="btn btn-primary" type="submit" name="submit" value="Add Category">



                </div>

                    </form>


<?php

if (isset($_GET['Update'])) 
{
   $id = $_GET['Update'];


   include "./adminincludes/updatecategorydb.php";
}

?>

          

                    
                </div>


            <div class="col-xs-6">
                <table class="table table-bordered table table-responsive">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Title </th>
                        </tr>
                    </thead>
                     <tbody>    
<!--

Showing the updated or entry list
    -->
  <?php

findall();

?>

<!--

 deleting data
    -->

<?php


deletedata();



?>


                          
                         </tbody>

                </table>
            </div>



                    </div>
                </div>


            </div>
     

        </div>


 <?php

include "adminincludes/adminfooter.php";

?>