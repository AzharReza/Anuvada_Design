    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0">
                <h4 class="box-title">Dashboard</h4>
                <div class="clearfix"></div>
                <div class="content-section mt-2">
                    <div class="dashboard-center">
                        <div class="circle-outer">
                            <a class="circle-box circle-one animate__animated animate__bounceInDown" href="meet-partners.php">
                                <div class="dash-icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <p>Partners</p>
                            </a>
                            <a class="circle-box circle-two animate__animated animate__bounceInDown" href="#">
                                <div class="dash-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <p>Refer & Earn</p>
                            </a>
                        </div>
                        <div class="circle-outer">
                            <a class="circle-box circle-three animate__animated animate__bounceInDown" href="interpretation.php">
                                <div class="dash-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <p>Interpretation</p>
                            </a>
                            <a class="circle-box circle-four animate__animated animate__bounceInDown" href="get-quote.php">
                                <div class="dash-icon">
                                    <i class="fa fa-download"></i>
                                </div>
                                <p>Get a Quote</p>
                            </a>
                            <a class="circle-box circle-five animate__animated animate__bounceInDown" href="calculate-price.php">
                                <div class="dash-icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <p>Translation</p>
                            </a>
                        </div>
                        <div class="circle-outer">
                            <a class="circle-box circle-six animate__animated animate__bounceInDown" href="service-grid.php">
                                <div class="dash-icon">
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                                <p>Certified Translation</p>
                            </a>
                            <a class="circle-box circle-seven animate__animated animate__bounceInDown" href="order-list.php">
                                <div class="dash-icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <p>My Orders</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Pop Up -->

                <div class="popup popup-dashboard">
                    <div class="popup-content animate__animated animate__bounceInDown">
                        <div class="flex-outer flex-outer-one">
                            <div class="flex-inner">
                                <a class="icon-round" href="refer-earn.php">
                                    <i class="fa fa-gift"></i>
                                </a>
                            </div>
                            <div class="flex-inner">
                                <a class="icon-round">
                                    <i class="fa fa-globe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex-outer flex-outer-two">
                            <div class="flex-inner mr-5">
                                <a class="icon-round">
                                    <i class="fa fa-desktop"></i>
                                </a>
                            </div>
                            <div class="flex-inner ml-5">
                                <a class="icon-round">
                                    <i class="fa fa-globe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="flex-outer flex-outer-three">
                            <div class="flex-inner">
                                <a class="icon-round">
                                    <i class="fa fa-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <footer class="site-footer">
                    <div class="footer-inner bg-white">
                        <div class="row">
                            <div class="col-sm-6">
                                Copyright &copy; 2021 <a href="http://corbissoft.com">Corbis Soft</a>
                            </div>

                        </div>
                    </div>
                </footer> -->
            </div> <!-- content ends here -->
        </div>   <!-- right panel ends here -->
    </div>


    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".circle-two").click(function(){
                $(".popup-dashboard").show();
            })
        });  // End of Document Ready
    </script>
</body>
</html>
