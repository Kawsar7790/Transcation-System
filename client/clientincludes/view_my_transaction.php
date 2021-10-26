

<section>

<div class="container-fluid">


<div class="row">

<div class="col-6">


<h4 style="text-align: center;">  <strong> Pending Transaction</strong> </h4>



<div class="table-responsive">


<table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ID </th>
                              <th>Client Name</th>
                              <th>Amount</th>
                              <th>Transaction Type</th>
                              <th>Details</th>
                              <th>Status</th>
                           

                            </tr>
                          </thead>
              <tbody>




<?php

if (isset($_POST['done'])) 
      
{
  
 $updatettquery  = "UPDATE detail_transaction SET transaction_status='Completed' WHERE transaction_id='{$id}' ";



$updatetsql=mysqli_query( $conn , $updatettquery );

confirmQuery($updatetsql);



}


?>





                          <?php



    $sql  = "SELECT * FROM detail_transaction WHERE transaction_status = 'In Progress' AND client_name = '{$_SESSION['Username']}' ;";
    $result = mysqli_query($conn , $sql);

    while ($row=mysqli_fetch_assoc($result)) 
    {


      $id=$row['transaction_id'];
      $name = $row['client_name'];
      $amount = $row['transaction_amount'];
      $type=$row['transaction_type'];
      $details= $row['transaction_details']; 
      $status = $row['transaction_status'];

    

        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$amount</td>";
        echo "<td>$type</td>";
        echo "<td>$details</td>";
        echo "<td>$status</td>";
        

        
        echo "</tr>";




                       

           
           

    } 


?>

</tbody>

</table>



</div> <!--col1 -->



<div class="col-6">


<h4 style="text-align: center;">  <strong> Completed Transaction</strong> </h4>

<div class="table-responsive">


<table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ID </th>
                              <th>Client Name</th>
                              <th>Amount</th>
                              <th>Transaction Type</th>
                              <th>Details</th>
                              <th>Status</th>
                           

                            </tr>
                          </thead>
              <tbody>

                          <?php



    $sql  = "SELECT * FROM detail_transaction WHERE transaction_status = 'Completed' AND client_name = '{$_SESSION['Username']}' ;";
    $result = mysqli_query($conn , $sql);

    while ($row=mysqli_fetch_assoc($result)) 
    {

    

      $id=$row['transaction_id'];
      $name = $row['client_name'];
      $amount = $row['transaction_amount'];
      $type=$row['transaction_type'];
      $details= $row['transaction_details']; 
      $status = $row['transaction_status'];

    

        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$amount</td>";
        echo "<td>$type</td>";
        echo "<td>$details</td>";
        echo "<td>$status</td>";
        

        
        
        echo "</tr>";




                       

           
           

    } 

?>

</tbody>

</table>



</div>  <!-- col2 -->












</div> <!--row -->

</div>

<?php


 $query = "SELECT * FROM client_db WHERE Username = '{$_SESSION['Username']}';";

 $sql=mysqli_query( $conn , $query );



 while ($row=mysqli_fetch_assoc($sql)) 
 {
    
    $tbalance=$row['client_balance'];

    echo "<h3 style='text-align:center; color: blue;'>  Your Total Balance Is $tbalance BDT </h3>";


 }




 ?>



</div>

</section>   


<?php

if (isset($_GET['delete'])) 
{
      $id = $_GET['delete'];

      $deletesql = "DELETE FROM detail_transaction WHERE transaction_id='{$id}';";
      $query= mysqli_query($conn , $deletesql);

}

?>