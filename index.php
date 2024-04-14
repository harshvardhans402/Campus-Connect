<?php


include 'core/init.php';

if (isset($_SESSION['user_id'])) {
    header('location: home.php');
}

?>

<html>

<head>
    <title>CAMPUS|CONNECT</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" />
    <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
    <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">

    <link rel="shortcut icon" type="image/png" href="/assets/images/cmrlogo.jpg">
</head>

<body>
    <main class="twt-main">
        <section class="twt-login">
            <?php include 'includes/login.php';  ?>
            <div class="slow-login">
                <img class="login-bird" src="./assets/images/cmrlogo.jpg" alt="bird">
                <button class="login-small-display signin-btn pri-btn">Log in</button>
                <span class="front-para">See What’s happening in the CMRIT right now</span>
                <span class="join">Join CAMPUS|CONNECT Today.</span>




            </div>
        </section>
        <section class="twt-features">
            <div style=" margin-top: 58px;
                text-align: center;">
                <img src="assets/images/twitter-logo.png" />
            </div>

            <div class="features-div">
                <img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
                <p>Follow
                    your
                    interests.</p>
                <img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
                <p>Hear what people are talking about.</p>
                <img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
                <p>Join the conversation.</p>
            </div>
        </section>
        <footer>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Ads info</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Apps</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Businesses</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Settings</a></li>
                <li>© 2021 Twitter Clone</li>
            </ul>
        </footer>
    </main>

    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mine.js"></script>
</body>

</html>