<!DOCTYPE html>
<html>
<head>
	<title>Jenny Ann Libed</title>
</head>
<style>
	.container {
		height: 100%;
		width: 100%;
		padding-left: 50px;
	}
	body {
		font-family: arial;
		font-weight: bold;
	}

</style>
<body>

	<form action="libedjennyann.php" method="POST">
		<div class="container">
			<center><h1><b>BIODATA</b></h1></center>

			<table>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Present Address</td>
					<td>:</td>
					<td><input type="text" name="presentadd"></td>
				</tr>
				<tr>
					<td>Permanent Address</td>
					<td>:</td>
					<td><input type="text" name="permanentadd"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td>:</td>
					<td><input type="date" name="dateofbirth"></td>
					<td>Religion</td>
					<td>:</td>
					<td><input type="text" name="religion"></td>
				</tr>
				<tr>
					<td>Civil Status</td>
					<td>:</td>
					<td><input type="text" name="civilstatus"></td>
					<td>Age</td>
					<td>:</td>
					<td><input type="number" name="age"></td>
				</tr>
				<tr>
					<td>Citizenship</td>
					<td>:</td>
					<td><input type="text" name="citizenship"></td>
					<td>Weight</td>
					<td>:</td>
					<td><input type="number" name="weight"></td>
				</tr>
				<tr>
					<td>Place of Birth</td>
					<td>:</td>
					<td><input type="text" name="placeofbirth"></td>
					<td>Height</td>
					<td>:</td>
					<td><input type="number" name="height"></td>
				</tr>
				<tr>
					<td>Name of Father</td>
					<td>:</td>
					<td><input type="text" name="father"></td>
				</tr>
				<tr>
					<td>Name of Mother</td>
					<td>:</td>
					<td><input type="text" name="mother"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>:</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<td>Languages or Dialects Spoken</td>
					<td>:</td>
					<td><input type="text" name="languages"></td>
				</tr>
				<tr>
					<td>Person to be notified In Case of Emergency</td>
					<td>:</td>
					<td><input type="text" name="person"></td>
				</tr>
			</table>
			<br>
			<table>
				<tr>
					<td><u>EDUCATIONAL BACKGROUND</u></td>
				</tr>
				<tr>
					<td>Elementary</td>
					<td>:</td>
					<td><input type="text" name="elementary"></td>
					<td>Year Graduated</td>
					<td>:</td>
					<td><input type="date" name="yearelem"></td>
				</tr>
				<tr>
					<td>High School</td>
					<td>:</td>
					<td><input type="text" name="highschool"></td>
					<td>Year Graduated</td>
					<td>:</td>
					<td><input type="date" name="yearhs"></td>
				</tr>
				<tr>
					<td>College</td>
					<td>:</td>
					<td><input type="text" name="college"></td>
					<td>Year Graduated</td>
					<td>:</td>
					<td><input type="date" name="yearcollege"></td>
				</tr>
				<tr>
					<td>Course</td>
					<td>:</td>
					<td><input type="text" name="course"></td>
				</tr>
				<tr>
					<td>Special Skills</td>
					<td>:</td>
					<td><input type="text" name="specialskills"></td>
				</tr>
			</table>
			<br>
		<center><input type="submit" name="btn" value="Submit"></center>
	</div>
	</form>

<?php
if (isset($_POST['btn'])) {
	$name = $_POST['name'];
	$presentadd =  $_POST['presentadd'];
	$permanentadd = $_POST['permanentadd'];
	$dateofbirth = $_POST['dateofbirth'];
	$religion = $_POST['religion'];
	$civilstatus = $_POST['civilstatus'];
	$age = $_POST['age'];
	$citizenship = $_POST['citizenship'];
	$weight = $_POST['weight'];
	$placeofbirth = $_POST['placeofbirth'];
	$height = $_POST['height'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$address = $_POST['address'];
	$languages = $_POST['languages'];
	$person = $_POST['person'];

	$elementary = $_POST['elementary'];
	$yearelem = $_POST['yearelem'];
	$highschool = $_POST['highschool'];
	$yearhs = $_POST['yearhs'];
	$college = $_POST['college'];
	$yearcollege = $_POST['yearcollege'];
	$course = $_POST['course'];
	$specialskills = $_POST['specialskills'];

	echo "Name: " . $name;
	echo "<br>";
	echo "Present Address: " . $presentadd;
	echo "<br>";
	echo "Permanent Address: " . $permanentadd;
	echo "<br>";
	echo "Date of Birth: " . $dateofbirth;
	echo "<br>";
	echo "Religion: " . $religion;
	echo "<br>";
	echo "Civil Status: " . $civilstatus;
	echo "<br>";
	echo "Citizenship: " . $citizenship;
	echo "<br>";
	echo "Age: " . $age;
	echo "<br>";
	echo "Height: " . $height;
	echo "<br>";
	echo "Weight: " . $weight;
	echo "<br>";
	echo "Place of Birth: " . $placeofbirth;
	echo "<br>";
	echo "Name of Father: " . $father;
	echo "<br>";
	echo "Name of Mother: " . $mother;
	echo "<br>";
	echo "Address: " . $address;
	echo "<br>";
	echo "Languages or Dialects Spoken: " . $languages;
	echo "<br>";
	echo "Person to be notified In Case of Emergency: " . $person;
	echo "<br>";
	echo "<br>";
	echo "<b><u>EDUCATIONAL BACKGROUND</u></b>";
	echo "<br>";
	echo "Elementary: " . $elementary; echo "&nbsp"; echo "Year Graduated: " . $yearelem;
	echo "<br>";
	echo "High School: " . $highschool; echo "&nbsp"; echo "Year Graduated: " . $yearhs;
	echo "<br>";
	echo "College: " . $college; echo "&nbsp"; echo "Year Graduated: " . $yearcollege;
	echo "<br>";
	echo "Course: " . $course;
	echo "<br>";
	echo "Special Skills: " . $specialskills;
}

?>
</body>
</html>