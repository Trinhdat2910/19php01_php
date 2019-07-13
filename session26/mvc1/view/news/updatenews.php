<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sửa Tin Tức</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" enctype="multipart/form-data" action="index.php?action=update_news&id=<?php echo $id?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputNameProduct1">Tiêu đề</label>
                  <input type="text" class="form-control" id="exampleInputTitle" placeholder="Tiêu đề" name="title" value="<?php echo $editNews['title'] ?>" required>
                  <p class="error"></p>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputDescription1">Nội dung</label>
                  <textarea class="form-control" id="exampleInputContent" placeholder="Nội Dung" rows="5" name="content" required> <?php echo $editNews['content'] ?></textarea>
                  <p class="error"></p>
                </div>
                <div class="form-group">
                  <label  for="exampleInputFile">File Image</label>
                  <input type="file" id="exampleInputFile" name="image"  >
                  <p class="error"></p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name ="update_news_form">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
       
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>