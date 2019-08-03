<h1>Add user</h1>
<p>Hi <?php echo $_SESSION['login'];?></p>
<a href="index.php?controller=user&action=logout">Logout</a>
<form action="index.php?controller=user&action=add_user" method="POST" enctype="multipart/form-data">
	<p>Username <input type="text" name="username"></p>
	<p>Password<input type="password" name="password"></p>
	<p>Avatar<input type="file" name="image"></p>
	<p>Fullname <input type="text" name="name"></p>
	<p>Email <input type="email" name="email"></p>
	<p>Tel <input type="text" name="tel"></p>
	<input type="submit" name="add_user" value="Add user">
</form>