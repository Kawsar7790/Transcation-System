<?php


if (isset($_GET['t_id'])) 
{
   $id = $_GET['t_id'];
}

    $allassetsql  = "SELECT * FROM detail_transaction WHERE transaction_id = '$id' ";
    $allasset = mysqli_query($conn , $allassetsql);

   while ($row=mysqli_fetch_assoc($allasset)) 
    {

      $id=$row['transaction_id'];
      $name = $row['client_name'];
      $amount = $row['transaction_amount'];
      $details= $row['transaction_details']; 
      $status = $row['transaction_status'];
      

    }

    if (isset($_POST['updateasset'])) 

    {
            
      $amount = $_POST['tamount'];
      $name = $_POST['cname'];
      $details = $_POST['details'];


            $updateassetquery  = "UPDATE detail_transaction SET 
              WHERE   AssestTag_No = {$AssestTag_No};";
          


            $updateassetsql=mysqli_query( $conn , $updateassetquery );

            confirmQuery($updateassetsql);




    }
  






?>








<div class="form1">




<form   method="POST" enctype="multipart/form-data">

   

<div class="form-group">

                    <label>Transaction  Amount</label>
                    <input type="text" class="form-control" value="<?php  echo $amount ?>"  name="tamount">
                  </div>

                  <div class="form-group">
                    <label >Client Name</label>
                    <select class="form-control" value="<?php  echo $name ?>" name="cname" >
                   
                  <?php

                      $sql  = "SELECT * FROM client_db ";
                      $result = mysqli_query($conn , $sql);

                        confirmQuery($result);

                      while ($row=mysqli_fetch_assoc($result)) 
                      {
                      $name = $row['Username'];
                      

                      echo   "<option value='$name'> $name </option>";

                      }


                  ?>

                   </select>
                  </div>



                  <div class="form-group">
                    <label>Transaction  Details</label>
                    <input type="text" class="form-control" value="<?php  echo $details ?>"  name="details"> 
                  </div> 

                  <div class="form-group">
                  <label>Transaction  Status </label>
                    <input type="text" class="form-control" value="<?php  echo $status?>" >
                  </div>

     

      <div>
      <input type="submit"  class="btn btn-success" name="updateasset" value=" Update Asset ">
      </div>


</form>
</div>

</div>
<script type="text/javascript" src="js/update_asset.js"></script>