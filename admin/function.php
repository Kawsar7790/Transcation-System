
<?php
function confirmQuery($result)
{
    global $conn;

    if (!$result)
     {
        die(" QUERY FAILED ." .mysqli_error($conn));
    }


}


?>


<?php

function addtrans()
{
    global $conn;


        if (isset($_POST['addtrans']))
  
{
       
  $amount = $_POST['tamount'];
  $name = $_POST['cname'];
  $details = $_POST['details'];
  $ttype = $_POST['ttype'];


   



$ttinsertsql =   "INSERT INTO detail_transaction ( client_name , transaction_amount , transaction_type , transaction_details , transaction_status	 ) 
                     VALUES ( '{$name}' , '{$amount}' , '{$ttype}' , '{$details}' , 'In Progress' );"; 

     $addttquery = mysqli_query($conn , $ttinsertsql);


     if (!$addttquery) 
     {
       die(" QUERY FAILED " . mysqli_error($conn));
     }

     




     }

    }

        ?>





<?php

function addclients()

{
    global $conn;


    if (isset($_POST['cadd']))
  
{
       
  
  $name = $_POST['cname'];
  $pass = $_POST['cpass'];


   



$ttinsertsql =   "INSERT INTO client_db ( Username , Password ,Role) 
                     VALUES ( '{$name}' , '{$pass}' , 'Client' );"; 

     $addttquery = mysqli_query($conn , $ttinsertsql);


     if (!$addttquery) 
     {
       die(" QUERY FAILED " . mysqli_error($conn));
     }

     




     }
    }

        ?>



<?php


function calcbalance()
{

    global $conn;

   if (isset($_POST['calc']))
    {
      
   
    global $conn;


  $query3 = "SELECT d.transaction_type , d.transaction_amount, c.client_balance
  FROM detail_transaction d
  JOIN client_db c
  ON d.client_name = c.Username WHERE c.Username = '{$_SESSION['Username']}';";
  
  $sql3=mysqli_query( $conn , $query3 );
 
        

  
  
  
  $balance=0;
  while ($row=mysqli_fetch_assoc($sql3)) 
  {
     
     

    
    $total= $row['client_balance'];
    $amount = $row['transaction_amount'];
    $ttype = $row['transaction_type'];
     

      switch ($ttype) {
        case '2':
          $balance = $total-$amount;
          break;
        
        default:
        $balance = $total+$amount;
          break;
      }




  $query3 = "UPDATE client_db SET client_balance= '{$balance}' WHERE Username = '{$_SESSION['Username']}';";
  $bquery = mysqli_query($conn , $query3);






  if (!$bquery) 
  {
    die(" QUERY FAILED " . mysqli_error($conn));
  }


// calc end
}


}

}



?>






