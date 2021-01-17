<?php
// Include config file
require_once "connect.php";
 
// Define variables and initialize with empty values
$hoten = $ngaysinh = $diachi = $congviec = $email = $sdt =  "";
$hoten_err = $ngaysinh_err = $diachi_err = $congviec_err = $email_err = $sdt_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_hoten = trim($_POST["hoten"]);
    if(empty($input_hoten)){
        $hoten_err = "Vui lòng nhập tên.";
    } else{
        $hoten = $input_hoten;
    }
    
    // Validate sex
    $input_ngaysinh = trim($_POST["ngaysinh"]);
    if(empty($input_ngaysinh)){
        $ngaysinh_err = "Vui lòng nhập ngày sinh.";     
    } else{
        $ngaysinh = $input_ngaysinh;
    }
       // Validate sex
       $input_congviec = trim($_POST["congviec"]);
       if(empty($input_congviec)){
           $congviec_err = "Vui lòng nhập công việc.";     
       } else{
           $congviec = $input_congviec;
       }

    $input_diachi = trim($_POST["diachi"]);
    if(empty($input_diachi)){
        $diachi_err = "Vui lòng nhập dia chi.";     
    } else{
        $diachi = $input_diachi;
    }
    // Validate age
    

    // Validate bgroup
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Vui lòng nhập email.";     
    } else{
        $email = $input_email;
    }
    // Validate reg_date
    $input_sdt = trim($_POST["sdt"]);
    if(empty($input_sdt)){
        $sdt_err = "Vui lòng nhập sdt.";     
    } else{
        $sdt = $input_sdt;
    }

   
    // Check input errors before inserting in database
    if(empty($hoten_err) && empty($ngaysinh_err) && empty($congviec) && empty($diachi_err) && empty($email_err) && empty($sdt_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO thongtincanhan (ten, ngaysinh, congviec, diachi, email, sdt) VALUES (?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_hoten, $param_ngaysinh,$param_congviec, $param_diachi, $param_email, $param_sdt);
            
            // Set parameters
            $param_hoten = $hoten;
            $param_ngaysinh = $ngaysinh;
            $param_congviec = $congviec;
            $param_diachi = $diachi;
            $param_email = $email;
            $param_sdt = $sdt;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: admin.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            //mysqli_stmt_close($stmt);
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Thêm</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Thêm thông tin</h2>
                        </div>
                        <p>Vui lòng điền đầy đủ thông tin.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($hoten_err)) ? 'has-error' : ''; ?>">
                                <label>hoten</label>
                                <input type="text" name="hoten" class="form-control" value="<?php echo $hoten; ?>">
                                <span class="help-block"><?php echo $hoten_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($ngaysinh_err)) ? 'has-error' : ''; ?>">
                                <label>Ngày Sinh</label>
                                <input type="text" name="ngaysinh" class="form-control" value="<?php echo $ngaysinh; ?>">
                                <span class="help-block"><?php echo $ngaysinh_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($congviec_err)) ? 'has-error' : ''; ?>">
                                <label>Công Việc</label>
                                <input type="text" name="congviec" class="form-control" value="<?php echo $congviec; ?>">
                                <span class="help-block"><?php echo $congviec_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($diachi_err)) ? 'has-error' : ''; ?>">
                                <label>Địa Chỉ</label>
                                <input type="text" name="diachi" class="form-control" value="<?php echo $diachi; ?>">
                                <span class="help-block"><?php echo $diachi_err;?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                                <span class="help-block"><?php echo $email_err;?></span>
                            </div>
                           
                            <div class="form-group <?php echo (!empty($sdt_err)) ? 'has-error' : ''; ?>">
                                <label>Số Điện Thoại</label>
                                <input type="text" name="sdt" class="form-control" value="<?php echo $sdt; ?>">
                                <span class="help-block"><?php echo $sdt_err;?></span>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Thêm">
                            <a href="admin.php" class="btn btn-default">Đóng</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>