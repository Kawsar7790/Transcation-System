<div class="container-fluid">




<h4 style="text-align: center;">  <strong> Clients List </strong> </h4>



<div class="table-responsive">


<table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ID </th>
                              <th>Client Name</th>
                              <th> Balance</th>
                             
                           

                            </tr>
                          </thead>
              <tbody>

                          <?php



    $sql  = "SELECT * FROM client_db WHERE Role = 'Client';";
    $result = mysqli_query($conn , $sql);

    while ($row=mysqli_fetch_assoc($result)) 
    {


          $id = $row['Client_ID']; 
          $name=$row['Username'];
          $balance=$row['client_balance'];


    

        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$balance BDT</td>";
     
    
        echo "<td><a type='submit' class='btn btn-danger'  href='clients.php?delete={$id}'> Delete </a></td>";
        echo "<td><a type='button' class='btn btn-warning' href='clients.php?source=update_clients&p_id={$id}'>Update</a></td>";

        
        echo "</tr>";




                       

           
           

    } 

?>

</tbody>

</table>



</div>

</div>




<?php

if (isset($_GET['delete'])) 
{
      $id = $_GET['delete'];

      $deletesql = "DELETE FROM client_db WHERE Client_ID='{$id}';";
      $query= mysqli_query($conn , $deletesql);

}

?>