<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>Run for ตุ๊ดตู่</title>

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {

    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
    background: url(img/Tu2.jpg) 100% 30% ;

}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 900px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: right;
    padding: 30px;
    width: 100%;
    height: 1000px;
    background-color: #f1fff1;
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header >
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <article>
    <h2>ลงทะเบียน (Register)</h2>
    <form method="post" action="result.php">
      ชื่อ - นามสกุล (Full Name) : <input type="text" name="firstname" autocomplete="off" > <input type="text" name="lastname"  >  <br><br>
      สัญชาติ (Nationality) : <input type="text" name="Nationality"  size="50">     <br><br>
      เพศ(Sex) :
      <input type="radio" name="gender" value="ชาย" > Male
      <input type="radio" name="gender" value="หญิง"> Female<br><br>
      วันเกิด (Date of Birth) : <input type="date"" name="date" date-date-format="DD-MM-YYYY"><br><br>
      ที่อยู่ (Postal Address) : <br><br>
      <textarea name = "Address" rows = "7" cols="73" >  </textarea><br><br>
      โทรศัพท์ (Tel) : <input type="tel" name="Tel" > <br><br>
      E-mail : <input type="email" name="email" > <br><br>
      โรคประจำตัว (ถ้ามี) : <input type="text" name="disease" value = "ไม่มี" size = "25"> <br><br>
      ขนาดเสื้อ (Size)<br><br><t>
      <input type="radio" name="size" value="XS (36 นิ้ว)" > XS (36 นิ้ว)
      <input type="radio" name="size" value="S (39 นิ้ว)"> S (39 นิ้ว)
      <input type="radio" name="size" value="M (42 นิ้ว)" > M (42 นิ้ว)
      <input type="radio" name="size" value="L (45 นิ้ว)"> L (45 นิ้ว)
      <input type="radio" name="size" value="XL(48 นิ้ว)" > XL(48 นิ้ว)
      <input type="radio" name="size" value="XXL"> XXL<br><br>
      ประเภทการวิ่ง : <br>
      <input type="radio" name="type" value="Walk (5 km)" checked> Walk (5 km) <br>
      <input type="radio" name="type" value="Mini Marathon(11 km)"> Mini Marathon(11 km) <br>
      <input type="radio" name="type" value="Half Marathon(21 km)" > Half Marathon(21 km) <br>
      <input type="radio" name="type" value="Marathon(42 km)" > Marathon(42 km) <br><br>
      <center><input type="submit" value="ลงทะเบียน"> <t> <input type="reset" value="ยกเลิก"> </center>
    </form>
    </article>
</section>

<footer>
  <center>  <a href = "/index.php"> หนีไป!!!</a> </center>
</footer>

    </body>
</html>
