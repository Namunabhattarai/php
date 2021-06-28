    <!-- Menu Selection Starts -->
    <?php include('partials/menu.php');  ?>

    <!-- Main Content Section Starts -->
    <div class="main-content">
            <div class="wrapper">
            <h1>Manage category</h1>
            <br>
         <!-- Button to Add Admin -->
        <a href="add-category.php" class="btn-primary">Add category</a>
        <br><br>

            <table class="tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Featured</th>  
                    <th>Active</th>
                    <th>Actions</th> 
                </tr>
                <?php

                $sql = "SELECT * FROM tbl_category";
                // $run=mysqli_query($sql,$conn);
                // $i=0;
                // while($row=mysqli_fetch_array($run)){
                //   $i++;


                



                $result = $conn->query($sql);
                $sn=1;
                
                if ($result->num_rows > 0) {
                  //output data of each row
                  while($row = $result->fetch_assoc()) {
                      ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><img src="upload/<?php echo $row['image_name'];?>" height=100px; width=100px;></td>
                    <td><?php echo $row['featured']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                    <td>
                  <a href="update-category.php?id=<?php echo $row['id']; ?>" class="btn-secondary">Update category</a>
                  <a href="delete-category.php?id=<?php echo $row['id']; ?>"  class="btn-danger">Delete category</a>
                    </td>
                </tr>   
                <?php  
                }
              }
                else {
                  echo "0 results";
                }
                $conn->close();
                ?>

            </table>
            
            <div class="clearfix"></div>
        </div>
        <!--  Main Content Section Ends -->



   <!-- Footer Selection Starts -->
   <?php include('partials/footer.php');  ?>