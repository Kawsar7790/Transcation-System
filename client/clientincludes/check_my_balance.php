
<?php



//
 $query = "SELECT * FROM client_db WHERE Username = '{$_SESSION['Username']}';";

 $sql=mysqli_query( $conn , $query );



 while ($row=mysqli_fetch_assoc($sql)) 
 {
    
    $tbalance=$row['client_balance'];

    echo "<h3>  Balance Is $tbalance </h3>";


 }




$query3 = "SELECT d.transaction_type , d.transaction_amount, c.client_balance FROM detail_transaction d JOIN client_db c
ON d.client_name = c.Username WHERE c.Username = '{$_SESSION['Username']}';";

$sql3=mysqli_query( $conn , $query3 );

$a=0;

while ($row=mysqli_fetch_assoc($sql3)) 
  {
     
     
     $amount = $row['transaction_amount'];
     $total= $row['client_balance'];

     
      

      $a = $total - $amount;


      
  

  }
 ?>

   





