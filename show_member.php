<?php
include 'condb.php'; //การเรียกใช้หน้า condb.php
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="index.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member 48 Thai</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="h4 text-center alert alert-warning mb-4 mt-4" role="alert"> แสดงข้อมูลสมาชิก </div>
<a href="fr_member.php" class="btn btn-success mb-4">Add+</a>
<table class="table table-success table-striped">
</tr>
    <tr>
        <th>รหัส</th>
        <th>ชื่อเล่น</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>รูปภาพ</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
$sql = "SELECT * FROM member ";
$hand = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
?>
    <tr>
    <td><?=$row["id"]?></td>
        <td><?=$row["nickname"]?></td>
        <td><?=$row["name"]?></td>
        <td><?=$row["surname"]?></td>
        <td><img src="img/<?=$row['image']?>" width="75px" hieght="25px"></td>
        <td><a href="edit_member.php?id=<?=$row["id"]?>" class="btn btn-warning">Edit</a> </td>
        <td><a href="delete_member.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="Del(this.href);return false;">Delete</a> </td>
</tr>

<?php
}
mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
?>

</table>

</div>
</body>
</html>


<script language="JavaScript"
function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        windlow.location=mypage;
    }
} 
</script> 