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

      $tenmaychu='localhost';
      $tentaikhoan='root';
      $pass='';
      $csdl='example';
      $connect= mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('không kết nối được');
      
      mysqli_select_db($connect, $csdl)or die("cannot select DB");
    $errProductName = '';
    $errPrice = '';
    $errDescript = '';
    $errImage = '';
   
    // Khoi tao gia tri ban dau
    $productname = '';
    $price = '';
    $productdescript = '';

   
    if (isset($_POST['add'])) {
      $productname    = $_POST['productname'];
      $price  = $_POST['price'];
      $productdescript   = $_POST['productdescript'];

      if ($productname == '') {
        $errProductName = 'Bạn chưa nhập tên sản phẩm';
      }elseif ($price == '') {
        $errPrice = 'Bạn chưa nhập giá';
      }elseif ($productdescript == '') {
        $errDescript = 'Bạn chưa nhập mô tả';
      }elseif (!isset($_FILES['Image'])) {
        $errImage ='Bạn chưa chọn hình ảnh';
      }
      else{
        $file_name=$_FILES['Image']['name'];
        $file_path=$_FILES['Image']['tmp_name'];
        $new_path="image/".$file_name;
        $uploaded_file=move_uploaded_file($file_path,$new_path);
        $date= date('Y/m/d ');
          $sql="INSERT INTO product(ProductName, Price, Descript, Image, CreateAt) VALUES ('$productname','$price','$productdescript','$new_path','$date' )";
          $kq=mysqli_query($connect, $sql);
          if ($kq) {
            echo "<script>alert('Thêm thành công');window.location='listproduct.php';</script>";
          }
          else{
            echo "<script>alert('Thêm thất bại');window.location='addproduct.php';</script>";
          }
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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm Sản Phẩm</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" enctype="multipart/form-data" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputNameProduct1">Tên Sản Phẩm</label>
                  <input type="text" class="form-control" id="exampleInputNameProduct1" placeholder="Tên Sản Phẩm" name="productname" value="<?php echo $productname;?>">
                  <p class="error"><?php echo $errProductName;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPrice1">Giá</label>
                  <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Giá......" onKeyPress="return isNumberKey(event)" name="price" value="<?php echo $price;?>">
                  <p class="error"><?php echo $errPrice;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputDescription1">Mô Tả</label>
                  <textarea class="form-control" id="exampleInputDescription1" placeholder="Mô Tả" rows="5" name="productdescript" ><?php echo $productdescript;?></textarea>
                  <p class="error"><?php echo $errDescript;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image</label>
                  <input type="file" id="exampleInputFile" name="Image"  >
                  
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name ="add">Submit</button>
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
