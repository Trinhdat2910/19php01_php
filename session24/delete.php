 <?php 
     include 'connect.php';
       
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