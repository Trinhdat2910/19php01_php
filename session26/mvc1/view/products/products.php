<h1>products</h1>

<div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Product</h3>

              <div class="box-tools">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Decription</th>
                  <th>Create At</th>
                  <th>Action</th>
                </tr>
              <?php 
				// if ($productList->num_rows > 0) {
 				while($dong = $productList->fetch_assoc()) {
 					$id = $dong['id'];
                 ?>
                <tr>
                  <td><?php echo $dong['id']; ?></td>
                  <td><?php echo $dong['ProductName']; ?></td>
                  <td><img style="width: 50px; height: 50px;" src="<?php echo $dong['Image']; ?>" ></td>
                  <td><?php echo number_format($dong['Price']); ?> VNĐ</td>
                  <td><?php echo $dong['Descript']; ?></td>
                  <td><?php echo date_format(new DateTime($dong['CreateAt']),'d-m-Y'); ?></td>
                
                <td width="250px"><button type="button" class="updatebtn btn btn-block btn-warning" style="width: 100px; float: left; " data-toggle="modal" data-target="#modal-update" data-id="<?php echo $dong['id']; ?>" data-name="<?php  echo $dong['ProductName']; ?>" data-price="<?php echo $dong['Price']; ?>" data-descript="<?php echo $dong['Descript']; ?>">Update</button>
                    <a href="delete.php?id=<?php echo $dong['id']; ?>"><button type="button" class="delbtn btn btn-block btn-danger"  style="width: 100px;float: left; margin-top: 0; margin-left: 10px;" data-toggle="modal" data-target="#modal-delete">Delete</button></a>
                </td>
                </tr>
                <?php 
                
                } ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
      
      