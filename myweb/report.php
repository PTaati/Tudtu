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
  <center><h1> รายชื่อนักวิ่ง ตุ๊ตตู่ </h1></center>
  <table class="table talbe-hover">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>สัญชาติ</th>
        <th>เพศ</th>
        <th>วันเกิด</th>
        <th>ที่อยู่</th>
        <th>โทรศัพท์</th>
        <th>E-mail</th>
        <th>โรคประจำตัว</th>
        <th>ขนาดเสื้อ</th>
        <th>ประเภทการวิ่ง</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include("content/mysqlcon.php");

      $sql = "SELECT * FROM userprofiletudtu";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
       <td><?php echo $row["userid"]; ?></td>
       <td><?php echo $row["firstname"]; ?></td>
       <td><?php echo $row["lastname"]; ?></td>
       <td><?php echo $row["Nationality"];?></td>
       <td><?php echo $row["gender"];?></td>
       <td><?php echo $row["date"];?></td>
       <td><?php echo $row["Address"];?></td>
       <td><?php echo $row["Tel"];?></td>
       <td><?php echo $row["email"]; ?></td>
       <td><?php echo $row["disease"]; ?></td>
       <td><?php echo $row["size"]; ?></td>
       <td><?php echo $row["type"]; ?></td>
     </tr>
     <?php
       }
     }else{
       echo "0 results";
     }
     ?>

   </tbody>
  </table>
<div class="container">

</div>
<footer>
<center>  <a href = "/index.php"> หนีไป!!!</a> </center>
</footer>
</body>
</html>
