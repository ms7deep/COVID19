<?php


$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
  ?>
  <script>
    alert("Connected Successfully");
  </script>
  <?php
}else{
    ?>
    <script>
      alert("Connection UNSUCCESSFULL");
    </script>
    <?php
  }




?>
