<?php
if(isset($_POST['email'])){
  $email = $_POST['email'];
  echo $email;
} else {
  header ('Location:/');
}

 ?>
