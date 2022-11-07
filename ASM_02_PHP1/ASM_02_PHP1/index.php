<?php
  require_once "ham.php";
  if (isset($_GET['oanh'])==true) $oanh =  $_GET['oanh'];
  else $oanh="";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>NGUYỄN ĐÌNH OANH | Home</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-icons.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload -->
    <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light">
    <main class="main oh" id="main">

        <!-- Navigation -->
        <?php require_once "header.php" ?>
        <!-- end navigation -->

        <!-- featured posts grid -->
        <section class="featured-posts-grid bg-dark ">
            <?php if($oanh=="") require_once "tinnoibat.php" ?>
        </section>

        <!-- end featured posts grid -->

        <div class="main-container container mt-40" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content mb-30">
                    <?php
                      switch($oanh){
                        case "lienhe": require_once "lienhe.php";break;
                        case "dangnhap": require_once "dangnhap.php";break;
                        case "tintrongloai": require_once "tintrongloai.php";break;
                        case "chitiettin": require_once "chitiettin.php";break;
                        case "gioithieu": require_once "gioithieu.php";break;
                        default:  require_once "main.php";break;
                      }
                     ?>
                </div>
                <!-- end posts -->

                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">
                    <?php require_once "aside.php"?>
                </aside>
                <!-- end sidebar -->

            </div>
            <!-- end content -->
        </div>
        <!-- end main container -->

        <!-- Footer -->
        <?php require_once "footer.php" ?>
        <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main>
    <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/owl-carousel.min.js"></script>
    <script src="js/twitterFetcher_min.js"></script>
    <script src="js/jquery.newsTicker.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>