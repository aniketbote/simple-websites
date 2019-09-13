<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./CSS/signup_page.css">
	<title>Sign Up</title>
</head>
<body>
	<div class="imgg"></div>
		<div class="mainclass1">
			<p style="font-size: 3em; margin-top: 1em; text-align: center;"><strong>Sign Up!</strong></p>
				<p style="padding-left: 2em">Name:</p>
				<form action="user_insert.php">
				<input class="forms" type="text" name="name" placeholder="Full Name">
				<p style="padding-left: 2em">E-mail ID:</p>
				<input class="forms" type="text" name="email" placeholder="E-mail ID">
				<p style="padding-left: 2em">Date of Birth:</p>
				<input class="forms" type="Date" name="dob" placeholder="DD/MM/YYYY">
				<p style="padding-left: 2em">Select your class:</p>
				<select class="menu" name="class">
					<option>D1A</option>
					<option>D1B</option>
					<option>D2A</option>
					<option>D2B</option>
					<option>D2C</option>
					<option>D3A</option>
					<option>D4A</option>
					<option>D4B</option>
					<option>D5</option>
					<option>D6A</option>
					<option>D6B</option>
					<option>D7A</option>
					<option>D7B</option>
					<option>D7C</option>
					<option>D8A</option>
					<option>D9A</option>
					<option>D9B</option>
					<option>D10</option>
					<option>D11A</option>
					<option>D11B</option>
					<option>D12A</option>
					<option>D12B</option>
					<option>D12C</option>
					<option>D13A</option>
					<option>D14A</option>
					<option>D14B</option>
					<option>D15</option>
					<option>D16A</option>
					<option>D16B</option>
					<option>D17A</option>
					<option>D17B</option>
					<option>D17C</option>
					<option>D18A</option>
					<option>D19A</option>
					<option>D19B</option>
					<option>D20</option>
				</select>
				<p style="padding-left: 2em">Enter your roll number</p>
				<input type="number" name="roll_no" placeholder="Roll Number" class="forms">

				<p style="padding-left: 2em">Select the skills you know:</p>
				<table>
					<tr>
						<td><input type="checkbox" name="mp" value="1" class="skills">Machine Learning</td>
						<td><input type="checkbox" name="ip" value="1" class="skills">Image Processing</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="wd" value="1" class="skills">Web Development</td>
						<td><input type="checkbox" name="ad" value="1" class="skills">Android Development<br></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="te" value="1" class="skills">Testing</td>
						<td><input type="checkbox" name="se" value="1" class="skills">Security</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="bc" value="1" class="skills">Blockchain
						</td>
					</tr>
				</table>
				<p style="padding-left: 2em">Username:</p>
				<input class="forms" type="text" name="username" placeholder="Username">
				<p style="padding-left: 2em">Password:</p>
				<input class="forms" type="Password" name="password" placeholder="Password">

			<button class="next1" type="submit"><strong>Register!</strong></button>
		</div>

</body>
</html>
