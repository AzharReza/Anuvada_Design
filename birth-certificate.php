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

                <div class="price-content birth-content mt-2">
                    <h4>Price Calculation Birth Certificate</h4>
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
					  	  	  	 <p>How many pages would you like to have translated?</p>
					  	  	  	 <div class="row">
					  	  	  	 	<div class="col-sm-12 col-md-8">
					  	  	  	 		<form action="">
							  	  	  	 	<div class="form-group">
							  	  	  	 		<label>Number of Pages</label>
							  	  	  	 		<input type="number" class="form-control" value="1">
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
    <script src="assets/js/jquery.tag-editor.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
           $('select[name="target-lang"]').tagEditor({ initialTags: ['French'] });
        });  // End of Document Ready
    </script>
</body>
</html>