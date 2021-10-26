<?php



if (isset($_POST['addtrans']))
  
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