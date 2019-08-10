<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Product</h4>
                  <p class="card-description">
                    Product
                  </p>
                 
                  <form class="forms-sample" action="admin.php?controller=product&action=edit_product&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                  
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên Sản Phẩm " name="product_name" value="<?php echo $editProduct['name']?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">Product Category</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="category">
                    	<option value="<?php echo $Category_id['id'] ?>"><?php echo $Category_id['name'] ?></option>
                    <?php 
						while($row = $listCategory->fetch_assoc()) {
							
					?>

                      	<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                    <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputName2">Description</label>
                      <textarea name="description" class="form-control" style="height: 100px;"><?php echo $editProduct['description']?></textarea>
                    </div>
                  <div class="form-group">
                      <label for="exampleInputImage1">Image</label>
                      <input type="file" class="form-control" id="exampleInputImage1" placeholder="Image " name="image">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPrice1">Price</label>
                      <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Giá" name="price" value="<?php echo $editProduct['price']?>">
                  </div>
                                   
                                       
                    <input name="edit_product" type="submit" class="btn btn-success mr-2" value="Update">
                    <button type="Reset" class="btn btn-light">Reset</button>
                  </form>
                </div>
              </div>