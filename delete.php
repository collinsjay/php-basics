<?php
//GET
if(isset($_GET["id"]))
{
    $conn = mysqli_connect("localhost", "root", "", "work");
    extract($_GET);
    $sql ="delete from employees where id=$id";
    mysqli_query($conn, $sql);
}
header("location:fetch.php");

//git init
//git add .
//git commit -m "Php basics files"