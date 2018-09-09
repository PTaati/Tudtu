<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include("content/mysqlcon.php");
// define variables and set to empty values
$firstname = $lastname = $Nationality = $gender = $date = $Address = $Tel = $email = $disease = $size = $type = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = trim($_POST["firstname"]);
  $lastname = trim($_POST["lastname"]);
  $Nationality = trim($_POST["Nationality"]);
  $gender = trim($_POST["gender"]);
  $date = trim($_POST["date"]);
  $Address = trim($_POST["Address"]);
  $Tel = trim($_POST["Tel"]);
  $email = trim($_POST["email"]);
  $disease = trim($_POST["disease"]);
  $size = trim($_POST["size"]);
  $type = trim($_POST["type"]);
}
echo "<h2>Your Input:</h2>";
echo "<br>";
echo "ชื่อ : ".$firstname." นามสกุล : ".$lastname."<br>";
echo "สัญชาติ : ".$Nationality."<br>";
echo "เพศ : ".$gender."<br>";
echo "วันเกิด : ".$date."<br>";
echo "ที่อยู่ : ".$Address."<br>";
echo "โทรศัพท์ : ".$Tel."<br>";
echo "E-mail : ".$email."<br>";
echo "โรคประจำตัว : ".$disease."<br>";
echo "ขนาดเสื้อ : ".$size."<br>";
echo "ประเภทการวิ่ง : ".$type."<br>";

//insert data
$sql = "INSERT INTO userprofiletudtu (firstname,lastname,Nationality,gender,date,Address,Tel,email,disease,size,type)
VALUES ('$firstname', '$lastname', '$Nationality', '$gender', '$date', '$Address', '$Tel', '$email', '$disease', '$size', '$type')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<footer>
<center>  <a href = "/index.php"> หนีไป!!!</a> </center>
</footer>
</body>
</html>
