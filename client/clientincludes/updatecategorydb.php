

<form action="" method="POST">

<div class="form-group"> 

<label> Update Category  </label>




<?php


if (isset($_GET['Update']))
{
$id=$_GET['Update'];


$sql  = "SELECT * FROM category WHERE id='$id';";
$result = mysqli_query($conn , $sql);


while ($row=mysqli_fetch_assoc($result)) 
{
$id = $row['id'];
$title = $row['title'];

?>


<input  value=" <?php  if (isset($title)) { echo $title ; } ?>" type="text" name="title" class="form-control"> 



<?php
}

}
?>


<?php





if (isset($_POST['Update-Category']))
{

$title = $_POST['title'];


$sqlupdate = " UPDATE category SET title = '$title'  WHERE id='$id' ";
$resultupdate = mysqli_query($conn , $sqlupdate);

if (!$resultupdate) 

{
die("QUERY FAILED" . mysqli_error($conn));
}

}



?>



</div>

<div class="form-group">

<input  class="btn btn-primary" type="submit" name="Update-Category" value="Update Category">



</div>

    </form>





