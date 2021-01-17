<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pham_Ha</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.5.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/phamha.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Phạm Văn Hà</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/phamvanha28032000" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Trang Chủ</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>Thông Tin Bản Thân</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Học Vấn</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Mục Tiêu Nghề Nghiệp</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Các Kỹ Năng $ Ngoại Ngữ</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Liên Hệ</a></li>
          <li class="quantri"><a href="admin.php"><i class="bx bx-"></i> Quản Trị</a></li>


        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Xin chào,
        tôi là Phạm Văn Hà</h1>
      <!-- <p>Là 1  <span class="typed" data-typed-items="sinh viên, người yêu âm nhạc"></span></p> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <!-- <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/phamha.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Thông tin bản thân.</h3>
            </p>
            <div class="row">
              <div class="col-lg-6" style="font-weight:bold ;">
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT hoten, ngaysinh, congviec, diachi, email, sdt FROM thongtincanhan WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Họ và Tên: " . $row["hoten"]."<br>";
                            echo "Ngày Sinh: " . $row["ngaysinh"]."<br>";
                            echo "Công Việc: " . $row["congviec"]."<br>";
                            echo "Địa Chỉ: " . $row["diachi"]."<br>";
                            echo "Email: " . $row["email"]."<br>";
                            echo "Số Điện Thoại: " . $row["sdt"]."<br>";
                            
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
              </div>
            </div>
            <section>
                <h5>Châm Ngôn Sống.</h5>
                <p>
                  <ur>
                      ==>  Hôm nay, tôi chọn là phiên bản tốt nhất của chính mình.</li>
                </p>
            </section>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2> Icon Đánh giá của người khác về bản thân</h2>
          <p>Hãy sống là chính mình, bình thường nhưng không tầm thường </p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">289</span>
              <p><strong>Hòa Đồng </strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-simple-heart"></i>
              <span data-toggle="counter-up">521  </span>
              <p><strong>Yêu quý</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live- Emoji"></i>
              <span data-toggle="counter-up">5</span>
              <p><strong>ghét</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">185</span>
              <p><strong>Bình thường</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kĩ Năng</h2>
          <p>Chúng ta đang sống ở thời đại công nghệ 4.0, và là một thế hệ lập trình viên tương lai</p>
          <p>vì thế ta cần phải biết đến tất cả các ngôn ngữ và sử dụng nó thành thạo</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">0%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
        <h2>Học tập là...</h2>
        <ur>
          <li>Học hay còn gọi là học tập, học hành, học hỏi là quá trình tiếp thu cái mới hoặc bổ sung, trau dồi các kiến thức, kỹ năng, kinh nghiệm, giá trị, nhận thức hoặc sở thích và có thể liên quan đến việc tổng hợp các thông tin khác nhau..</li>
          <li>Học và rèn luyện để hiểu biết, trang bị các kỹ năng và tri thức: kết quả học tập, siêng năng học tập. Làm theo gương tốt: học tập lẫn nhau, học tập kinh nghiệm.</li>
        </ur>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Nơi Đã Theo học</h3>
            <div class="resume-item pb-0">
              <h4>Trung Học Phổ Thông</h4>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT truonghoc, ngayvao, ngayra, ghichu FROM hocvan WHERE id='2'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Trường Học: " . $row["truonghoc"]."<br>";
                            echo "Ngày Vào: " . $row["ngayvao"]."<br>";
                            echo "Ngày Ra: " . $row["ngayra"]."<br>";
                            echo "Ghi Chú: " . $row["ghichu"]."<br>";   
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>

              <h4>Đại Học</h4>
              <?php
                    // Include config file
                    require_once "connect.php";
                    // Attempt select query execution
                    $sql = "SELECT truonghoc, ngayvao, ngayra, ghichu FROM hocvan WHERE id='1'";
                    $result = mysqli_query($conn, $sql);
                     
                    if (mysqli_num_rows($result) > 0) {
                        // hiển thị dữ liệu trên trang
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "Trường Học: " . $row["truonghoc"]."<br>";
                            echo "Ngày Vào: " . $row["ngayvao"]."<br>";
                            echo "Ngày Ra: " . $row["ngayra"]."<br>";
                            echo "Ghi Chú: " . $row["ghichu"]."<br>";   
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
              
              <p><em></em></p>
              <ul>
                <li>Hà Nội, 19/01/2021</li>
                <li>(123) 456-7891</li>
                <li>vanha.pham2803@gmail.com</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Các Khóa Học Khác</h3>
            <div class="resume-item">
              <h4></h4>
              </ul>
              <h5>Hiện tại-2021</h5>
              <ul>
                <li>Đang theo học khóa phát triển bản thân của Hoàng Chí Hùng </li>
                <li>Khóa học thiết kế đồ họa</li>
              </ul>
            </div>
            <!-- <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div> -->
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kinh nghiệm đi làm thêm</h2>
          <p>Hiện nay có rất nhiều sinh viên đến các trung tâm môi giới tìm cho mình một công việc bán thời gian với rất nhiều lý do khác nhau,có thể coi công việc ngoài giờ của sinh viên là một môi trường học tập mà nhà trường không thể dạy được. Sinh viên được giao tiếp rộng hơn bên ngoài xã hội, điều này giúp cho họ có được thêm sự tự tin và mạnh mẽ, rất có ích cho cuộc sống sau khi tốt nghiệp. Bên cạnh đó họ có thể rèn luyện thêm những kỹ năng mà họ đã được học trên giảng đường nhưng chưa có dịp đem nó ra thực hành.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                        <img src="assets/img/phache.jpg" class="img-fluid" alt="">
                        <div class="portfolio-links">
                          <!-- <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                          <h3 class="resume-title"> </h3>
                          <div class="resume-item">
                            <h4></h4>
                            <?php
                                  // Include config file
                                  require_once "connect.php";
                                  // Attempt select query execution
                                  $sql = "SELECT tencv, thoigian, diadiem FROM cvlamthem WHERE id='1'";
                                  $result = mysqli_query($conn, $sql);
                                  
                                  if (mysqli_num_rows($result) > 0) {
                                      // hiển thị dữ liệu trên trang
                                      while($row = mysqli_fetch_assoc($result)) {
                                          echo "Tên công việc: " . $row["tencv"]."<br>";
                                          echo "Thời gian: " . $row["thoigian"]."<br>";
                                          echo "Địa điểm: " . $row["diadiem"]."<br>";
                                      }
                                  } else {
                                      echo "0 results";
                                  }
                                  ?>
                          </div>
                      </div>
                    </div>
                              <div class="col-lg-4 col-md-6 portfolio-item filter-app" >
                                <div class="portfolio-wrap">
                                  <img src="assets/img/thietke.jpg" class="img-fluid" alt="" >
                                  <div class="portfolio-links">
                                    <!-- <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                                  </div>
                                </div>
                              </div>
                              </div>
                                
                                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="resume-title"> </h3>
                                    <div class="resume-item">
                                      <h4></h4>
                                      <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tencv, thoigian, diadiem FROM cvlamthem WHERE id='2'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên công việc: " . $row["tencv"]."<br>";
                                                    echo "Thời gian: " . $row["thoigian"]."<br>";
                                                    echo "Địa điểm: " . $row["diadiem"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            ?>
                                    </div>
                                  </div>
                                </div>
              <section></section>
                  <div class="section-title" style =" ">
                     <h2>Mục tiêu nghề nghiệp</h2>
                        <ur>
                          <li>Mục tiêu ngắn hạn: Tìm được công việc liên quan đến IT tại một môi trường có chế độ đãi ngộ tốt. Có một người minh chủ giúp mình xây dựng sự nghiệp, tích lũy kinh nghiệm</li>
                          <li>Mục tiêu dài hạn: 2 năm sẽ trở thành một trưởng phòng hoặc sẽ mở một công ty cho riêng mình </li>
                        </ur>
                  </div>

              


        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Kĩ Năng</h2>
          <p>Trong cuộc sống, chắc hẳn bạn đã nghe rất nhiều về hai từ kỹ năng. Những người nắm vững các kỹ năng cứng, kỹ năng mềm,… thường xử lý, vượt qua những trở ngại trong cuộc sống dễ dàng hơn.Kỹ năng là khả năng vận dụng những kiến thức, hiểu biết của con người để thực hiện một việc gì đó, có thể là việc nghề nghiệp mang tính kỹ thuật, chuyên môn hoặc việc liên quan cảm xúc, sinh tồn, giao tiếp,…</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Kĩ năng cứng</a></h4>
            <p class="description"> <li></li> </p>
            

                                          <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='1'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "Giới hạn: " . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>

<?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='2'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "Giới hạn: " . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>

          </div>
         
         
         
          
          
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Kĩ năng mềm </a></h4>
            <p class="description"> <li></li></p>
            <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='3'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>

<?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='4'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
                                          <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='5'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
                                          <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='6'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Kĩ năng sống </a></h4>
            <p class="description"> <li></li></p>
            <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='7'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
                                             <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='8'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
                                             <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='9'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
                                             <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT tenkynang, kinanglimit FROM kynang WHERE id='10'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên kĩ năng: " . $row["tenkynang"]."<br>";
                                                    echo "" . $row["kinanglimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
            </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Ngoại Ngữ</h2>
          <p>Trong một thế giới năng động và ngày càng toàn cầu hóa, bạn phải định vị được bản thân, và một trong những cách định vị bản thân là phải học ngoại ngữ- ngôn ngữ chúng của thế giới. Ngày nay, thế giới ngày càng mở, những cộng động chung được thành lập nhằm kết nối các dân tộc trên giới lại với nhau.Nắm bắt được xu thế toàn cầu hóa, ngoại ngữ là thứ vũ khí vừa giúp bạn có thể bắt nhịp được với xu thế trên và cũng giúp bạn trong cuộc chiến ngay trên chính sân nhà của bạn. Bạn sẽ có thể mất việc ngay cả trên đất nước mình nếu kỹ năng ngoại ngữ quá yếu.</p>
        </div>
        <div>
        <section> <h4>* Ngoại ngữ của bản thân</h4>
        <div style="font-weight:bold ;">
                                          <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT ngoaingu, ngoaingulimit FROM ngoaingu WHERE id='1'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên ngoại ngữ: " . $row["ngoaingu"]."<br>";
                                                    echo "Mức độ: " . $row["ngoaingulimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>
                                          <section></section>
                                          <?php
                                            // Include config file
                                            require_once "connect.php";
                                            // Attempt select query execution
                                            $sql = "SELECT ngoaingu, ngoaingulimit FROM ngoaingu WHERE id='2'";
                                            $result = mysqli_query($conn, $sql);
                                            
                                            if (mysqli_num_rows($result) > 0) {
                                                // hiển thị dữ liệu trên trang
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo "Tên ngoại ngữ: " . $row["ngoaingu"]."<br>";
                                                    echo "Mức độ: " . $row["ngoaingulimit"]."<br>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                          ?>

        </div>
        </section>
        </div>

          <section><h5>Nhận thức của bản thân về ngoại ngữ </h5></section>
        <div class="owl-carousel testimonials-carousel">
            
          <div class="testimonial-item" data-aos="fade-up">
          <ur> Tiếng Anh
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Sở hữu vốn từ ngữ phong phú, giàu có, Tiếng Anh là một trong ngôn ngữ vô cùng ấn tượng, đa dạng và linh hoạt. Đó là ngôn ngữ của nền văn hóa dân gian hiện đại và bị ảnh hưởng nặng nề bởi chính thứ tiếng này, tiếng Anh thường đảm nhiệm vai trò là những từ có tính xu hướng và dần biến chúng thành những từ “chính thống” . Ngoài ra, vì tiếng Anh là ngôn ngữ giao tiếp phổ biến ở nhiều nơi trên thế giới (ước tính khoảng 1,6 tỉ người trên thế giới nói tiếng Anh), bạn sẽ có rất nhiều cơ hội học ngoại ngữ này.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </ur>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4></h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
          <ur>Tiếng Nhật
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Khi học tiếng Nhật, bạn sẽ gặp khó khăn ở phần từ mượn trong tiếng nhật (garaigo) thường được theo hệ ký tự “katakana”. Đây là những từ phương Tây giờ đây được kết hợp trong ngôn ngữ thường ngày – như apo (chỉ định, bổ nhiệm), brubui (RV), baiku (xe đạp) – và là những từ tương đối phù hợp nếu bạn yêu thích sử dụng chúng!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            </ur>
            <img src="assets/img/testimonials/nhat.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4></h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
          <ur>Trung Quốc  
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Trong khi ngữ pháp tiếng Trung thực sự đơn giản hơn các ngôn ngữ khác, điều thú vị thực sự sẽ đến khi chúng ta học nói tiếng Trung. Tiếng Trung Quốc là một ngôn ngữ thanh điệu (trong trường hợp này, tiếng Trung có 4 thanh điệu), có nghĩa là những âm thanh đơn có thể được phát âm theo 4 cách khác nhau – tất nhiên là với 4 ý nghĩa khác nhau! Trong khi bạn chắc chắn sẽ bị rối tung khi bắt đầu học ngoại ngữ này, hãy tận hưởng khóa học bằng cách chọn chiều theo đám đông và có thể tự cảm thấy buồn cười với chính bản thân mình!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            </ur>
            <img src="assets/img/testimonials/trungquoc.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4></h4>
          </div>



         

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Liên hệ</h2>
          <p>Bạn cảm thấy trang web của tôi như thế nào? Tôi đánh giá cao sự góp ý của bạn.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Vị trí:</h4>
                <p>số 1, Bùi Xương Trạch-Thanh Xuân-Hà Nội</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>vanha.pham2803@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Số điện thoại:</h4>
                <p>0374756343</p>
              </div>

              <iframe src="https://www.google.com/maps/place/1+B%C3%B9i+X%C6%B0%C6%A1ng+Tr%E1%BA%A1ch,+Kh%C6%B0%C6%A1ng+%C4%90%C3%ACnh,+Thanh+Xu%C3%A2n,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@20.9918527,105.8150879,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac920aa0b087:0xaef80b015f49ed6b!8m2!3d20.9918527!4d105.8172766?hl=vi-VN" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Tên của bạn</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email của bạn</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Chủ đề</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">soạn email</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Gửi</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <section>
      <div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Hà Nội:19-01-2021 <strong><span></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
         <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>