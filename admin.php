<!DOCTYPE html>
<html lang="en">
<head>
  <link href="assets/img/ba1.jpg" rel="Them">
  <link href="assets/img/ba1.jpg" rel="crown">
    <meta charset="UTF-8">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
</html>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Bảng Người Dùng</h2>
                        <a href="them_thong_tin.php" class="btn btn-success pull-right">Thêm</a>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM thongtincanhan";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>hoten</th>";
                                        echo "<th>ngaysinh</th>";
                                        echo "<th>congviec</th>";
                                        echo "<th>diachi</th>";
                                        echo "<th>email</th>";
                                        echo "<th>sdt</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['hoten'] . "</td>";
                                        echo "<td>" . $row['ngaysinh'] . "</td>";
                                        echo "<td>" . $row['congviec'] . "</td>";
                                        echo "<td>" . $row['diachi'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['sdt'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='sua_thong_tin.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoa_thong_tin.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
<!-- cvlt                    -->

                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM cvlamthem";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>tencv</th>";
                                        echo "<th>thoigian</th>";
                                        echo "<th>diadiem</th>";
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['tencv'] . "</td>";
                                        echo "<td>" . $row['thoigian'] . "</td>";
                                        echo "<td>" . $row['diadiem'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='suacvlt.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoacvlt.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
<!-- hocvan -->
                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM hocvan";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>truonghoc</th>";
                                        echo "<th>ngayvao</th>";
                                        echo "<th>ngayra</th>";
                                        echo "<th>ghichu</th>";
                                        
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['truonghoc'] . "</td>";
                                        echo "<td>" . $row['ngayvao'] . "</td>";
                                        echo "<td>" . $row['ngayra'] . "</td>";
                                        echo "<td>" . $row['ghichu'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='suahocvan.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoahocvan.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>

<!-- ky nang -->

                    <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM kynang";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>tenkynang</th>";
                                        echo "<th>kinanglimit</th>";

                                        
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['tenkynang'] . "</td>";
                                        echo "<td>" . $row['kinanglimit'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='suakynang.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoakynang.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>
<!-- ngoaingu -->

<?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM ngoaingu";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>ngoaingu</th>";
                                        echo "<th>ngoaingulimit</th>";

                                        
                                        echo "<th>action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ngoaingu'] . "</td>";
                                        echo "<td>" . $row['ngoaingulimit'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='suangoaingu.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='xoangoaingu.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>"; 
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    
                    ?>

                   
                </div>
            </div>        
        </div>
    </div>
    
</body>
</html>