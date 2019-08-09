<?php include 'layout/admin/header.php'; ?>
<div class="col-lg-4 mx-auto">
	<h2 class="text-center mb-4">Edit User</h2>
	<div class="auto-form-wrapper">
		<form action="admin.php?controller=user&action=edit_user&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
	        <div class="form-group">
	            <div class="input-group">
	                <input type="text" class="form-control" name="username" placeholder="Username" required value="<?php echo $editUser['username'] ?>">
	                    <div class="input-group-append">
	                      <span class="input-group-text">
	                        <i class="mdi mdi-check-circle-outline"></i>
	                      </span>
	                    </div>
	            </div>
	        </div>
            <div class="form-group">
              <div class="input-group">
                <input type="file" class="form-control" name="avatar">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="mdi mdi-check-circle-outline"></i>
                  </span>
                </div>
              </div>
            </div>                
            <div class="form-group">
              <input type="submit" name="edit_user" value="Update"class="btn btn-primary submit-btn btn-block">
            </div>
	                
	    </form>
	</div>
</div>
<?php include 'layout/admin/footer.php'; ?>