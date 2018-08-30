<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "zexpress_001";
$password = "Delicate$121*#";
$dbname = "zexpress_001";
$trackingid = $_POST['trackingid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tracking WHERE trackingid = '$trackingid'";
$result = $conn->query($sql);
if ($result->num_rows == 0 ) {
       echo '<script>window.alert("Tracking ID Does Not Exist!");
</script> <script>window.location = 

"index.php"</script>';
exit();
}
// Set session variables
if ($trackingid == ""){
     echo '
</script> <script>window.location = 

"index.php"</script>';
exit();
    
}else{
    $_SESSION["trackingid"] = "$trackingid";
    session_write_close();
    sleep(2);
 echo '
</script> <script>window.location = 

"tracking.php"</script>';
exit();}
?>

</body>
</html> 