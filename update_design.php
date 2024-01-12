<?php include("connection.php");
$id = $_GET['id'];
$query = "select * from form where id= '$id'";
$data= mysqli_query($con,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

$skills = $result['skills'];
$skills1 = explode(",",$skills);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Update details</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="tittle">
            Update details
        </div>
        <div class="form">
            <div class="input_field">
                <label>Name</label>
                <input type="text" value="<?php echo $result['name'];?>" class="input" name="name"required>
            </div>
            <div class="input_field">
                <label>Courses</label>
                <select class="selectbox" name="course" required>
                    <option value="">Select</option>

                    <option value="B.tech"
                    <?php
                    if($result['course']=='B.tech')
                    {
                        echo "selected";
                    }
                    ?>
                    >B.tech</option>
                    <option value="BCA"
                    <?php
                    if($result['course']== 'BCA')
                    {
                        echo "selected";
                    }
                    ?>
                    >BCA</option>
                    <option value="MCA"
                    <?php
                    if($result['course']=='MCA')
                    {
                        echo "selected";
                    }
                    ?>
                    >MCA</option>
                    <option value="B.Com"
                    <?php
                    if($result['course']=='B.Com')
                    {
                        echo "selected";
                    }
                    ?>
                    >B.Com</option>
                    <option value="Bsc"
                    <?php
                    if($result['course']=='Bsc')
                    {
                        echo "selected";
                    }
                    ?>
                    >Bsc</option>
                    <option value="Others"
                    <?php
                    if($result['course']=='Others')
                    {
                        echo "selected";
                    }
                    ?>
                    >Others</option>
                </select>
            </div>
            <div class="input_field">
                <label>Email Address</label>
                <input type="text" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label>Phone</label>
                <input type="text" value="<?php echo $result['phone'];?>" class="input" name="phone" required>
            </div>
           
            <div class="input_field">
            <label style="margin-right:135px;">Gender</label>
                <input type="radio" name="r1" value="Male" required
                <?php
                if($result['gender'] == "Male"){
                    echo "checked";
                }

                ?>
                ><label style="margin-left:5px;"> Male</label>
                <input type="radio" name="r1" value="Female" required
                
                <?php
                if($result['gender'] == "Female"){
                    echo "checked";
                }

                ?>
                
                ><label style="margin-left:5px;"> Female</label>
                <input type="radio" name="r1" value="Others" required
                
                <?php
                if($result['gender'] == "Other"){
                    echo "checked";
                }

                ?>

                ><label style="margin-left:5px;"> Other</label>

            </div> 

            <div class="skills-section">
            <label for="skills" >Skills:</label>

            <!-- First row of checkboxes -->
            <div class="checkbox-row" >
                <input type="checkbox" id="skill1" name="skills[]" value="HTML"
                <?php
                    if(in_array('HTML', $skills1)){
                        echo "checked";
                    }
                ?>
                
                >
                <label for="skill1">HTML</label>

                <input type="checkbox" id="skill2" name="skills[]" value="PHP"
                <?php
                    if(in_array('PHP', $skills1)){
                        echo "checked";
                    }
                ?>
                
                >
                <label for="skill2">PHP</label>

                <input type="checkbox" id="skill3" name="skills[]" value="CSS"
                <?php
                    if(in_array('CSS', $skills1)){
                        echo "checked";
                    }
                ?>
                >
                <label for="skill3">CSS</label>
            </div>

            <!-- Second row of checkboxes -->
            <div class="checkbox-row">
                <input type="checkbox" id="skill4" name="skills[]" value="JavaScript"
                <?php
                    if(in_array('JavaScript', $skills1)){
                        echo "checked";
                    }
                ?>
                >
                <label for="skill4">JavaScript</label>

                <input type="checkbox" id="skill5" name="skills[]" value="Python"
                <?php
                    if(in_array('Python', $skills1)){
                        echo "checked";
                    }
                ?>
                >
                <label for="skill5">Python</label>

                <input type="checkbox" id="skill6" name="skills[]" value="C++"
                <?php
                    if(in_array('C++', $skills1)){
                        echo "checked";
                    }
                ?>
                >
                <label for="skill6">C++</label>
            </div>
        </div>



            <div class="input_field">
            <label for="dob">Date of Birth <br>(yyyy-mm-dd):</label>
            <input type="date" id="dob" value="<?php echo $result['dob'];?>" name="dob" required>
            </div>
            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
</form>
</div>
</body>
</html>

<?php
error_reporting(0);

     if(isset($_POST['update'])){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['r1'];
        $skills = $_POST['skills'];
        $skills1 = implode(",",$skills);
        $dob = $_POST['dob'];

        

        // $query = "UPDATE form SET (name,course,email,phone,gender`,`dob`) values('$name',' $course','$email','$phone','$gender','$dob')";
        
        $query = "UPDATE form set name='$name',course='$course',email='$email',phone='$phone',gender='$gender',skills='$skills1' ,dob='$dob' where id='$id'";

        $data = mysqli_query($con,$query);
        if($data){
            echo "<script>alert('Record Updated')</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/avi/display.php" />
            <?php
        }
        else{
            echo "failed";
        }

        }
        // else{
        //     echo "please fill the form";
        // }

    //  }
// echo $_GET['id'];
// echo $_GET['nm'];
// echo $_GET['cs'];
// echo $_GET['em'];
// echo $_GET['ph'];
// echo $_GET['gd'];
// echo $_GET['db'];
?>



    