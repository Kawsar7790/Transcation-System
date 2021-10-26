
<?php
include "fetch.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="count"></div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
           jQuery(document).ready(function($) 
           {

            $.ajax({
    type: "post",
    url: "fetch.php",
    data: {
        myLuckyNumber: 13
    },
    success: function(response) {
        console.log(response);
    }
});
           });





           
         
         </script>