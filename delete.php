<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM form WHERE id='$id'";

$data = mysqli_query($con,$query);
if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/avi/display.php" />
    <?php
}
else{
    echo "failed to delete";
}
?>