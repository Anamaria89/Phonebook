<?php
$connect = mysqli_connect("localhost", "root", "", "phonebook");
if(isset($_POST["first_name"], $_POST["last_name"],$_POST["phone"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
 $query = "INSERT INTO data(first_name, last_name, phone) VALUES('$first_name', '$last_name', '$phone')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
