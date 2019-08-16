<h2> List Comment</h2>
<div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Product</th>
                          <th>Content</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      		<?php 
								while($row = $listComment->fetch_assoc()) {
								 	$id = $row['id'];
							?>
		                        <tr>
		                          <td><?php echo $row['id'] ?></td>
		                          <td><?php  
		                          	$user = $model->getUserComment($row['user_id']);
		                          	echo $user['name'];
		                          ?></td>
		                          <td><?php 
		                          	$product = $model->getProductComment($row['product_id']);
		                          	echo $product['name'];
		                          ?></td>
		                          <td><?php echo $row['content'] ?></td>
		                          <td><?php echo $row['created'] ?></td>
		                          <td>
		                          	<?php 
		                          	if ($row['status'] == 1 ) {
		                          	
		                          	
		                          	?>
		                          	<a href="admin.php?controller=comment&action=hide_comment&id=<?php echo $row['id'] ?>" class="badge badge-success ">Đang hiển thị</a>
		                          	<?php
		                          	}else {
		                          	?>
		                          	<a href="admin.php?controller=comment&action=show_comment&id=<?php echo $row['id'] ?>" class="badge badge-warning">Đang ẩn</a>
		                          	<?php
		                          	}
		                          	?>
		                            
		                          </td>
		                          <td>
		                          	<a href="admin.php?controller=comment&action=delete_comment&id=<?php echo $row['id'] ?>" class="badge badge-danger">Delete</a>
		                            
		                          </td>
		                        </tr>
		                    <?php 
		                    	}
		                    ?>
                        
                      </tbody>
                    </table>
                  </div>
