<h2> List Product</h2>
<div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Image</th>
                          <th colspan="2" style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      		<?php 
								while($row = $listProduct->fetch_assoc()) {
								 	$id = $row['id'];
							?>
		                        <tr>
		                          <td><?php echo $row['id']?></td>
		                          <td><?php echo wordwrap(ucfirst($row['name']), 20, '<br />');?></td>
		                          <td > <p style=" text-overflow: ellipsis; overflow: hidden;  -webkit-line-clamp: 3; -webkit-box-orient: vertical; display: -webkit-box;"><?php echo wordwrap(ucfirst($row['description']), 50, '<br />');  ?></p></td>
		                          <td><?php echo $row['price']?></td>
		                          <td><img src="<?php echo $row['image']?>" alt="image" class="avatar_user"></td>
		                          <td>
		                          	<a href="admin.php?controller=product&action=edit_product&id=<?php echo $row['id'] ?>" class="badge badge-warning">Edit</a>
		                            
		                          </td>
		                          <td>
		                          	<a href="admin.php?controller=product&action=delete_product&id=<?php echo $row['id'] ?>" class="badge badge-danger">Delete</a>
		                            
		                          </td>
		                        </tr>
		                    <?php 
		                    	}
		                    ?>
                        
                      </tbody>
                    </table>
                  </div>
