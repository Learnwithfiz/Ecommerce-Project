<?php
 include 'db.php';
                     $id =1;
                      $sel = "SELECT * FROM order_product";
                      $ex = mysqli_query($con,$sel);
                      while($row=mysqli_fetch_array($ex)){?>
                         <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo  $row['email'] ?></td>
                            <td><?php echo  $row['phone'] ?></td>
                            <td><?php echo $row['payment'] ?></td>
                            <td><?php echo $row['user_order'] ?></td>
                            <td><?php echo $row['total_taka'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td><button onclick="Pending(<?php echo $row['id'] ?>)" class='btn btn-danger'>pending...</button></td>
                            <td><button onclick="userDelete(<?php echo $row['id'] ?>)" class='btn btn-warning'>Delete</button></td>
                            <td><button onclick="view(<?php echo $row['id'] ?>)" class='btn btn-primary'>view</button></td>
                         </tr>
                    <?php  }
                   ?>