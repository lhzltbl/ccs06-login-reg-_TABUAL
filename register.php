<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST">
	<div>
		<label>First Name:</label>
		<input type="text" name="first_name" placeholder="First Name" />	
	</div> <br>

	<div>
		<label>Last Name:</label>
		<input type="text" name="middle_name" placeholder="Middle Name" />	
	</div> <br>

	<div>
		<label>Last Name:</label>
		<input type="text" name="last_name" placeholder="Last Name" />	
	</div> <br>

	<div>
		<label>Email Address:</label>
		<input type="email" name="email" placeholder="email@address.com" />	
	</div> <br>

	<div>
		<label>Password:</label>
		<input type="password" name="password" />	
	</div> <br>

	<div>
		<label>Confirm Password:</label>
		<input type="password" name="confirm_password" />	
	</div> <br>

	<div>
		<label>Birthdate:</label>
		<input type="date" name="birthdate" placeholder="Birthdate" />	
	</div> <br>

	<div>
	<label>Gender:</label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
	</div> <br>

	<div>
		<label>Address:</label>
		<input type="text" name="address" placeholder="Address" />	
	</div> <br>

	<div>
		<label>Contact Number:</label>
		<input type="text" name="contact_number" placeholder="+639" />	
	</div> <br>

	<div>
		<button>
			Register User
		</button>	
	</div>
</form>
</body>
</html>