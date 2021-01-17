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
$query=mysqli_query($conn,"select * from `ngoaingu` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<form method="POST" class="form-group">
<h2>Sửa Bảng Ngoại Ngữ</h2>
<label>Ngoại Ngữ : <input type="text" value="<?php echo $row['ngoaingu']; ?>" name="ngoaingu"></label><br/>
<label>Mức Độ : <input type="text" value="<?php echo $row['ngoaingulimit']; ?>" name="ngoaingulimit"></label><br/>
<input type="submit" value="Update" name="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$ngoaingu=$_POST['ngoaingu'];
$ngoaingulimit=$_POST['ngoaingulimit'];

// Create connection
$conn = new mysqli("localhost:3308", "root", "", "cv_bt");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 
$sql = "UPDATE `hocvan` SET ngoaingu='$ngoaingu', ngoaingulimit='$ngoaingulimit' WHERE id='$id'";
 
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