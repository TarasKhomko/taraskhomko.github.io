
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myDB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";


if(mysqli_query($link, $sql)){
    header('Location: http://localhost/blog01/index.html');
   
 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
