
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dr. Jaime Burgos Gracía</title>
	<meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/principal.css?v=1.0"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.css"); ?>" integrity="   sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="icon" href="<?php echo base_url("assets/imagenes/atomo.ico");?>"/>
</head>
<header>

</header>
<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="#" style="color: #fc5e29;"><img src="<?php echo base_url("assets/imagenes/atomo.png")?>" style="width: 15%; height: auto;">Jaime Burgos García </a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="#acercade">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>

<section class="home">
</section>
<body>
    <div class="content-padder">
        <section>
            <?php echo $content_view?> 
        </section>
    </div>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/">Anup</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>



<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.easing.min.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/drjb.js");?>"></script>

<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
</script>

</html> 