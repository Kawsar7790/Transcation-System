

<?php



if (isset($_POST['addtrans1']))
  
{

  $amount = $_POST['tamount'];
  $ttype = $_POST['ttype'];
  $details = $_POST['details'];






$ttinsertsql =   "INSERT INTO detail_transaction ( client_name , transaction_amount ,  transaction_type , transaction_details , transaction_status	 ) 
                     VALUES ( '{$_SESSION['Username'] }' , '{$amount}'  , '{$ttype}' ,  '{$details}' , 'In Progress' );"; 

     $addttquery = mysqli_query($conn , $ttinsertsql);






     if (!$addttquery) 
     {
       die(" QUERY FAILED " . mysqli_error($conn));
     }

     
    }


?>




<?php

  
  calcbalance();
  

        ?>
  
  



  <div class="form1">




            <form  id="form1" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Transaction  Amount</label>
                    <input type="text" class="form-control" id="a"  name="tamount">
                  </div>


                  <div class="form-group">
                    <label>Transaction  Details</label>
                    <textarea type="text" class="form-control" id="d"  name="details"> </textarea>
                  </div> 

                  
                  <div class="form-group">
                    <label > Trasaction Type</label>
                    <select class="form-control" name="ttype" id="t">
                   
                  <?php

                      $sql  = "SELECT * FROM transaction_type ";
                      $result = mysqli_query($conn , $sql);

                        confirmQuery($result);

                      while ($row=mysqli_fetch_assoc($result)) 
                      {
                      $id = $row['id'];
                      $name = $row['type'];
                      

                      echo   "<option value='$id'> $name </option>";

                      }


                  ?>

                   </select>
                  </div>



                  <div>
                  <button type="submit"  class="btn btn-success" name="addtrans1">  Add   </button>
                  </div>


            </form>
          </div>

          </div>
          <script type="text/javascript" src="js/AddAsset.js"></script>


          