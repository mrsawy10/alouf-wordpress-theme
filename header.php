<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alouf</title>
</head>
<?php
wp_head();
$logo = get_option("alouf_logo_img");
?>

<body class="inner-body" >
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <div id="top-header" class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="#"><img src="<?= $logo ?>" class="black-logo" alt="image" />
                            <img  src="<?= $logo ?>" class="white-logo" alt="image" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html"><img src="<?= $logo ?>" class="black-logo" alt="image" />
                        <img src="<?= $logo ?>" class="white-logo" alt="image" /></a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a href="index.html" class="nav-link ">Home </a></li>
                            <li class="nav-item">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="nav-link active">About Us</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Fleet</a></li>
                            <li class="nav-item nav-qout-mob">
                                <a href="#" class="nav-link">Request A Quote For Corporate</a>
                            </li>
                            <li class="nav-item nav-qout-mob">
                                <a href="#" class="nav-link">Reserve A Form For Indivsuals</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="navbar-nav lang-menu ml-auto">
                        <li class="nav-item nav-qout">
                            <a href="#" class="nav-link">Request A Quote For Corporate</a>
                        </li>
                        <li class="nav-item nav-qout">
                            <a href="#" class="nav-link">Reserve A Form For Indivsuals</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>