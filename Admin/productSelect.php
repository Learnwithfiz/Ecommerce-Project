<?php
 include 'db.php';
   $select = "SELECT * FROM add_product";
   $ex = mysqli_query($con,$select);
   while($row=mysqli_fetch_array($ex)){?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>

            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['current_price'] ?></td>
            <td><?php echo $row['before_price'] ?></td>
            <td><?php echo $row['buying_price'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><img height="100" width="100" src="<?php echo $row['img'] ?>"></td>
            <td><button onclick="editData(<?php echo $row['id'] ?>)" class='btn btn-danger'>edit</button></td>
            <td><button onclick="DeleteData(<?php echo $row['id'] ?>)" class='btn btn-danger'>delete</button></td>
        </tr>
  <?php }
 ?>