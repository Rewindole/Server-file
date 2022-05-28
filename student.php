<?php 
$con=mysqli_connect('localhost','root','','abc');
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <title>Student</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <?php 
               if (isset($_POST['save'])) {
                   $stu_name=$_POST['stu_name'];
                   $stu_marks=$_POST['stu_marks'];
            $query=mysqli_query($con,"INSERT INTO student (stu_name,stu_marks)VALUES('$stu_name','$stu_marks')");
               }
               ?> 
               <?php 
               if (isset($_POST['Update'])) {
                $upd_id=$_GET['upd_id'];
                $stu_name=$_POST['stu_name'];
                $stu_marks=$_POST['stu_marks'];
                $qurie=mysqli_query($con,"UPDATE student SET stu_name='$stu_name', stu_marks='$stu_marks'WHERE attempt_id='$upd_id' ");
                header("location:student.php");                                     
            }

            ?>
            <?php

            if (isset($_GET['upd_id'])) {
                $upd_id = $_GET['upd_id'];
                $query = mysqli_query($con,"SELECT * FROM student WHERE student_id='$upd_id' ");
                $row = mysqli_fetch_array($query);
                ?>

                
                <form method="POST">
                   <h1 class="text-success">Updates DATA HARE</h1>
                   <label>Student Name</label>
               <input type="text"  class="form-control" name="stu_name" value="<?php echo $row['stu_name']; ?>">
               <label>Student Marks</label>
               <input type="text"  class="form-control" name="stu_marks" value="<?php echo $row['stu_marks']; ?>">
                   <br>
                   <input type="submit" name="Update" value="update" class="btn btn-success">
               </form>
               <?php   
           }else{
             ?>
             <form method="POST" class="form-control">
               <h1 class="text-success">INSERT DATA HERE</h1>
               <label>Student Name</label>
               <input type="text"  class="form-control" name="stu_name">
               <label>Student Marks</label>
               <input type="text"  class="form-control" name="stu_marks">
               <br>
               <input type="submit" name="save" class="btn btn-success">
           </form>
           <?php 
       }
       ?>

       <br><br>

       <table class="table table-dark " style="border-radius:10px;">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Marks</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query=mysqli_query($con,"SELECT * FROM student");
            while ($row=mysqli_fetch_array($query)) {
              ?>
              <tr>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['stu_name']; ?></td>
                <td><?php echo $row['stu_marks']; ?></td>
                <td><a href="student.php?del_id=<?php echo $row['student_id'] ?>"class="btn btn-danger">Delete</a></td>
                <td><a href="student.php?upd_id=<?php echo $row['student_id']?>" class="btn btn-success" >UPDATE</a></td>
            </tr>
            <?php
            if (isset($_GET['del_id'])) {
                $del_id=$_GET['del_id'];
                $que=mysqli_query($con,"DELETE FROM student WHERE student_id='$del_id'");
                header("location:student.php");                                     

            }
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
<a href="manage.php">Go for Supervisor Page</a>
</body>
</html>