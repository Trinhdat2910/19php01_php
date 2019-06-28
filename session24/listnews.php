<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css"> 
      .error{
        color: red;
      }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
  include 'header.php';
   ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
  include 'sidebar.php';
   ?>
    <?php
include 'connect.php';
      ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">News</a></li>
        <li class="active">List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Tin Tức</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Create At</th>
                  <th>Action</th>
                </tr>
              <?php 

                $sql= ' select * from news';
                $run= mysqli_query($connect, $sql);
                  $i=0;
                  while ($dong= mysqli_fetch_array($run)) {
                 ?>
                <tr>
                  <td><?php echo $dong['id']; ?></td>
                  <td><?php echo $dong['title']; ?></td>
                  <td><img style="width: 50px; height: 50px;" src="<?php echo $dong['image']; ?>" ></td>
                  <td><?php echo $dong['content'] ?> </td>
                  <td><?php echo date_format(new DateTime($dong['createat']),'d-m-Y'); ?></td>
                
                <td width="250px"><button type="button" class="updatebtn btn btn-block btn-warning" style="width: 100px; float: left; " data-toggle="modal" data-target="#modal-update" data-id="<?php echo $dong['id']; ?>" data-title="<?php echo $dong['title']; ?>" data-content="<?php echo $dong['content']; ?>">Update</button>
                    <a href="deletenews.php?id=<?php echo $dong['id']; ?>"><button type="button" class="delbtn btn btn-block btn-danger"  style="width: 100px;float: left; margin-top: 0; margin-left: 10px;" data-toggle="modal" data-target="#modal-delete">Delete</button></a>
                </td>
                </tr>
                <?php 
                $i++; 
                }
              ?>
                
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
  <!-- /.content-wrapper -->
  
  <?php 
  include 'footer.php';
   ?>
  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php 
    
    $errContent = '';
    $errTitle = '';
    $errImage = '';
   
   $content='';
   $title='';
    

   
    if (isset($_POST['update'])) {
      $content   = $_POST['content'];
      $title   = $_POST['title'];
      $id   = $_POST['id'];
      if ($title == '') {
        $errTitle = 'Bạn chưa nhập tiêu đề';
      }elseif ($content == '') {
        $errContent = 'Bạn chưa nhập nội dung';
      }elseif (!isset($_FILES['Image'])) {
        $errImage ='Bạn chưa chọn hình ảnh';
      }
      else{

       if($_FILES['Image']['name'] =='') {
     
          $sql="UPDATE news set title = '$title', content='$content' where id='$id' ";
         
          $kq=mysqli_query($connect, $sql);
          if ($kq) {
            echo "<script>alert('Cập Nhật thành công');window.location='listnews.php';</script>";
          }
          else{
            echo "<script>alert('Cập Nhật thất bại');window.location='listmews.php';</script>";
          }
      }
      else{
        $file_name=$_FILES['Image']['name'];
        $file_path=$_FILES['Image']['tmp_name'];
        $new_path="image/".$file_name;
        $uploaded_file=move_uploaded_file($file_path,$new_path);
        $date= date('Y/m/d ');
           $sql2="UPDATE news set title = '$title', content='$content', image='$new_path' where id='$id' ";
         
          $kq2=mysqli_query($connect, $sql2);
          if ($kq) {
            echo "<script>alert('Cập Nhật thành công');window.location='listnews.php';</script>";
          }
          else{
            echo "<script>alert('Cập Nhật thất bại');window.location='listmews.php';</script>";
          }
      }
      
    }
  }
  ?>
      <div class="modal modal-primary fade" id="modal-update">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Product</h4>
              </div>
              <div class="modal-body">
                 <form  method="POST" enctype="multipart/form-data" action="#">
                  <input type="text" class="form-control"  id="id"  name="id" required  style="display: none;">
              <div class="box-body">
               <div class="form-group">
                  <label for="exampleInputNameProduct1">Tiêu đề</label>
                  <input type="text" class="form-control" id="exampleInputTitle" placeholder="Tiêu đề" name="title" value="<?php echo $title;?>">
                  <p class="error"><?php echo $errTitle;?></p>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputDescription1">Nội dung</label>
                  <textarea class="form-control" id="exampleInputContent" placeholder="Nội Dung" rows="5" name="content" ><?php echo $content;?></textarea>
                  <p class="error"><?php echo $errContent;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image</label>
                  <input type="file" id="exampleInputFile" name="Image"  >
                  <p class="error"><?php echo $errImage;?></p>
                </div>
                
              </div>
              <!-- /.box-body -->

             
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline" name="update">Save</button>
              </div>
              <form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
     
     
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
   $(document).ready( function () {
    $('.updatebtn').on('click',function(){
      var id= $(this).data("id");        
      $('#id').val(id);
      var title= $(this).data("title");        
      $('#exampleInputTitle').val(title);
      var content= $(this).data("content");        
      $('#exampleInputContent').val(content);
      
    });
     
   });
  function isNumberKey(evt)
     {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
     return false;
     return true;
     }

</script>
</body>
</html>
