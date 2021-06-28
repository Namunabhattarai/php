<?php include('partials/menu.php');  ?>
<div class="main-content">
<div class="wrapper">
         <h1>Update category</h1>
    <br>
    <?php 
        $id=$_GET['id'];
        $sql="select * from tbl_category where id='$id'";
        $result = $conn->query($sql);
                
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
    ?>
    
    <form action="" method="POST" enctype="multipart/form-data">
         <table class="tbl-30">
         <tr>
                <td>Title:</td>
                <td><input type="text" name="title" value="<?php echo $row['title']; ?>"> </td>
        </tr> 
        <tr>
                <td>Current Image</td>
                <td>
                image displayed
                </td>
        </tr>
        <tr>
                <td>New Image</td>
                <td>
                <input type="file" name="image">
                </td>
        </tr>
        
        
        <tr>
                <td>Featured:</td>
                <td>
                <input <?php if($row['featured']=="yes"){ echo "checked";}?> type="radio" name="featured" value="yes">Yes
                <input <?php if($row['featured']=="no"){ echo "checked";}?> type="radio" name="featured" value="no">N0
                </td>
        </tr>
        <tr>
                <td>Active:</td>
                <td>
                <input <?php if($row['active']=="yes"){ echo "checked";}?> type="radio" name="active" value="yes">Yes
                <input <?php if($row['active']=="no"){ echo "checked";}?> type="radio" name="active" value="no">No

                </td>
        </tr> 
            
            

        <tr>
                <td colspan="2">
                 <input type="submit" name="submit" value="Update category" class="btn-secondary">
                </td>
        </tr> 
        </table>
         </form>
         <?php }} ?>
         
</div>

</div>

<?php include('partials/footer.php');  ?>
<?php
if(isset($_POST['submit'])){
echo "clicked";
 }

?> 