<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sqletud.u-pem.fr", "lkim1", "8beinuydG2", "lkim1_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$msg = mysqli_real_escape_string($link, $_REQUEST['Message']);
 
// Attempt insert query execution
$sql = "INSERT INTO contact (email, msg) VALUES ('$email', '$msg')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>