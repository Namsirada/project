<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

    <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert"> เพิ่มข้อมูลสมาชิก </div>
    <form method="POST" action="insert_member.php">
    <label>ชื่อเล่น:</label>
    <input type="text" name="fname" class="form-control" placeholder="ชื่อเล่น" required> <br>
    <label>ชื่อ-นามสกุล:</label>
    <input type="text" name="lname" class="form-control" placeholder="ชื่อ-นามสกุล" required> <br>
    
    <label>ประเภท:</label>
    <select class="form-select" name="typeID"> 

    <?php
$sql="SELECT * FROM type ORDER BY type_name";
$hand=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
    ?>
    <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
    <?php
}
mysqli_close($conn);
    ?>
</select>
<br>
<label>รูปภาพ</label>
<input type="file" name="file1" required> <br> <br>

    <button type="submit" class="btn btn-success">Submit</button>
    <input class="btn btn-danger" type="reset" value="Cancle">

</form>

</div>
</div>

</div>
</body>
</html>