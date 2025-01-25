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
                        <h2>Our Classes</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>Our Classes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Classes Section Begin -->
<!-- Classes Section Begin -->
<section class="classes spad">
    <div class="container">
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'yoga');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch classes data
        $sql = "SELECT * FROM classes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div class="row">';
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="classes__item classes__item__page">
                        <div class="classes__item__pic set-bg"
                            style="background-image: url('img/classes/<?php echo htmlspecialchars($row['image']); ?>');">
                            <span><?php echo htmlspecialchars($row['level']); ?></span>
                        </div>
                        <div class="classes__item__text">
                            <ul>
                                <li><span class="icon_calendar"></span>
                                    <?php echo htmlspecialchars($row['schedule_days']); ?></li>
                                <li><span class="icon_clock_alt"></span> <?php echo htmlspecialchars($row['time']); ?></li>
                            </ul>
                            <h4><a href="#"><?php echo htmlspecialchars($row['title']); ?></a></h4>
                            <h6><?php echo htmlspecialchars($row['teacher_name']); ?> <span>-
                                <?php echo htmlspecialchars($row['teacher_designation']); ?></span></h6>
                                <a href="booking.php?title=<?php echo urlencode($row['title']); ?>
    &info=<?php echo urlencode($row['info']); ?>
    &level=<?php echo urlencode($row['level']); ?>
    &schedule=<?php echo urlencode($row['schedule_days']); ?>
    &time=<?php echo urlencode($row['time']); ?>
    &teacher=<?php echo urlencode($row['teacher_name']); ?>
    &teacher_designation=<?php echo urlencode($row['teacher_designation']); ?>"
    class="class-btn">
    Join Now
</a>

                            <button class="class-btn" data-toggle="modal" data-target="#classModal"
                                data-title="<?php echo htmlspecialchars($row['title']); ?>"
                                data-info="<?php echo htmlspecialchars($row['info']); ?>"
                                data-level="<?php echo htmlspecialchars($row['level']); ?>"
                                data-schedule="<?php echo htmlspecialchars($row['schedule_days']); ?>"
                                data-time="<?php echo htmlspecialchars($row['time']); ?>"
                                data-teacher="<?php echo htmlspecialchars($row['teacher_name']); ?>"
                                data-teacher-designation="<?php echo htmlspecialchars($row['teacher_designation']); ?>">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>
                <?php
            }
            echo '</div>';
        } else {
            echo '<p>No classes available.</p>';
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</section>



<!-- Modal Structure -->
<div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="classModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="classModalLabel">Class Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="classDescription"></p>
                <p><strong>Level:</strong> <span id="classLevel"></span></p>
                <p><strong>Schedule:</strong> <span id="classSchedule"></span></p>
                <p><strong>Time:</strong> <span id="classTime"></span></p>
                <p><strong>Teacher:</strong> <span id="classTeacher"></span> (<span id="classTeacherDesignation"></span>)</p>
                <p><strong>Info:</strong> <span id="info"></span></p>
            </div>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
// JavaScript to handle modal population
$(document).ready(function() {
    $('#classModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var title = button.data('title'); // Extract info from data-* attributes
        var description = button.data('description');
        var level = button.data('level');
        var schedule = button.data('schedule');
        var time = button.data('time');
        var teacher = button.data('teacher');
        var teacherDesignation = button.data('teacher-designation');
        var info = button.data('info');

        // Update the modal's content.
        var modal = $(this);
        modal.find('.modal-title').text(title);
        modal.find('#classDescription').text(description);
        modal.find('#classLevel').text(level);
        modal.find('#classSchedule').text(schedule);
        modal.find('#classTime').text(time);
        modal.find('#classTeacher').text(teacher);
        modal.find('#classTeacherDesignation').text(teacherDesignation);
        modal.find('#info').text(info);
    });
});
</script>

<!-- Classes Section End -->

<!-- Modal Structure -->
<div class="modal fade" id="classModal" tabindex="-1" role="dialog" aria-labelledby="classModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="classModalLabel">Class Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 id="modalTitle"></h4>
                <p id="modalDescription"></p>
                <p><strong>Level:</strong> <span id="modalLevel"></span></p>
                <p><strong>Schedule Days:</strong> <span id="modalScheduleDays"></span></p>
                <p><strong>Time:</strong> <span id="modalTime"></span></p>
                <p><strong>Teacher:</strong> <span id="modalTeacher"></span></p>
                <p><strong>Designation:</strong> <span id="modalTeacherDesignation"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#classModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var title = button.data('title'); // Extract info from data-* attributes
            var description = button.data('description');
            var level = button.data('level');
            var schedule = button.data('schedule');
            var time = button.data('time');
            var teacher = button.data('teacher');
            var teacherDesignation = button.data('teacher-designation');

            // Debugging: Log the data to console
            console.log('Title:', title);
            console.log('Description:', description);
            console.log('Level:', level);
            console.log('Schedule:', schedule);
            console.log('Time:', time);
            console.log('Teacher:', teacher);
            console.log('Designation:', teacherDesignation);

            // Update the modal's content.
            var modal = $(this);
            modal.find('#modalTitle').text(title);
            modal.find('#modalDescription').text(description);
            modal.find('#modalLevel').text(level);
            modal.find('#modalScheduleDays').text(schedule);
            modal.find('#modalTime').text(time);
            modal.find('#modalTeacher').text(teacher);
            modal.find('#modalTeacherDesignation').text(teacherDesignation);
        });
    });
</script>


    <!-- Classes Section End -->

    <?php
    include('db_connect.php');
    // Fetch classes from the database
    $sql = "SELECT * FROM top_classes ORDER BY start_date ASC";
    $result = $conn->query($sql);
    ?>

    <!-- Upcoming Classes Section Begin -->
    <section class="upcoming-classes top-classes spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Top Classes</h2>
                        <p>The trainings are multi-style and you will learn and practice Hatha Vinyasa (flow)<br /> and
                            Yin Yoga.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="classes__item">
                                <div class="classes__item__pic set-bg"
                                    data-setbg="img/classes/<?= htmlspecialchars($row['image']); ?>">
                                    <span><?= htmlspecialchars(date('d M Y', strtotime($row['start_date']))); ?></span>
                                </div>
                                <div class="classes__item__text">
                                    <p><?= htmlspecialchars($row['duration']); ?> | Start on
                                        <?= htmlspecialchars(date('dS', strtotime($row['start_date']))); ?> Every Month</p>
                                    <h4><a href="#"><?= htmlspecialchars($row['title']); ?></a></h4>
                                    <h6><?= htmlspecialchars($row['teacher_name']); ?> <span>-
                                            <?= htmlspecialchars($row['teacher_role']); ?></span></h6>
                                    <a href="booking.html" class="class-btn">JOIN NOW</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-lg-12">
                        <p>No classes available at the moment. Please check back later.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Upcoming Classes Section End -->

    <?php
    // Close the database connection
    $conn->close();
    ?>


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