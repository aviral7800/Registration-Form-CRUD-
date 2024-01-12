<?php
// $insert = false;
// if(isset($_POST['name'])){
   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "registrationform";

   $con = mysqli_connect($server,$username,$password,$dbname);

   if($con){
    // echo "successfully connected to database ";

   }else{
   echo "successfully not connected to database ";
   }
   // $name = $_POST['name'];
// $age = $_POST['age'];
// $gender = $_POST['gender'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];



// $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`,  `DT`) VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp())";
// echo $sql;
// if ($con->query($sql)==true){
    // echo "successfully inserted";
//     $insert = true;

// }
// else{
//     echo "ERROR : $sql '<br>' $sql->error";
// }
// $con->close();
// }
?>
<?php
        // if($insert == true){
        //  echo  "<p class='submitmsg'>Thanks for submitting your form.</p>";
        // }
        ?>