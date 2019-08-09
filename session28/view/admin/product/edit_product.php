<?php include 'layout/admin/header.php'; ?>
<div class="col-lg-4 mx-auto">
	<h2 class="text-center mb-4">Add Product</h2>
	<div class="auto-form-wrapper">
		<form action="admin.php?controller=product&action=edit_product&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
	        <div class="form-group">
	            <div class="input-group">
	                <input type="text" class="form-control" name="tittle" placeholder="Tên sản phẩm" required value="<?php echo $editProduct['tittle']?>" >
	                    <div class="input-group-append">
	                      <span class="input-group-text">
	                        <i class="mdi mdi-check-circle-outline"></i>
	                      </span>
	                    </div>
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="input-group">
	            	<select class="form-control" name="category" >
	            		<?php 
								while($row = $getCategory->fetch_assoc()) {
								 
							?>

	            			<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

	            		<?php } ?>
	            	</select>
	                
	                    <div class="input-group-append">
	                      <span class="input-group-text">
	                        <i class="mdi mdi-check-circle-outline"></i>
	                      </span>
	                    </div>
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="input-group">
	                <textarea class="form-control" name="description" placeholder="Mô tả" required ><?php echo $editProduct['description']?></textarea> 
	                    <div class="input-group-append">
	                      <span class="input-group-text">
	                        <i class="mdi mdi-check-circle-outline"></i>
	                      </span>
	                    </div>
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="input-group">
	                <input type="text" class="form-control" name="price" placeholder="Giá" required value="<?php echo $editProduct['price']?>">
	                    <div class="input-group-append">
	                      <span class="input-group-text">
	                        <i class="mdi mdi-check-circle-outline"></i>
	                      </span>
	                    </div>
	            </div>
	        </div>
            <div class="form-group">
              <div class="input-group">
                <input type="file" class="form-control" name="image">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                  </span>
                </div>
              </div>
            </div>                
            <div class="form-group">
              <input type="submit" name="edit_product" value="Update"class="btn btn-primary submit-btn btn-block">
            </div>
	                
	    </form>
	</div>
</div>
<?php include 'layout/admin/footer.php'; ?>