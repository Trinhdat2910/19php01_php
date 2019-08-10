<h2> List User</h2>
<div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Contact</th>
                          <th>Birthday</th>
                          <th>Avatar</th>
                          <th colspan="2" style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      		<?php 
								while($row = $listUser->fetch_assoc()) {
								 	$id = $row['id'];
							?>
		                        <tr>
		                          <td><?php echo $row['id']?></td>
		                          <td><?php echo $row['username']?></td>
		                          <td>Name: <?php echo $row['name']?><br>
		                          Email: <?php echo $row['email']?><br>
		                          Phone: <?php echo $row['phone']?></td>
		                          <td><?php echo $row['birthday']?></td>
		                          <td><img src="<?php echo $row['avatar']?>" alt="image" class="avatar_user"></td>
		                          <td>
		                          	<a href="admin.php?controller=user&action=edit_user&id=<?php echo $row['id'] ?>" class="badge badge-warning">Edit</a>
		                            
		                          </td>
		                          <td>
		                          	<a href="admin.php?controller=user&action=delete_user&id=<?php echo $row['id'] ?>" class="badge badge-danger">Delete</a>
		                            
		                          </td>
		                        </tr>
		                    <?php 
		                    	}
		                    ?>
                        
                      </tbody>
                    </table>
                  </div>
