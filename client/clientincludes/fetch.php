<?php

include "../includes/db.php";

if (isset($_POST["view"])) 
{
    


$query= "SELECT * FROM detail_transaction ORDER BY transaction_id DESC LIMIT 5;";
$result= mysqli_query($conn , $query);
$output='';


if (mysqli_num_rows($result) >0) 
{
   
        while ($row=mysqli_fetch_array($result))
        {
            $output .= '
            <li>
             <a href="#">
              <strong>'.$row["transaction_id"].'</strong><br />
              <small><em>'.$row["transaction_details"].'</em></small>
             </a>
            </li>
            <li class="divider"></li>
            ';


        }

} 

else 

{
    $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
}

$query_1 = "SELECT * FROM detail_transaction WHERE transaction_status='In Progress'";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}



?>