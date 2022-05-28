<?php 
$con=mysqli_connect('localhost','root','','abc');
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <title>Supervisor</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <?php 
               if (isset($_POST['save'])) {
                   $DATE_AND_TIME=$_POST['DATE_AND_TIME'];
                   $FIRSTNAME=$_POST['FIRSTNAME'];
                   $LASTNAME=$_POST['LASTNAME'];
                   $STUDENT_NUMBER=$_POST['STUDENT_NUMBER'];
                   $ATTEMPT_NUMBER=$_POST['ATTEMPT_NUMBER'];
                   $ATTEMPT_SCORE=$_POST['ATTEMPT_SCORE'];
                   $query=mysqli_query($con,"INSERT INTO attempts (DATE_AND_TIME,FIRSTNAME,LASTNAME,STUDENT_NUMBER,ATTEMPT_NUMBER,ATTEMPT_SCORE)VALUES('$DATE_AND_TIME','$FIRSTNAME','$LASTNAME','$STUDENT_NUMBER',   
                    '$ATTEMPT_NUMBER','$ATTEMPT_SCORE')");
               }
               ?> 
               <?php 
               if (isset($_POST['Update'])) {
                $upd_id=$_GET['upd_id'];
                $DATE_AND_TIME=$_POST['DATE_AND_TIME'];
                $FIRSTNAME=$_POST['FIRSTNAME'];
                $LASTNAME=$_POST['LASTNAME'];
                $STUDENT_NUMBER=$_POST['STUDENT_NUMBER'];
                $ATTEMPT_NUMBER=$_POST['ATTEMPT_NUMBER '];
                $ATTEMPT_SCORE=$_POST['ATTEMPT_SCORE'];
                $qurie=mysqli_query($con,"UPDATE attempts SET DATE_AND_TIME='$DATE_AND_TIME', FIRSTNAME='$FIRSTNAME',LASTNAME='$LASTNAME',STUDENT_NUMBER='$STUDENT_NUMBER',ATTEMPT_NUMBER='$ATTEMPT_NUMBER',ATTEMPT_SCORE='$ATTEMPT_SCORE'WHERE attempt_id='$upd_id' ");
                header("location:manage.php");                                     
            }

            ?>
            <?php

            if (isset($_GET['upd_id'])) {
                $upd_id = $_GET['upd_id'];
                $query = mysqli_query($con,"SELECT * FROM attempts WHERE attempt_id='$upd_id' ");
                $row = mysqli_fetch_array($query);
                ?>

                
                <form method="POST">
                   <h1 class="text-success">Updates DATA HARE</h1>
                   <label>DATE_AND_TIME</label>
                   <input type="Date"  name="DATE_AND_TIME"class="form-control" value="<?php echo $row['DATE_AND_TIME']; ?>">
                   <label>FIRSTNAME</label>
                   <input type="text"  name="FIRSTNAME" class="form-control" value="<?php echo $row['FIRSTNAME']; ?>">
                   <label>LASTNAME</label>
                   <input type="text" name="LASTNAME" class="form-control" value="<?php echo $row['LASTNAME']; ?>" >
                   <label>STUDENT_NUMBER</label>
                   <input type="text" name="STUDENT_NUMBER" class="form-control" value="<?php echo $row['STUDENT_NUMBER']; ?>" >
                   <label>ATTEMPT_NUMBER</label>
                   <input type="number"  name="ATTEMPT_NUMBER" class="form-control" value="<?php echo $row['ATTEMPT_NUMBER'];?>">
                   <label>ATTEMPT SCORE</label>
                   <input type="number" name="ATTEMPT_SCORE"class="form-control" value="<?php echo $row['ATTEMPT_SCORE']; ?>">
                   <br>
                   <input type="submit" name="Update" value="update" class="btn btn-success">
               </form>
               <?php   
           }else{
             ?>
             <form method="POST" class="form-control">
               <h1 class="text-success">INSERT DATA HERE</h1>
               <label>DATE_AND_TIME</label>
               <input type="Date" class="form-control" name="DATE_AND_TIME">
               <label>FIRSTNAME</label>
               <input type="text"  class="form-control" name="FIRSTNAME">
               <label>LASTNAME</label>
               <input type="text"  class="form-control" name="LASTNAME">
                <label><h4>Select Student name</h4></label>
           <select name="STUDENT_NUMBER" id="STUDENT_NUMBER" class="form-control">
      <option value="">--Select Student--</option>
      <?php 
      $sql=mysqli_query($con,"SELECT * FROM student");
      while ($row=mysqli_fetch_array($sql)) {
       ?>
      <option value="<?php echo $row[0] ?>"><?php echo $row[1]; ?></option>  
     <?php } ?>
     </select>
               <label>ATTEMPT_NUMBER</label>
               <input type="number"  class="form-control" name="ATTEMPT_NUMBER">
               <label>ATTEMPT SCORE</label>
               <input type="number"  class="form-control" name="ATTEMPT_SCORE">
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
                <th scope="col">DATE_AND_TIME</th>
                <th scope="col">FIRSTNAME</th>
                <th scope="col">LASTNAME</th>
                <th scope="col">STUDENT_NUMBER</th>
                <th scope="col">ATTEMPT_NUMBER</th>
                <th scope="col">ATTEMPT_SCORE</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query=mysqli_query($con,"SELECT * FROM attempts");
            while ($row=mysqli_fetch_array($query)) {
              ?>
              <tr>
                <td><?php echo $row['attempt_id']; ?></td>
                <td><?php echo $row['DATE_AND_TIME']; ?></td>
                <td><?php echo $row['FIRSTNAME']; ?></td>
                <td><?php echo $row['LASTNAME']; ?></td>
                <td><?php echo $row['STUDENT_NUMBER']; ?></td>
                <td><?php echo $row['ATTEMPT_NUMBER']; ?></td>
                <td><?php echo $row['ATTEMPT_SCORE']; ?></td>
                <td><a href="manage.php?del_id=<?php echo $row['attempt_id'] ?>"class="btn btn-danger">Delete</a></td>
                <td><a href="manage.php?upd_id=<?php echo $row['attempt_id']?>" class="btn btn-success" >UPDATE</a></td>
            </tr>
            <?php
            if (isset($_GET['del_id'])) {
                $del_id=$_GET['del_id'];
                $que=mysqli_query($con,"DELETE FROM attempts WHERE attempt_id='$del_id'");
                header("location:manage.php");                                     

            }
        }
        ?>
    </tbody>
</table>
</div>
</div>
</div>
</body>
</html>