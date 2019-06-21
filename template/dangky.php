
	<?php
		$errName = '';
		$errEmail = '';
		$errPhone = '';
		$errBithday = '';
		$errCity = '';
		$errGender = '';
		// Khoi tao gia tri ban dau
		$name = '';
		$email = '';
		$phone = '';
		$city = '';
		$gender = '';
		$bithday = '';
		if (isset($_POST['register'])) {
			$name    = $_POST['name'];
			$email   = $_POST['email'];
			$phone   = $_POST['phone'];
			$gender  = isset($_POST['gender'])?$_POST['gender']:'';
			$bithday = $_POST['bithday'];
			$city    = $_POST['city'];
			if ($name == '') {
				$errName = 'Please input your name';
			}
			if ($email == '') {
				$errEmail = 'Please input your email';
			}
			if ($phone == '') {
				$errPhone = 'Please input your phone';
			}
			if ($gender == '') {
				$errGender = 'Please choose your gender';
			}
			if ($city == '') {
				$errCity = 'Please choose your city';
			}
			if ($bithday == '') {
				$errBithday = 'Please choose your bithday';
			}
		}
	?>
	<h1>Register</h1>
	<form action="#" method="POST">
		<p>Name
			<input type="text" name="name" value="<?php echo $name;?>">
		</p>
		<p class="error"><?php echo $errName;?></p>
		<p>Email
			<input type="text" name="email" value="<?php echo $email;?>">
		</p>
		<p class="error"><?php echo $errEmail;?></p>
		<p>Phone
			<input type="text" name="phone" value="<?php echo $phone;?>">
		</p>
		<p class="error"><?php echo $errPhone;?></p>
		<p>Gender
			<input type="radio" name="gender" value="male" 
			<?php if($gender == 'male'){ echo "checked";}?>>Male
			<input type="radio" name="gender" value="female"
			<?php echo $gender == 'female'?"checked":'';?>>Female
			<input type="radio" name="gender" value="other"
			<?php echo $gender == 'other'?"checked":'';?>>Other
		</p>
		<p class="error"><?php echo $errGender;?></p>
		<p>Bithday
			<input type="date" name="bithday" value="<?php echo $bithday;?>">
		</p>
		<p class="error"><?php echo $errBithday;?></p>
		<p>City
			<select name="city">
				<option value="" <?php echo $city == ''?"selected":'';?>>Please choose city</option>
				<option value="danang" <?php echo $city == 'danang'?"selected":'';?>>Da Nang</option>
				<option value="quangnam" <?php echo $city == 'quangnam'?"selected":'';?>>Quang Nam</option>
				<option value="hue" <?php echo $city == 'hue'?"selected":'';?>>Hue</option>
			</select>
		</p>
		<p class="error"><?php echo $errCity;?></p>
		<p><input type="submit" name="register" value="Register"></p>
	</form>