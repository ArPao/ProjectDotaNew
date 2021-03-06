<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ปุ่มค้นหา -->
    <style>
        .pi {
            color: #FFFFFF;
            text-align: right;
        }

    </style>
    <!--ปุ่มเลือก-->
    <style>
        .buttonh {
            background-color: white; /* Green */
            border: none;
            color: black;
            padding: 110px 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 40px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            cursor: pointer;
        }

        .buttonh1 {
            border-radius: 50%;
            background-color: white;
            color: black;
        }

        .buttonh2 {
            border-radius: 50%;
            background-color: white;
            color: black;
        }

        .buttonh1:hover {
            background-color: black;
            color: white;
        }

        .buttonh2:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="/"><img src="assets/img/portfolio/Logo3.png" width="500" height="100"></a>

        </div>


        @if(!session()->get('FacebookName'))
            <a href="facebooklogin">
                <div align="right"><img src="assets/img/portfolio/login_Facebook.jpg" width="200" height="40">
                    <img></div>
            </a>
        @endif

        @if(session()->get('FacebookName'))
            <div align="right">
                <div class="btn-group" role="group">

                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <img src="{{session()->get('FacebookAvatar')}}" width="30" height="30">
                        {{session()->get('FacebookName')}}
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">ประวัติคำขอร้อง</a></li>
                        <li><a href="logoutfacebook">ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
            @endif


                    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll ">
                        <a href="#search">ค้นหาช่างภาพ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">จัดอันดับช่างภาพ</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">ช่างภาพในระบบ</a>
                    </li>
                </ul>
            </div>
            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home"><span class="glyphicon glyphicon-user "></span>คุณ {{Auth::user()->name}}</a>
                    </li>
                    <li>
                        <a href="auth/logout"><span class="glyphicon glyphicon-log-in"></span> ออกจากระบบ </a>
                    </li>
                </ul>

            </div>--}}

            <!-- /.navbar-collapse -->
    </div>


    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">


        <div class="row">
            <div class="col-md-12">

                <img id="search" class="img-responsive" src="assets/img/profile.png" alt="">

                <div class="intro-text">
                    <span class="name"><h3> หาช่างภาพที่ใช่ ใน 3 ขั้นตอน </h3></span>
                    <hr class="star-light">

                    <form method="GET">
                        <a href="/search" class="buttonh buttonh1">หาช่างภาพ</a>
                        <a href="./login" class="buttonh buttonh2">เป็นช่างภาพ</a>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <br><br><br><br><br><br>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>จัดอันดับช่างภาพ</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    1.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    2.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    3.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    4.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    5.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    6.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    7.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-3 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    8.<img src="assets/img/portfolio/test.jpg" class="img-responsive" alt=""><img
                            src="assets/img/portfolio/like.png" class="img-responsive" alt="">
                </a>
                <br><br><br><br><br><br>
            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>ช่างภาพในระบบ</h2>
                <hr class="star-light">
            </div>
            <section id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 portfolio-item">
                            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="assets/img/portfolio/test.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-sm-2 portfolio-item">
                            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="assets/img/portfolio/test.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-sm-2 portfolio-item">
                            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="assets/img/portfolio/test.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-sm-2 portfolio-item">
                            <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="assets/img/portfolio/test.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-sm-2 portfolio-item">
                            <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="assets/img/portfolio/test.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-sm-2 portfolio-item">
                            <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="assets/img/portfolio/test.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>

                    <p>University Of Phayao</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About The Website</h3>

                    <p>Use for fine Photoghraper. My fanpage<a
                                href="https://www.facebook.com/photographerMatching/?ref=hl">PhotographerMatching
                            Community</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="assets/img/portfolio/test.jpg" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="assets/img/portfolio/test.jpg" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="assets/img/portfolio/test.jpg" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="assets/img/portfolio/test.jpg" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="assets/img/portfolio/test.jpg" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="assets/img/portfolio/test.jpg" class="img-responsive img-centered" alt="">

                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set
                            by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can
                            download their free set with 16 icons, or you can purchase the entire set with 146 icons for
                            only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="assets/js/jqBootstrapValidation.js"></script>
<script src="assets/js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/js/freelancer.js"></script>

</body>

</html>
