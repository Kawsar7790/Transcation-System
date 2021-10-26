<?php

addtrans();

 ?>
  
  
  


  <div class="form1">




            <form   method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Transaction  Amount</label>
                    <input type="text" class="form-control"   name="tamount">
                  </div>

                  <div class="form-group">
                    <label >Client Name</label>
                    <select class="form-control" name="cname" >
                   
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
                    <label > Trasaction Type</label>
                    <select class="form-control" name="ttype" >
                   
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



                  <div class="form-group">
                    <label>Transaction  Details</label>
                    <textarea type="text" class="form-control"   name="details"> </textarea>
                  </div> 

                  
                 

                  <div>
                  <button type="submit"  class="btn btn-success" name="addtrans">  Add   </button>
                  </div>


            </form>
          </div>

          </div>
          <script type="text/javascript" src="js/AddAsset.js"></script>


          