    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
					  <div class="tab-pane container active" id="home">
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
					  <div class="tab-pane container fade" id="menu1">
					  	 
					  </div>
					  <div class="tab-pane container fade" id="menu2">
					  	 
					  </div>
					</div>
                </div>
            </div> <!-- content ends here -->
        </div>   <!-- right panel ends here -->
    </div>


    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
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
        });  // End of Document Ready
    </script>
</body>
</html>