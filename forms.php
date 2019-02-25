<?php
  if(isset($_POST["dob"]))
  {
      $conn = mysqli_connect("localhost", "root", "", "work");
      extract($_POST);
      $sql ="INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`) VALUES 
                                          (null ,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";
      mysqli_query($conn, $sql) or die( mysqli_error($conn) );

      $message ="employee $names has been registered";
  }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forms</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>

<?php
  require 'navbar.php';
?>

 <div class="container">
     <div class="justify-content-center">
         <div class="col-sm-5">
             <h4>Add employee</h4>
             <p>
                 <?php
                 if(isset($message))
                     echo $message;
                 ?>
             </p>
             <form action="forms.php" method="post">
                 <!-- names, email, address, dob, department, gender, kra_pin, salary -->
                 <div class="form-group">
                     <input type="text" required class="form-control" name="names" placeholder="Names">
                 </div>
                 <div class="form-group">
                     <input type="text" required class="form-control" name="email" placeholder="Email">
                 </div>
                 <div class="form-group">
                     <input type="text" required class="form-control" name="address" placeholder="Address">
                 </div>
                 <div class="form-group">
                     <input type="date" required class="form-control" name="dob" placeholder="Date Of Birth">
                 </div>
                 <div class="form-group">
                     <input type="text" required class="form-control" name="kra_pin" placeholder="Kra_pin">
                 </div>
                 <div class="form-group">
                     <input type="text" required class="form-control" name="salary" placeholder="Salary">
                 </div>
                 <div class="radio">
                     <label><input type="radio" checked value="Male" name="gender"> Male</label>
                 </div>

                 <div class="radio">
                     <label><input type="radio" value="Female" name="gender"> Female</label>
                 </div>

                 <div class="form-group">
                     <select name="department" class="form-control">
                         <option value="IT">IT</option>
                         <option value="Security">Security</option>
                         <option value="Distributing">Distributing</option>
                         <option value="Vending">Vending</option>
                         <option value="Accounts">Accounts</option>
                         <option value="Science">Science</option>
                         <option value="Languages">Languages</option>
                     </select>
                 </div>

                 <button type="submit" class="btn btn-primary btn-block">Submit</button>
             </form>

         </div>
     </div>
 </div>


</body>
</html>