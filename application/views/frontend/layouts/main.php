<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Apaya Photo</title>
    
    <!-- CSS -->      
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/elegant-font/code/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/button.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/form-elements.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>static/pages/css/styles.css" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.static/pages/js"></script>
    <![endif]-->
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/slider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/superfish.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>static/pages/js/custom.js"></script>

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

    <!--
    spark, a free CSS web template by ZyPOP (zypopwebtemplates.com/)
    Download: http://zypopwebtemplates.com/
    License: Creative Commons Attribution
    -->
</head>
<body>
    <div id="container">
        <header> 
        	<?php $this->load->view('frontend/layouts/menubar.php');?>
        	<div class="clear"></div>
        </header>

        <?php $this->load->view($content); ?>

        <footer>
            <div class="footer-content width">
                <div class="row">
                    <div class="col-sm-4 contact-form">
                        <h4>Email Us</h4>
                        <form role="form" action="home/add_pesan" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Email</label>
                                <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-subjek">Subject</label>
                                <input type="text" name="subjek" placeholder="Subject..." class="contact-subjek form-control" id="contact-subjek">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-pesan">Message</label>
                                <textarea name="pesan" placeholder="Message..." class="contact-pesan form-control" id="contact-pesan"></textarea>
                            </div>
                            <button type="submit" class="btn">Send</button>
                        </form>
                    </div>
                    <div class="col-sm-4 contact-address">
                        <h4>Visit us</h4>
                        <div>
                            <p><span aria-hidden="true" class="icon_pin"></span>Universitas Mercu Buana Yogyakarta</p>
                            <p><span aria-hidden="true" class="icon_phone"></span>Phone: +62 857 4924 4294</p>
                            <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">info@apaya.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">   
                        <h4>Social Media</h4>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/apaya"><i class="fa fa-facebook fa-3x"></i></a>
                            <a href="https://twitter.com/apaya"><i class="fa fa-twitter fa-3x"></i></a>
                            <a href="https://instagram.com/apaya"><i class="fa fa-instagram fa-3x"></i></a>
                            <a href="//blog.apaya.com"><i class="fa fa-tumblr fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="footer-bottom">
                <p>Copyright <?php echo date("Y") ?> - &copy; ApayaPhoto</p>
             </div>
        </footer>
    </div>
</body>
</html>