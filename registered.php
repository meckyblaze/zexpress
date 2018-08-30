<?php
$servername = "localhost";
$username = "zexpress_001";
$password = "Delicate$121*#";
$dbname = "zexpress_001";

$email = $_POST['email'];
$shipdate = $_POST['shipdate'];
$shippersname = $_POST['shippersname'];
$shippersaddress = $_POST['shippersaddress'];
$deliverydate = $_POST['deliverydate'];
$receiversname = $_POST['receiversname'];
$receiversaddress = $_POST['receiversaddress'];
$weight = $_POST['weight'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address3 = $_POST['address3'];
$address4 = $_POST['address4'];
$b = $_POST['b'];
$trackingid = $_POST['trackingid'];
$a = $_POST['a'];
;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 	trackingid FROM tracking WHERE 	trackingid='$trackingid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<script>

    alert("Tracking ID EXISTS TRY ANOTHER ONE");

</script>
</script> <script>window.location = 

"index.php"</script>';
exit();
    }
}else { 
    //send email
$to = "$email";
$subject = "PACKAGE DETAILS";
$from= "....";
$headers = "From:support@zexpresscouriers.com" . $from;
$data = "\r\n$receiversname, Welcome to Zoom Express, your order has been received and being processed. your tracking ID is $trackingid, Estimated deliverydate is $deliverydate.\r\n Kindly log on to https://www.zexpresscouriers.com\r\n and input your tracking ID TO monitor your package.\r\n(this is an automated email and cant receive responses).";
mail($to,$subject,$data,$headers);
$encrypt=md5($email);
$sql = "INSERT INTO tracking (shipdate, shippersname, shippersaddress, deliverydate, receiversname, receiversaddress, weight, address1, address2, address3, address4, b, trackingid, a)
VALUES ('$shipdate', '$shippersname', '$shippersaddress', '$deliverydate', '$receiversname', '$receiversaddress', '$weight', '$address1', '$address2', '$address3', '$address4', '$b', '$trackingid', '$a')";
   ;

if ($conn->query($sql) === TRUE) {
   
 
    	
    	// Process your response here
    echo '<script>
    alert("CLIENT REGISTRATION SUCCESSFULL");

</script>
</script> <script>window.location = 

"index.php"</script>';
exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?> 