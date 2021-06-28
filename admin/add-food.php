<?php include('partials/menu.php');  ?>
<div class="main-content">
        <div class="wrapper">
         <h1>Add Admin</h1>
    <br>
        

<form action="#" method="POST" enctype="multipart/form-data"> 
    <table class="tbl-30">
    <tr>
        
        <td>Title:</td>
        <td>
        <input type="text" name="title">
        </td>

        
    </tr>
    <tr>
    <td>Description:</td>
    <td>
    <textarea name="description" cols="30" rows="5"></textarea>
    </td>
    </tr>

    <tr>
    <td>Price:</td>
    <td>
    <input type="number" name="price">
    </td>
    </tr>

    <tr>
    <td>Select image:</td>
    <td>
    <input type="file" name="image">

    </td>
    </tr>

    <tr>
    <td>Category:</td>
    <td>
    <select name="category">
    <?php
    $sql="select * from tbl_category where active="yes"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        
    ?>
    <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
    

    </select>
    </td>
    </tr>

    <tr>
    <td>Featured:</td>
    <td> 
    <input type="radio" name="featured" value="Yes">Yes
    <input type="radio" name="featured" value="No">No
    </td>
    </tr>

    <tr>
    <td>Active:</td>
    <td> 
    <input type="radio" name="active" value="Yes">Yes
    <input type="radio" name="active" value="No">No
    </td>
    </tr>

    <tr>
                <td colspan="2">
                 <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                </td>
    </tr> 

    </table>
</form>
</div>
</div>
<?php include('partials/footer.php');  ?>


