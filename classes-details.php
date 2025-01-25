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
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                <li><a href="./about-us.html">About</a></li>
                <li><a href="./classes.html">Classes</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./classes-details.html">Classes Details</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="./faq.html">Faq</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
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
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="./about-us.html">About</a></li>
                                <li><a href="./classes.html">Classes</a></li>
                                <li class="active"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./classes-details.html">Classes Details</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./pricing.html">Pricing</a></li>
                                        <li><a href="./faq.html">Faq</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Blog</a></li>
                                <li><a href="./contact.html">Contact</a></li>
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
                        <h2>Classes Detail</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Our Classes</a>
                            <span>Classes Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
    <?php
    // Database connection
    include 'db_connect.php'; // Ensure you have a connection file
    
    // Get class ID from the URL (e.g., classes-details.php?id=1)
    $class_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
    
    // Fetch class details
    $class_query = "SELECT * FROM classes c JOIN classes_details cd ON c.id = cd.class_id WHERE c.id = ?";
    $stmt = $conn->prepare($class_query);
    $stmt->bind_param("i", $class_id);
    $stmt->execute();
    $class_result = $stmt->get_result();
    $class = $class_result->fetch_assoc();
    
    // Fetch reviews for the class
    $review_query = "SELECT * FROM reviews WHERE class_id = ? ORDER BY review_date DESC";
    $stmt = $conn->prepare($review_query);
    $stmt->bind_param("i", $class_id);
    $stmt->execute();
    $review_result = $stmt->get_result();
    
    // Display the class details section
    ?>
    <section class="classes-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="classes__sidebar">
                       
                        <div class="classes__sidebar__item">
                            <h4>About Instructor</h4>
                            <div class="classes__sidebar__instructor">
                                <div class="classes__sidebar__instructor__pic">
                                    <img src="img/classes-details/<?= htmlspecialchars($class['instructor_image']); ?>" alt="">
                                </div>
                                <div class="classes__sidebar__instructor__text">
                                    <div class="classes__sidebar__instructor__title">
                                        <h4><?= htmlspecialchars($class['instructor_name']); ?></h4>
                                        <span>Yoga Teacher</span>
                                    </div>
                                    <p><?= htmlspecialchars($class['class_info']); ?></p>
                                    <div class="classes__sidebar__instructor__social">
                                        <a href="#"><span class="social_facebook"></span></a>
                                        <a href="#"><span class="social_twitter"></span></a>
                                        <a href="#"><span class="social_instagram"></span></a>
                                        <a href="#"><span class="social_linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="classes__sidebar__item">
                            <h4>Review & Comment</h4>
                            <div class="classes__sidebar__comment__list">
                                <?php while ($review = $review_result->fetch_assoc()): ?>
                                    <div class="classes__sidebar__comment">
                                        <div class="classes__sidebar__comment__pic">
                                            <img src="img/classes-details/comment-<?= $review['id']; ?>.png" alt="">
                                            <div class="classes__sidebar__comment__rating">
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <i class="fa fa-star<?= ($i <= $review['rating']) ? '' : '-o'; ?>"></i>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        <div class="classes__sidebar__comment__text">
                                            <span><?= date('d M Y', strtotime($review['review_date'])); ?></span>
                                            <h6><?= htmlspecialchars($review['reviewer_name']); ?></h6>
                                            <p><?= htmlspecialchars($review['review_text']); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="classes__details">
                        <div class="classes__details__large">
                            <img src="img/classes-details/<?= htmlspecialchars($class['class_image']); ?>" alt="">
                            <span><?= htmlspecialchars($class['level']); ?></span>
                        </div>
                        <ul class="classes__details__widget">
                            <li><span class="icon_calendar"></span> Mon, Wed, Fri</li>
                            <li><span class="icon_clock_alt"></span> 18:30 - 19:30</li>
                        </ul>
                        <h2><?= htmlspecialchars($class['title']); ?></h2>
                        <p><?= htmlspecialchars($class['class_info']); ?></p>
                        <!-- <div class="classes__details__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <img src="img/classes-details/cd-item-1.jpg" alt="">
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <img src="img/classes-details/cd-item-2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <img src="img/classes-details/cd-item-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <img src="img/classes-details/cd-item-4.jpg" alt="">
                                </div>
                            </div>
                        </div> -->
                        <div class="classes__details__desc">
                            <h6>The Secret to improving her height to achieve quick result, If you are going to use a passage of you need to be sure.</h6>
                            <ul>
                                <li><span class="icon_check"></span> All their equipment and instruments are alive.</li>
                                <li><span class="icon_check"></span> The that about to watched storm, so beautiful terrific.</li>
                                <li><span class="icon_check"></span> There are many variations of passages of lorem ppsum available.</li>
                                <li><span class="icon_check"></span> If you are going to use a passage of you need to be sure.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Classes Section End -->

    <!-- Leave Comment Begin -->
    <div class="leave-comment spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leave__comment__text">
                        <h2>Leave A Comment</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div class="leave__comment__rating">
                                        <h5>Your Rating:</h5>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <textarea placeholder="Your Comment"></textarea>
                                    <button type="submit" class="site-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leave Comment End -->

    <!-- Upcoming Classes Section Begin -->
    <section class="upcoming-classes spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Feature Course</h2>
                        <p>The trainings are multi-style and you will learn and practice <br />Hatha Vinyasa (flow) and
                            Yin Yoga.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-10.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">100 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="booking.html" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-11.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">200 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="booking.html" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-12.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">300 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="booking.html" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Classes Section End -->

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