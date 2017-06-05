
<?php

$link = mysqli_connect('localhost','root','','my_first_blog');
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// attempt insert query execution
$sql = "INSERT INTO email_tb (email) VALUES ('$email')";


if(mysqli_query($link, $sql)){
    header('Location: http://localhost/blog/index.php');


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
