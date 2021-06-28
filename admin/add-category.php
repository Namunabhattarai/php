<?php include('partials/menu.php');  ?>
<div class="main-content">
        <div class="wrapper">
         <h1>Add category</h1>
         <br>
         <br>
         <form action="" method="POST" enctype="multipart/form-data">
         <table class="tbl-30">
         <tr>
                <td>Title:</td>
                <td><input type="text" name="title"></td>
        </tr> 
        <tr>
                <td>Select image:</td>
                <td>
                <input type="file" name="image">
                </td>
        </tr>
        <tr>
                <td>Featured:</td>
                <td>
                <input type="radio" name="featured" value="yes">Yes
                <input type="radio" name="featured" value="no">N0
                </td>
        </tr>
        <tr>
                <td>Active:</td>
                <td>
                <input type="radio" name="active" value="yes">Yes
                <input type="radio" name="active" value="no">No

                </td>
        </tr> 
            
            

        <tr>
                <td colspan="2">
                 <input type="submit" name="submit" value="Add category" class="btn-secondary">
                </td>
        </tr> 
        </table>
         </form>
         </div>
</div>

<?php include('partials/footer.php'); ?>
<?php
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    if(isset($_POST['featured'])){
        $featured=$_POST['featured'];
    }
    else{
        $featured="N0";
    }
    if(isset($_POST['active'])){
        $active=$_POST['active'];
    }
    else{
        $active="No";
    }

//check whether image is selected or not and set the value for image name accordingly
// print_r($_FILES['image']);
// die();

if(isset($_FILES['image'])){
    
    $image_name=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $move="upload/$image_name";
    move_uploaded_file($image_tmp,$move);

    // if(!empty($image_name))
    // {
    
    // $file_actual = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); 
    
    
    // // valid image extensions
    // $valid_extensions = array('jpeg','jpg','gif'); 
    
    
    // if(in_array($file_actual, $valid_extensions))
    // {
    // move_uploaded_file($image_tmp,"/upload/$image_name");
    
    // echo "images uploaded:";
    //  }
    // else
    // {
    //     echo "Sorry only jpg,jpeg and gif allowed:";
    // }
    
    
    
    // }
     }

 
$sql="insert into tbl_category values('','$title','$image_name','$featured','$active')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('location:manage-category.php');

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}






?> 