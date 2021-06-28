<?php
  include('config.php');
 $id=$_GET['id'];

$sql="delete from tbl_category where id=$id";

if (mysqli_query($conn, $sql)) {
    
    header('location:manage-category.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  


?>