    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery.tag-editor.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0">
                <h4 class="box-title text-dark mb-2">Calculate Your Price</h4>
                <p>Language, Translation & Delivery</p>

                <div class="price-content mt-2">
                    <h4>Price Calculation Apostille</h4>
                    <ul class="nav nav-tabs row mt-3 mx-0">
					  <li class="nav-item col-6 col-sm-3">
					    <a class="nav-link active" data-toggle="tab" href="#home"><i class="fa fa-check"></i> Number & Language</a>
					  </li>
					  <li class="nav-item col-6 col-sm-3">
					    <a class="nav-link" data-toggle="tab" href="#menu1">Translation Package</a>
					  </li>
					  <li class="nav-item col-6 col-sm-3">
					    <a class="nav-link" data-toggle="tab" href="#menu2">Delivery</a>
					  </li>
					  <li class="nav-item col-6 col-sm-3">
					    <a class="nav-link" data-toggle="tab" href="#menu3">Your Order</a>
					  </li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane container birth-content active" id="home">
							<div class="row">
								<div class="col-md-8 column-one">
									<p>How many pages would you like to have translated?</p>
									<div class="row">
									<div class="col-sm-12 col-md-8">
										<form action="">
											<div class="form-group">
												<label>Number of Pages</label>
												<input type="number" class="form-control" min="1" value="1">
											</div>
											<div class="form-group">
												<h5>Translation From</h5>
												<label>Source Language</label>
												<select class="form-control">
													<option value="">English</option>
												</select>
											</div>
											<div class="form-group">
												<label>Target Language</label>
												<select class="form-control" name="target-lang">
													<option>French</option>
												</select>
											</div>
											<div class="button-bottom">
												<button class="btn btn-primary">Calculate Price</button>
											</div>
											</form>
									</div>
									</div>
								</div>
								<div class="col-md-4 column-two">
									<p>Order Overview</p>
									<h4>Birth Certificate</h4>
									<table class="table table-borderless mt-4">
										<tr>
											<th>Number of Pages</th>
											<td>1</td>
										</tr>
										<tr>
											<th>Source Language</th>
											<td>English</td>
										</tr>
										<tr>
											<th>Target Language</th>
											<td>French</td>
										</tr>
										<hr>
									</table>
								</div>
							</div>
						</div>
						<div class="tab-pane container certification-tab fade" id="menu1">
							<div class="row">
								<div class="col-md-8 column-one">
									<p>Choose Your desired translation package</p>
									<label>RECOMENDED</label>
									<div class="translation">
									<div class="d-flex justify-content-between">
										<h4 class="text-info">Certified Translation</h4>
										<p class="text-info"><i class="fa fa-check-circle"></i></p>
									</div>
									<div class="translate-body">
										<p>Lorem ipsum dolor sit amet consectetur <br/> adipisicing elit.</p>
										<p class="mt-2"><b>Lorem ipsum dolor sit amet consectetur <br/> adipisicing elit.</b></p>
									</div>
									</div>

									<div class="row mt-5">
										<div class="col-sm-6">
										<h5 class="text-dark mb-3"><b>Are Additional copies required?</b></h5>
										<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
										</div>
										<div class="col-sm-6">
										<input type="number" value="0" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-4 column-two">
									<p>Order Overview</p>
									<h4>Apostille</h4>
									<table class="table table-borderless mt-4">
										<tr>
											<th>Number of Pages</th>
											<td>1</td>
										</tr>
										<tr>
											<th>Source Language</th>
											<td>English</td>
										</tr>
										<tr>
											<th>Target Language</th>
											<td>German</td>
										</tr>
										<tr class="tr-bordered">
											<th>Translation Packages</th>
											<td>Certified Translation</td>
										</tr>
										<tr>
											<th>Net Amount</th>
											<td>$12336</td>
										</tr>
										<tr>
											<th>VAT</th>
											<td>8.45$</td>
										</tr>
										<tr class="tr-bold">
											<th>Total Amount</th>
											<td>8.45$</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="d-flex justify-content-between bottom-buttons">
								<button class="btn btn-outline-primary">Back</button>
								<button class="btn btn-primary">Continue</button>
							</div>
						</div>
						<div class="tab-pane container shipping-content fade" id="menu2">
							<div class="row">
								<div class="col-md-8 column-one">
									<p>Choose Your desired Shipping Method</p>
									<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="shipping-box mb-2">
											<h4>International Shipping</h4>
											<p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos modi vero suscipit quasi perspiciatis</p>
											<b>Total Price: $56.05</b>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="shipping-box mb-2">
											<h4>Express Shipping</h4>
											<p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos modi vero suscipit quasi perspiciatis</p>
											<b>Total Price: $56.05</b>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="shipping-box active mb-2">
											<div class="d-flex justify-content-between">
												<h4>Standard Shipping</h4>
												<div class="ship-icon">
													<i class="fa fa-check-circle"></i>
												</div>
											</div>
											<p class="pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos modi vero suscipit quasi perspiciatis</p>
											<b>Total Price: $56.05</b>
										</div>
									</div>
									</div>
									<div class="row">
									<div class="col-12">
										<b>Add a digital version of the verified translation</b>
										<div class="checkbox-group d-flex align-items-start">
											<p>Select this option Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Ab quaerat numquam odio sapiente tempore neque nemo illo tempora a iure.</p>
											<div class="form-checkbox ml-2">
												<input type="checkbox" class="checkbox-inline">
											</div>
										</div>
									</div>
									</div>

								</div>
								<div class="col-md-4 column-two">
									<p>Order Overview</p>
									<h4>Birth Certificate</h4>
									<table class="table table-borderless mt-4">
										<tr>
											<th>Number of Pages</th>
											<td>1</td>
										</tr>
										<tr>
											<th>Source Language</th>
											<td>English</td>
										</tr>
										<tr>
											<th>Target Language</th>
											<td>German</td>
										</tr>
										<tr class="tr-bordered">
											<th>Translation Packages</th>
											<td>Certified Translation</td>
										</tr>
										<tr>
											<th>Net Amount</th>
											<td>$12336</td>
										</tr>
										<tr>
											<th>VAT</th>
											<td>8.45$</td>
										</tr>
										<tr class="tr-bold">
											<th>Total Amount</th>
											<td>8.45$</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="d-flex justify-content-between bottom-buttons">
								<button class="btn btn-outline-primary">Back</button>
								<button class="btn btn-primary">Continue</button>
							</div>
						</div>
						<div class="tab-pane container order-tab fade" id="menu3">
							<div class="row">
								<div class="col-md-8 column-one">
									<p>Assign a name to your order</p>
									<form action="">
									<div class="form-panel">
										<div class="form-group">
											<label >Order Name (max.50 Characters)</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label >Your Message to us optional</label>
											<textarea class="form-control"></textarea>
										</div>
									</div>

									<div class="form-panel">
										<h4>Additional Data</h4>
										<div class="form-group">
											<label >Your name in latin (optional)</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label >Target Country</label>
											<select class="form-control">
												<option>Germany</option>
											</select>
											<small>Please select the country for which the translation is required.</small>
										</div>
									</div>
									</form>
								</div>
								<div class="col-md-4 column-two">
									<p>Order Overview</p>
									<h4>Apostille</h4>
									<table class="table table-borderless mt-4">
										<tr>
											<th>Number of Pages</th>
											<td>1</td>
										</tr>
										<tr>
											<th>Source Language</th>
											<td>English</td>
										</tr>
										<tr>
											<th>Target Language</th>
											<td>German</td>
										</tr>
										<tr class="tr-bordered">
											<th>Translation Packages</th>
											<td>Certified Translation</td>
										</tr>
										<tr>
											<th>Net Amount</th>
											<td>$12336</td>
										</tr>
										<tr>
											<th>VAT</th>
											<td>8.45$</td>
										</tr>
										<tr class="tr-bold">
											<th>Total Amount</th>
											<td>8.45$</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="d-flex justify-content-between bottom-buttons">
								<button class="btn btn-outline-primary">Back</button>
								<button class="btn btn-primary">Continue</button>
							</div>
						</div>
					</div>
                </div>
            </div> <!-- content ends here -->
        </div>   <!-- right panel ends here -->
    </div>


    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.tag-editor.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
           $(".btn-toggle").click(function(){
               var current = $(this);
               $(".btn-toggle").not(current).removeClass("active");
               $(".popup-box .dropdown-menu").hide();
               if($(this).hasClass("active")){
                  $(this).removeClas("active");
                  $(this).next(".dropdown-menu").hide();
               }else{
                  $(this).addClass("active");
                  $(this).next(".dropdown-menu").show();
               }
            });
            $('select[name="target-lang"]').tagEditor({ initialTags: ['French'] });
        });  // End of Document Ready
    </script>
</body>
</html>