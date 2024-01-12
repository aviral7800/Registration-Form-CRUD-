<html>
<head>
    <title>Display</title>
    <style>
         body{
            background: #99ddff;
         }
         table{
            background-color:white;
         }
         .update{
            background-color:purple;
            color:white;
            border : 0;
            border-radius:3px;
            height:25px;
            width:93px;
            font-weight:bold;
            cursor: pointer;

         }
         .delete{
            background-color:red;
            color:white;
            border : 0;
            border-radius:3px;
            height:25px;
            width:93px;
            font-weight:bold;
            cursor: pointer;

         }
    </style>

</head>

</html>



<?php
include("connection.php");
error_reporting(0);
$query = "select * from form";
$data= mysqli_query($con,$query);

$total = mysqli_num_rows($data);

if($total != 0){
    // echo "table has records";\
    ?>  
    <h2 align = "center">All Records</h2>
     <center><table border="1px" cellspacing="8" width="100%">
        <tr>
            <th width=5%>ID</th>
        <th width="9%">Name</th>
        <th width="9%">Course</th>
        <th width="15%">Email</th>
        <th width="9%">Phone</th>
        <th width="9%">Gender</th>
        <th width="9%">D.O.B</th>
        <th width="20%">Skills</th>
        <th width="15%">Operations</th>
        
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                  <td>".$result['id']."</td>
                  <td>".$result['name']."</td>
                  <td>".$result['course']."</td>
                  <td>".$result['email']."</td>
                  <td>".$result['phone']."</td>
                  <td>".$result['gender']."</td>
                  <td>".$result['dob']."</td>
                  <td>".$result['skills']."</td>
                  <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class ='update'> </a>
                  <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class ='delete' onclick= 'return checkdelete()'> </a><td>
              </tr>";
    }

}
else{
    // echo "no records found";
}

?>
</table>
</center> 
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record ?');
    }
</script>



