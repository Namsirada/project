<?php
include 'condb.php'; //การเรียกใช้หน้า condb.php
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$s_name = $_POST['sname'];
$type_id = $_POST['type_id'];
print_r($_POST);

//อัพโหลดรูปภาพ
if(is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = '48_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./img/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
}
else{
    $new_image_name = "";
}
//เพิ่มข้อมูลในตาราง
$sql="INSERT INTO member(type_id,nickname,name,surname,image)
VALUES('$type_id','$f_name','$l_name','$s_name','$new_image_name')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script> window.location='show_member.php'; </script>";
}
else{
    echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
}
?>
<link rel="stylesheet" href="index.css">