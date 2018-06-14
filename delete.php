<?php
$connect = mysqli_connect("localhost", "root", "", "phonebook");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM data WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>