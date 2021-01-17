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
$query=mysqli_query($conn,"select * from  cvlamthem  where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa thành viên</h2>
<label>Công việc làm thêm : <input type="text" value="<?php echo $row['tencv']; ?>" name="tencv"></label><br/>
<label>Thời Gian: <input type="text" value="<?php echo $row['thoigian']; ?>" name="thoigian"></label><br/>
<label>Địa điểm: <input type="text" value="<?php echo $row['diadiem']; ?>" name="diadiem"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$hoten=$_POST['tencv'];
$ngaysinh=$_POST['thoigian'];
$congviec=$_POST['diadiem'];
 
// Create connection
$conn = new mysqli("localhost:3308", "root", "", "cv_bt");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `cvlamthem` SET tencv='$tencv', thoigian='$thoigian',diadiem='$diadiem' WHERE id='$id'";
 
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