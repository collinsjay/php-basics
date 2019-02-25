<?php
  if(isset($_POST["dob"]))
  {
    extract($_POST);
    /*echo "$names $dob $scholarship $course";*/
      $scholarship = isset($scholarship) ? "Yes" : "No";

      $conn = mysqli_connect("localhost", "root", "", "shule");
      $sql ="INSERT INTO `students`(`id`, `names`, `dob`, `email`, `gender`, `school_id`, `course`, `scholarship`) VALUES 
                                   (null ,'$names' ,'$dob' ,'$email' ,'$gender' ,'$school_id' ,'$course' ,'$scholarship' )";
      mysqli_query($conn, $sql) or die( mysqli_error($conn) );

      $message ="student $names has been registered";
  }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-sm-5">
             <h3>Add student</h3>
             <p class="text-success">
                 <?php
                   if (isset($message))
                       echo $message;
                 ?>
             </p>
             <form action="register.php" method="post">
                 <!-- names, email, gender, course, dob, scholarship, school_id -->
                 <div class="form-group">
                     <input type="text" required class="form-control" name="names" placeholder="Names">
                 </div>
                 <div class="form-group">
                     <input type="text" required class="form-control" name="school_id" placeholder="School ID">
                 </div>
                 <div class="form-group">
                     <input type="email" required class="form-control" name="email" placeholder="Email">
                 </div>
                 <div class="form-group">
                     <input type="date" required class="form-control" name="dob" placeholder="Date Of Birth">
                 </div>

                 <div class="radio">
                     <label><input type="radio" checked value="Male" name="gender"> Male</label>
                 </div>

                 <div class="radio">
                     <label><input type="radio" value="Female" name="gender"> Female</label>
                 </div>

                 <div class="form-group">
                     <select name="course" class="form-control">
                         <option value="Medicine">Medicine</option>
                         <option value="Aviation">Aviation</option>
                         <option value="Law">Law</option>
                         <option value="Communication with IT">Communication with IT</option>
                         <option value="Industrial Chemistry">Industrial Chemistry</option>
                         <option value="Computer Science">Computer Science</option>
                         <option value="BSC Arts">BSC Arts</option>
                     </select>
                 </div>

                 <div class="form-check">
                     <label class="form-check-label">
                         <input class="form-check-input" name="scholarship" value="Yes" type="checkbox"> scholarship?
                     </label>
                 </div>
                 <button type="submit" class="btn btn-primary btn-block">Submit</button>
             </form>
         </div>
     </div>
 </div>









</body>
</html>