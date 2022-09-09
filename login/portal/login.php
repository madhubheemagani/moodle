<!DOCTYPE html>
<html lang="en">
<?php require_once('../../config.php');
require_once('../lib.php');

$context = context_system::instance();
$PAGE->set_url("$CFG->wwwroot/portal/login.php");
$PAGE->set_context($context);
$PAGE->set_pagelayout('login');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Power of Your Pronunciation </title>
    <link href="https://fonts.googleapis.com/css2?family=Purple+Purse&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body class="login_body"
    style="background-image:url('images/full_hero_img.jpg');background-position: top left;background-size: cover;background-repeat: no-repeat;">

    <main>


        <section class="hero_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 hero_imgwrapper">
                        <div class="mobile_img"
                            style="background-image:url('images/mobile-img.png');background-position: center;background-size: cover;background-repeat: no-repeat;width: 100%;height: 477px; display: none;">

                        </div>
                    </div>
                    <div class="col-lg-4 hero_description">
                        <div class="cover_box">
                            <div class="title_wrap">
                                <h1>AMERICAN </h1>
                                <h2>ACCENT PROGRAM</h2>
                                <span><img src="images/Vector 86.svg" /></span>
                                <h3 class="title">Students’ Portal</h3>
                            </div>
                            <div class="form_wrapper">
                            <?php
				if ($_GET['errorcode']!='') {
	?><p style="color:black"> <b>Incorrect Password/Username </b></p>
	<?php	
}
?>
                                <form action="<?php echo $CFG->wwwroot;?>/login/index.php" method="post">
                                <div class="input_box">
                                    <input type="text" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="input_box">
                                        <input type="password" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="login_options">
                                        <div class="box1">

                                            <div class="form-group">
                                                <input type="checkbox" id="rememberme">
                                                <label for="rememberme">Remeber me</label>
                                            </div>
                                        </div>
                                        <div class="box2">
                                        <span><a href="<?php echo $CFG->wwwroot;?>/login/forgot_password.php">Forgot password?</a></span>
                                        </div>
                                    </div>
                                    <div class="login_btn">
                                        <button type="submit">Log in</button>
                                    </div>
                                     <div class="log_in_guest" style="display:none;"><a href="#">Login as a Guest</a></div>
                                    <div class="more_options desktop">
                                        <div class="box1">
                                            <div class="icon">
                                                <img src="images/link-icon.png" />
                                            </div>
                                            <span><a href="#">Become a Student</a></span>
                                        </div>
                                        <div class="box2">
                                            <span><a href="#">Login as a Guest</a></span>
                                        </div>
                                    </div>

<!-------Mobile--------->
                                    <div class="more_options mobile" style="display:none;">
                                        <div class="box1">
                                            <div class="icon">
                                                <img src="images/link-icon.png" />
                                            </div>
                                            <span><a href="#">Become a Student</a></span>
                                        </div>
                                        <div class="box2">
                                            <span><a href="#">terms & policies</a></span>
                                        </div>
                                    </div>
<!-------Mobile--------->



                                    <div class="terms"><a href="https://myaccentway.com/">terms & policies</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>


</body>

</html>