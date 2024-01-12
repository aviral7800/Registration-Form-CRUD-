<?php include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="tittle">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label>Name</label>
                <input type="text" class="input" name="name"required>
            </div>
            <div class="input_field">
                <label>Courses</label>
                <select class="selectbox" name="course" required>
                    <option value="">Select</option>
                    <option value="B.tech">B.tech</option>
                    <option value="BCA">BCA</option>
                    <option value="MCA">MCA</option>
                    <option value="B.Com">B.Com</option>
                    <option value="Bsc">Bsc</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="input_field">
                
                <label>Email Address</label>
                <input type="email" class="input" name="email" id="email" required>
            </div>
            <div class="input_field">
                <label>Phone</label>
                <input type="phone" class="input" name="phone" id="number" required>
            </div>
            <div class="input_field">
            <label style="margin-right:135px;">Gender</label>
                <input type="radio" name="r1" value="Male" required><label style="margin-left:5px;"> Male</label>
                <input type="radio" name="r1" value="Female" required><label style="margin-left:5px;"> Female</label>
                <input type="radio" name="r1" value="Others" required><label style="margin-left:5px;"> Other</label>

            </div>
             
            <div class="skills-section">
            <label for="skills" >Skills:</label>

            <!-- First row of checkboxes -->
            <div class="checkbox-row" >
                <input type="checkbox" id="skill1" name="skills[]" value="HTML">
                <label for="skill1">HTML</label>

                <input type="checkbox" id="skill2" name="skills[]" value="PHP">
                <label for="skill2">PHP</label>

                <input type="checkbox" id="skill3" name="skills[]" value="CSS">
                <label for="skill3">CSS</label>
            </div>

            <!-- Second row of checkboxes -->
            <div class="checkbox-row">
                <input type="checkbox" id="skill4" name="skills[]" value="JavaScript">
                <label for="skill4">JavaScript</label>

                <input type="checkbox" id="skill5" name="skills[]" value="Python">
                <label for="skill5">Python</label>

                <input type="checkbox" id="skill6" name="skills[]" value="C++">
                <label for="skill6">C++</label>
            </div>
        </div>

            

            <div class="input_field">
            <label for="dob">Date of Birth <br>(dd-mm-yyyy):</label>
            <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input_field">
                <input type="submit" value="Submit" class="btn" name="register">
            </div>
        </div>
</form>
</div>

<script>
   

</script>

</body>
</html>

<?php
// error_reporting(0);

     if(isset($_POST['register'])){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['r1'];
        $skills = $_POST['skills'];
        $skills1 = implode(",",$skills);
        $dob = $_POST['dob'];
        

        $query = "INSERT INTO `registrationform`.`form` (`name`,`course`,`email`,`phone`,`gender`,`skills`,`dob`) values('$name',' $course','$email','$phone','$gender', '$skills1','$dob')";
        $data = mysqli_query($con,$query);
        // if($data){ if ()
        //     echo "data insterted";
        // }
        // else{
        //     echo "failed";
        // }

        }
        // else{
        //     echo "please fill the form";
        // }

    //  }

?>
    