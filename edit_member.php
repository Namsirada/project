<?php
include 'condb.php';
$ids=$_GET['id'];
$sql="SELECT * FROM member WHERE id='$ids ' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="index.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
    <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert"> แก้ไขข้อมูลสมาชิก </div>
    <form method="POST" action="Update_member.php">
    <label>ชื่อเล่น:</label>
    <input type="text" name="fname" class="form-control" value=<?=$row['nickname']?> > <br>
    <label>ชื่อ:</label>
    <input type="text" name="lname" class="form-control" value=<?=$row["name"]?> > <br>
    <label>นามสกุล:</label>
    <input type="text" name="sname" class="form-control" value=<?=$row["surname"]?> > <br>
    <label>ชื่อรูปภาพ</label>
    <input type="text" name="txtimg" class="form-control" value=<?=$row['image']?> > <br>

    <label>เลือกรูปภาพใหม่</label>
    <input type="file" name="file1" > <br> <br>


    <button type="submit" class="btn btn-success">Update</button>
    <a class="btn btn-danger" href="show_member.php" role="button">Cancel</a>
</form>

</div>
</div>

</div>
</body>
</html>