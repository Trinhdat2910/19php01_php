 <?php 
      $tenmaychu='localhost';
      $tentaikhoan='root';
      $pass='';
      $csdl='example';
      $connect= mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('không kết nối được');
      
      mysqli_select_db($connect, $csdl)or die("cannot select DB");
       
          $id= $_GET['id'];
          $sql="delete from product where id='$id' ";
         
          $kq=mysqli_query($connect, $sql);
          if ($kq) {
            echo "<script>alert('Xóa thành công');window.location='listproduct.php';</script>";
          }
          else{
            echo "<script>alert('Xóa thất bại');window.location='listproduct.php';</script>";
          }
      ?>