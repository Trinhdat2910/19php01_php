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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Product</h3>

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
                  <th>Product Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Decription</th>
                  <th>Create At</th>
                  <th>Action</th>
                </tr>
              <?php 

                $sql= ' select * from product';
                $run= mysqli_query($connect, $sql);
                  $i=0;
                  while ($dong= mysqli_fetch_array($run)) {
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
    $errProductName = '';
    $errPrice = '';
    $errDescript = '';
    $errImage = '';
   
    // Khoi tao gia tri ban dau
    $productname = '';
    $price = '';
    $productdescript = '';
    $id='';
    
   
    if (isset($_POST['update'])){
      $productname    = $_POST['productname'];
      $price  = $_POST['price'];
      $productdescript   = $_POST['productdescript'];
      $id = $_POST['id'];

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

       if($_FILES['Image']['name'] =='') {
     
          $sql="UPDATE product set ProductName = '$productname', Price='$price', Descript= '$productdescript' where id='$id' ";
         
          $kq=mysqli_query($connect, $sql);
          if ($kq) {
            echo "<script>alert('Cập Nhật thành công');window.location='listproduct.php';</script>";
          }
          else{
            echo "<script>alert('Cập Nhật thất bại');window.location='listproduct.php';</script>";
          }
      }
      else{
        $file_name=$_FILES['Image']['name'];
        $file_path=$_FILES['Image']['tmp_name'];
        $new_path="image/".$file_name;
        $uploaded_file=move_uploaded_file($file_path,$new_path);
        $date= date('Y/m/d ');
           $sql2="UPDATE product set ProductName = '$productname', Price='$price', Descript= '$productdescript', Image='$new_path' where id='$id' ";
          $kq2=mysqli_query($connect, $sql2);
          if ($kq2) {
            echo "<script>alert('Cập Nhật thành công');window.location='listproduct.php';</script>";
          }
          else{
            echo "<script>alert('Cập Nhật thất bại');window.location='listproduct.php';</script>";
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
                  <label for="exampleInputNameProduct1">Tên Sản Phẩm</label>
                  <input type="text" class="form-control" id="exampleInputNameProduct1" placeholder="Tên Sản Phẩm" name="productname" required >
                  <p class="error"><?php echo $errProductName;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputPrice1">Giá</label>
                  <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Giá......" onKeyPress="return isNumberKey(event)" name="price" required>
                  <p class="error"><?php echo $errPrice;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputDescription1">Mô Tả</label>
                  <textarea class="form-control" id="exampleInputDescription1" placeholder="Mô Tả" rows="5" name="productdescript" required></textarea>
                  <p class="error"><?php echo $errDescript;?></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image</label>
                  <input type="file" id="exampleInputFile" name="Image"  >
                  
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
      var ten= $(this).data("name");        
      $('#exampleInputNameProduct1').val(ten);
      var price= $(this).data("price");        
      $('#exampleInputPrice1').val(price);
      var mota= $(this).data("descript");        
      $('#exampleInputDescription1').val(mota);
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
