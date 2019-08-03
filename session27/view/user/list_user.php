<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
<h1>User page here</h1>
<a href="index.php?controller=user&action=add_user">Add user</a>
<p>Hi <?php echo $_SESSION['login'];?></p>
<a href="index.php?controller=user&action=logout">Logout</a>
<table class="table table-bordered">
  <tr>
    <th >Id</th>
    <th>Username</th>
    <th>Name</th>
    <th>Avatar</th>

    <th>Email</th>
    <th>Tel</th>
    

    <th>Action</th>
  </tr>
 <?php 
 if ($listUser->num_rows > 0) {
 	while($row = $listUser->fetch_assoc()) {
 		$id = $row['id'];
 ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['username']?></td>
      <td><?php echo $row['name']?></td>
      <td><img src="<?php echo $row['Avatar']?>" alt="image" class="avatar_user"></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['tel']?></td>
      <td><a href="index.php?controller=user&action=edit_user&id=<?php echo $row['id'] ?>">Edit</a> | <a href="index.php?controller=user&action=delete_user&id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
  <?php 
  	}
  } else {?>
  <tr>
  	<td colspan="4">Không ó user nào</td>
  </tr>
  <?php }?>
</table>