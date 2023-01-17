<?php
//session_start();
//include('../constant/check.php');
?>
<?php
//session_start();
include('./constant/check.php');
include('./constant/connect.php');
?>

<div id="main-wrapper">

    <div class="header">
        <marquee class="d-lg-none d-block">
            <div class="ml-lg-5 pl-lg-5 ">

                <b id="ti" class="ml-lg-5 pl-lg-5"></b>


            </div>
        </marquee>
        <nav class="navbar top-navbar navbar-expand-md navbar-light">

            <div class="navbar-header">
                <a class="navbar-brand" href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript">


                    <b><img src="./assets/uploadImage/Logo/logo.jpg" alt="homepage" class="dark-logo" style="width:100%;height:auto;" /></b>

                </a>
            </div>

            <div class="navbar-collapse">

                <ul class="navbar-nav mr-auto mt-md-0">

                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>



                </ul>
                <ul class="navbar-nav my-lg-0 ml-auto">



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <img src="./assets/uploadImage/Profile/young-woman-avatar-facial-features-stylish-userpic-flat-cartoon-design-elegant-lady-blue-jacket-close-up-portrait-80474088.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                                <?php } ?>

                                <li><a href="./constant/logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>