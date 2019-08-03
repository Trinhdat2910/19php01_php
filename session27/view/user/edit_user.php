<h1>Edit user</h1>
<p>Hi <?php echo $_SESSION['login'];?></p>
<a href="index.php?controller=user&action=logout">Logout</a>
<form action="index.php?controller=user&action=edit_user&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
	<p>Username <input type="text" name="username" value="<?php echo $editUser['username'] ?>"></p>
	<p>Avatar<input type="file" name="image"></p>
	<p>Fullname <input type="text" name="name" value="<?php echo $editUser['name'] ?>"></p>
	<p>Email <input type="email" name="email" value="<?php echo $editUser['email'] ?>"></p>
	<p>Tel <input type="text" name="tel" value="<?php echo $editUser['tel'] ?>"></p>
	<input type="submit" name="edit_user" value="Edit user">
</form>