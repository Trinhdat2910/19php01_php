
<div class="wrapper">

  
  <!-- Left side column. contains the logo and sidebar -->
 
   <?php


    $errContent = '';
    $errTitle = '';
    $errImage = '';
   
   $content='';
   $title='';
    

   
    if (isset($_POST['add_news'])) {
      $content   = $_POST['content'];
      $title   = $_POST['title'];

      if ($title == '') {
        $errTitle = 'Bạn chưa nhập tiêu đề';
      }elseif ($content == '') {
        $errContent = 'Bạn chưa nhập nội dung';
      }elseif (!isset($_FILES['image'])){
        $errImage ='Bạn chưa chọn hình ảnh';
      }
      
      
    }
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
        <small>Preview</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm Tin Tức</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" enctype="multipart/form-data" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputNameProduct1">Tiêu đề</label>
                  <input type="text" class="form-control" id="exampleInputTitle" placeholder="Tiêu đề" name="title" value="<?php echo $title;?>" required >
                  <p class="error"><?php echo $errTitle;?></p>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputDescription1">Nội dung</label>
                  <textarea class="form-control" id="exampleInputContent" placeholder="Nội Dung" rows="5" name="content" required ><?php echo $content;?></textarea>
                  <p class="error"><?php echo $errContent;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image</label>
                  <input type="file" id="exampleInputFile" name="image"  >
                  <p class="error"><?php echo $errImage;?></p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name ="add_news">Submit</button>
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