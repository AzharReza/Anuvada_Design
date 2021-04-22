    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0">
	            <div class="clearfix"></div>
	                <div class="order-section my-order">
                        <h4 class="mb-1">Interpretation</h4>
                        <p>Choose your location and the languages. We will search for the interpretor</p>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-9 mb-2">
                                        <div class="row bg-white py-2 mx-0">
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                                    </div>
                                                    <select class="form-control">
                                                        <option value="">Munich, Germany</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                    <select class="form-control">
                                                        <option value="">Choose Date</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-tags"></i></div>
                                                    </div>
                                                    <select class="form-control">
                                                        <option value="">Select Service Tag</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row calendar-row mt-2">
                                            <div class="col-md-12">
                                                <div class="container-calendar">
                                                  <h4>MY BOOKINGS</h4>
                                                  <div class="button-container-calendar">
                                                    <h3 id="monthAndYear"></h3>
                                                    <button id="previous" onclick="previous()">&#8249;</button>
                                                    <button id="next" onclick="next()">&#8250;</button>
                                                  </div>

                                                  <table class="table-calendar" id="calendar" data-lang="en">
                                                    <thead id="thead-month"></thead>
                                                    <tbody id="calendar-body"></tbody>
                                                  </table>

                                                  <div class="footer-container-calendar">
                                                    <label for="month">Jump To: </label>
                                                    <select id="month" onchange="jump()">
                                                      <option value=0>Jan</option>
                                                      <option value=1>Feb</option>
                                                      <option value=2>Mar</option>
                                                      <option value=3>Apr</option>
                                                      <option value=4>May</option>
                                                      <option value=5>Jun</option>
                                                      <option value=6>Jul</option>
                                                      <option value=7>Aug</option>
                                                      <option value=8>Sep</option>
                                                      <option value=9>Oct</option>
                                                      <option value=10>Nov</option>
                                                      <option value=11>Dec</option>
                                                    </select>
                                                    <select id="year" onchange="jump()"></select>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-3 pt-2 bg-white">
                                        <div class="form-group">
                                            <label for="">Source Language</label>
                                            <select class="form-control">
                                                <option>English</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Target Language</label>
                                            <select class="form-control">
                                                <option>German</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-sm btn-primary">Calculate Price</button>
                                    </div>
                                </div>
                            </div>
    	                	<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 column-tile">
    	                		<div class="column-inner mb-3">
    	                			<div class="d-flex justify-content-between align-items-center">
    	                				<h4>My Order</h4>
    	                				<h5><a href="#" class="text-success">Edit</a></h5>
    	                			</div>
                    				<div class="tile-upper mt-3">
                    					<ul class="nav flex-column">
                    						<li><i class="fa fa-clock-o"></i> 09:40 AM</li>
                    						<li><i class="fa fa-map-marker"></i> 2511 Pacific Avenue, CA</li>
                    						<li><i class="fa fa-comment"></i> Order must stay warm</li>
                    					</ul>
                    				</div>
                    				<div class="tile-orders">
                    					<ul class="nav flex-column order-nav">
                    						<li class="row order-list">
                    							<div class="col-8 d-flex align-items-center">
                    								<div class="square-block"></div>
    	                							<div class="item-middle">
    	                								<span class="item-name">Interpretation</span>
    	                								<div class="item-qty mt-1">
    	                									<i class="fa fa-minus"></i>
    	                									<span>1</span>
    	                									<i class="fa fa-plus"></i>
    	                								</div>
    	                							</div>
    	                						</div>
                    							<div class="col-4">
                    								<div class="text-right item-right">
                    									<span class="text-secondary">250g</span>
                    									<h5 class="price mt-1">$4.50 <i class="fa fa-times"></i></h5>
                    								</div>
                    							</div>
                    						</li>
                    					</ul>
                    				</div>
                    				<div class="tile-card">
                    					<div class="d-flex justify-content-between card-top">
                    						<i class="fa fa-check-circle"></i>
                    						<p><img src="images/visa.png" alt="visa-image"></p>
                    					</div>
                    					<div class="card-no">
                    						<p class="text-white">*********** 4212</p>
                    					</div>
                    					<div class="card-bottom">
                    						<div class="row bottom-row">
                    							<div class="col-6">
                    								<p class="card-head">Available Funds</p>
                    								<p>$1582.50</p>
                    							</div>
                    							<div class="col-3">
                    								<p class="card-head">Expires</p>
                    								<p>08/22</p>
                    							</div>
                    							<div class="col-3">
                    								<p class="card-head">CVV</p>
                    								<p>186</p>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                    				<div class="tile-bottom">
                    					<div class="d-flex justify-content-between">
                    						<p class="text-dark">Total</p>
                    						<h4>$14.50</h4>
                    					</div>
                    					<button class="btn btn-checkout btn-block">Checkout</button>
                    				</div>
    	                		</div>
    	                	</div>
                        </div>
	                </div>
	                <footer class="site-footer">
	                    <div class="footer-inner bg-white">
	                        <div class="row">
	                            <div class="col-sm-6">
	                                Copyright &copy; 2021 <a href="http://corbissoft.com">Corbis Soft</a>
	                            </div>

	                        </div>
	                    </div>
	                </footer>
	        </div> <!-- content ends here -->
        </div>   <!-- right panel ends here -->
    </div>


    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/calendar.js"></script>
    <script>
        jQuery(document).ready(function ($) {
           
        });  // End of Document Ready
    </script>
</body>
</html>
