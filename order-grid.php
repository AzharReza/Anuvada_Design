    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0">
	            <div class="clearfix"></div>
                    <!-- Order Modal -->
                    <div class="modal orderModal" id="orderModal">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <div class="icon-govel mb-2">
                                      <img src="images/icon-govel.png" width="50" height="50" alt="icon-govel" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <select class="form-control">
                                            <option>LEGAL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                             <div class="modal-image">
                                 <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                             </div>
                             <strong>
                                 <ul class="nav flex-column pl-4" style="list-style: disc;">
                                     <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                     <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                     <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                     <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                 </ul>
                             </strong>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam similique deleniti eos commodi ipsam, fugit assumenda mollitia unde fuga natus, nulla eveniet quod molestias enim aliquam, maxime quidem. Facere maxime, esse, fugit ducimus qui saepe deserunt exercitationem rem aliquid odio explicabo accusantium sit quo modi accusamus provident, sequi dignissimos, expedita minus harum aperiam quis perspiciatis molestiae reprehenderit? Iure architecto nulla nobis culpa fuga, quibusdam consequatur ad quisquam eius quis sapiente ullam iste perspiciatis maiores nam corporis illo dolor, consectetur in. Amet soluta aperiam odit tempore id ad, sunt delectus, ab, non corrupti quae, iure ipsam recusandae accusantium accusamus est facere.</p>
                             <div class="order-bottom d-flex justify-content-center">
                               <button class="btn btn-book"><i class="fa fa-heart"></i> Book Now</button>
                             </div>
                          </div>
                        </div>
                      </div>
                    </div>

	                <div class="order-section my-order order-grid">
                        <div class="col-md-6 col-lg-6 col-xl-8">
                            <div class="order-left-col">
                                <div class="grid-upper-col">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <div class="icon-govel">
                                              <img src="images/icon-govel.png" width="80" height="80" alt="icon-govel" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                <select class="form-control">
                                                    <option>LEGAL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4 my-4">
                                        <div class="order-inner-col">
                                            <div class="order-image my-2">
                                                <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                                            </div>
                                            <div class="order-detail mb-2">
                                                <h5>Birth Certificate</h5>
                                                <div class="order-review mt-2">
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="pl-2">(454) reviews</span>
                                                </div>
                                            </div>
                                            <div class="order-bottom">
                                                <button class="btn btn-book" type="button" data-toggle="modal" data-target="#orderModal"><i class="fa fa-heart"></i> Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 my-4">
                                        <div class="order-inner-col">
                                            <div class="order-image my-2">
                                                <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                                            </div>
                                            <div class="order-detail mb-2">
                                                <h5>Birth Certificate</h5>
                                                <div class="order-review mt-2">
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="pl-2">(454) reviews</span>
                                                </div>
                                            </div>
                                            <div class="order-bottom">
                                                <button class="btn btn-book"><i class="fa fa-heart"></i> Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 my-4">
                                        <div class="order-inner-col">
                                            <div class="order-image my-2">
                                                <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                                            </div>
                                            <div class="order-detail mb-2">
                                                <h5>Birth Certificate</h5>
                                                <div class="order-review mt-2">
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="pl-2">(454) reviews</span>
                                                </div>
                                            </div>
                                            <div class="order-bottom">
                                                <button class="btn btn-book"><i class="fa fa-heart"></i> Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 my-4">
                                        <div class="order-inner-col">
                                            <div class="order-image my-2">
                                                <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                                            </div>
                                            <div class="order-detail mb-2">
                                                <h5>Birth Certificate</h5>
                                                <div class="order-review mt-2">
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="pl-2">(454) reviews</span>
                                                </div>
                                            </div>
                                            <div class="order-bottom">
                                                <button class="btn btn-book"><i class="fa fa-heart"></i> Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 my-4">
                                        <div class="order-inner-col">
                                            <div class="order-image my-2">
                                                <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                                            </div>
                                            <div class="order-detail mb-2">
                                                <h5>Birth Certificate</h5>
                                                <div class="order-review mt-2">
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="pl-2">(454) reviews</span>
                                                </div>
                                            </div>
                                            <div class="order-bottom">
                                                <button class="btn btn-book"><i class="fa fa-heart"></i> Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4 my-4">
                                        <div class="order-inner-col">
                                            <div class="order-image my-2">
                                                <img src="images/order-image.jpg" class="img-fluid" alt="order-image">
                                            </div>
                                            <div class="order-detail mb-2">
                                                <h5>Birth Certificate</h5>
                                                <div class="order-review mt-2">
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star star-active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="pl-2">(454) reviews</span>
                                                </div>
                                            </div>
                                            <div class="order-bottom">
                                                <button class="btn btn-book"><i class="fa fa-heart"></i> Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="btn btn-more">View More <i class="fa fa-chevron-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
	                	<div class="col-md-6 col-lg-6 col-xl-4 column-tile">
	                		<div class="column-inner bg-white mb-3">
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
	                								<span class="item-name">Noodle Salad</span>
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
                						<li class="row order-list">
                							<div class="col-8 d-flex align-items-center">
                								<div class="square-block"></div>
	                							<div class="item-middle">
	                								<span class="item-name">Cheese burger</span>
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
                						<li class="row order-list">
                							<div class="col-8 d-flex align-items-center">
                								<div class="square-block"></div>
	                							<div class="item-middle">
	                								<span class="item-name">Strawberry Pie</span>
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
	                <footer class="site-footer mt-2">
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
    <script>
        jQuery(document).ready(function ($) {
           
        });  // End of Document Ready
    </script>
</body>
</html>
