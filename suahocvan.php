<!DOCTYPE html>
<html>
<head>
<title>Editing MySQL Data</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
include 'connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `hocvan` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa thành viên</h2>
<label>Trường Học : <input type="text" value="<?php echo $row['truonghoc']; ?>" name="truonghoc"></label><br/>
<label>Ngày Vào : <input type="text" value="<?php echo $row['ngayvao']; ?>" name="ngayvao"></label><br/>
<label>Ngày Ra: <input type="text" value="<?php echo $row['ngayra']; ?>" name="ngayra"></label><br/>
<label>Ghi Chú: <input type="text" value="<?php echo $row['ghichu']; ?>" name="ghichu"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$truonghoc=$_POST['truonghoc'];
$ngayvao=$_POST['ngayvao'];
$ngayra=$_POST['ngayra'];
$ghichu=$_POST['ghichu'];
// Create connection
$conn = new mysqli("localhost:3308", "root", "", "cv_bt");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `hocvan` SET truonghoc='$truonghoc', ngayvao='$ngayvao',ngayra='$ngayra',ghichu='$ghichu' WHERE id='$id'";
 
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
header("location: admin.php");
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>
</form>
</body>
</html>