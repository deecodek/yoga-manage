<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zogin | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>CALL US: + 1 800-567-8990</li>
                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
                <li>OPENING TIMES: MON - FRI: 9:00 - 19:00</li>
            </ul>
            <a href="#" class="primary-btn">JOIN US</a>
        </div>
        <nav class="header__menu">
            <ul class="mobile-menu">
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./classes.php">Classes</a></li>
                <li><a href="./pricing.html">Pricing</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./about-us.html">About</a></li>
                <li><a href="./faq.html">Faq</a></li>
            </ul>
        </nav>
        <div class="offcanvas__social">
                                        <a href="#"><i class="fa fa-sign-in"></i>Login</a>

        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__widget">
                            <ul>
                                <li>CALL US: + 1 800-567-8990</li>
                                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
                                <li>OPENING TIMES: MON - FRI: 9:00 - 19:00</li>
                            </ul>
                            <a href="#" class="primary-btn">JOIN US</a>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./classes.php">Classes</a></li>
                                <li><a href="./pricing.html">Pricing</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                                <li><a href="./about-us.html">About</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__social">
                                                        <a href="#"><i class="fa fa-sign-in"></i>Login</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <section class="breadcrumb-option set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>FAQS</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>FAQS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <?php
    // Include the database connection
    require 'db_connect.php';
    
    // Fetch class names along with their dates and times
    $query = "SELECT title,  time FROM classes";
    $result = $conn->query($query);
    
    // Check if there are any results
    $classOptions = '';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $className = htmlspecialchars($row['title']);
            // $classDate = htmlspecialchars($row['date']);
            $classTime = htmlspecialchars($row['time']);
            $classOptions .= '<option value="' . $className . '">' . $className .  ', Time: ' . $classTime . ')</option>';
        }
    } else {
        $classOptions = '<option value="" disabled>No classes available</option>';
    }
    
    $conn->close();
    ?>
    
    <?php
// Retrieve URL parameters using $_GET and ensure proper escaping
$title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : 'N/A';
$info = isset($_GET['info']) ? htmlspecialchars($_GET['info']) : 'N/A';
$level = isset($_GET['level']) ? htmlspecialchars($_GET['level']) : 'N/A';
$schedule = isset($_GET['schedule']) ? htmlspecialchars($_GET['schedule']) : 'N/A';
$time = isset($_GET['time']) ? htmlspecialchars($_GET['time']) : 'N/A';
$teacher = isset($_GET['teacher']) ? htmlspecialchars($_GET['teacher']) : 'N/A';
$teacher_designation = isset($_GET['teacher_designation']) ? htmlspecialchars($_GET['teacher_designation']) : 'N/A';

// Define hidden fields based on retrieved URL parameters
$hiddenFields = "
    <input type='hidden' name='class_title' value='$title'>
    <input type='hidden' name='class_info' value='$info'>
    <input type='hidden' name='class_level' value='$level'>
    <input type='hidden' name='class_schedule' value='$schedule'>
    <input type='hidden' name='class_time' value='$time'>
    <input type='hidden' name='class_teacher' value='$teacher'>
    <input type='hidden' name='class_teacher_designation' value='$teacher_designation'>
";
?>

<div class="booking-form-container">
    <h1>Book Your Yoga Class</h1>
    <form id="yogaBookingForm" action="submit_booking.php" method="get">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="classType">Class:</label>
            <select id="classType" name="classType" required>
                <option value="" disabled selected>Select class</option>
                <?php echo $classOptions; ?>
            </select>
        </div>
        <br><br><br>
        <!-- Hidden inputs for all class data -->
        <?php echo $hiddenFields; ?>
        
        <button type="submit" class="submit-btn">Book Now</button>
    </form>
</div>



      <style>
        .booking-form-container {
  background-color: #ffffff;
  padding: 20px 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
  margin: 0 auto;
}

.booking-form-container h1 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333333;
}

.form-group {
  margin-bottom: 15px;
  text-align: left;
}

.form-group label {
  display: block;
  font-size: 14px;
  margin-bottom: 5px;
  color: #555555;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  border: 1px solid #cccccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.form-group input:focus,
.form-group select:focus {
  outline: none;
  border-color: #4CAF50;
}

.submit-btn {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 15px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: #45a049;
}

      </style>
    <!-- Faq End -->

    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="img/footer-logo.png" alt="">
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Mon - Fri: 6:30am - 07:45pm</li>
                            <li><i class="fa fa-clock-o"></i> Sat - Sun: 8:30am - 05:45pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Contact Us</h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i> (01) 436 8888</li>
                            <li><i class="fa fa-envelope"></i> hello@zogin.com</li>
                            <li><i class="fa fa-location-arrow"></i> 828 Granville Lights Suite 466</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>