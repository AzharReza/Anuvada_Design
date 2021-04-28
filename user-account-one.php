    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery.tag-editor.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0">
            	<div class="user-account">
            		<div class="row">
            			<div class="col-sm-3 bg-light left-sidebar">
            				<ul class="nav flex-column">
							  <li class="nav-item">
							    <a class="nav-link active" href="#">Account Information</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Billing Address</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">About Me</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">API Key</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Translation Memory</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Terminology / Glossary</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Password Update</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Beneficiary Account</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Manage Project Notes</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Privacy Policy</a>
							  </li>
							</ul>
            			</div>
            			<div class="col-sm-9">
            				<div class="user-content bg-light">
            					<form action="#" class="">
            						<div class="form-panel">
            							<h4>Status</h4>
		            					<div class="form-group group-inline">
		            						<label>Are you a business customer?</label>
		            						<input type="radio" name="rd-customer" value="rd-private" class="ml-2" checked="">Private Customer
		            						<input type="radio" name="rd-customer" value="rd-business" class="ml-2">Business Customer
		            					</div>
            						</div>
            						<div class="private-customer">
            							<div class="form-panel">
	            							<h4>Salutation</h4>
			            					<div class="form-group group-inline my-2">
			            						<input type="radio" name="rd-gender" class="ml-2" checked="">Mr.
			            						<input type="radio" name="rd-gender" class="ml-2">Mrs.
			            					</div>
			            					<div class="form-group">
			            					    <label>First name</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Last name</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Telephone Number</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Mobile Number</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Fax Number</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Your Email Address</label>
			            					    <input type="text" class="form-control">
			            					</div>
            							</div>
	            						<div class="form-panel">
	            							<h4>Billing Address</h4>
			            					<div class="row">
			            						<div class="col-md-8">
			            							<div class="form-group">
			            								<label>Street Number *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            						<div class="col-md-4">
			            							<div class="form-group">
			            								<label>Address Suffix *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            					</div>

			            					<div class="row">
			            						<div class="col-md-5">
			            							<div class="form-group">
			            								<label>Zip Code *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            						<div class="col-md-7">
			            							<div class="form-group">
			            								<label>City *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            					</div>

			            					<div class="row">
			            						<div class="col-md-5">
			            							<div class="form-group">
			            								<label>Country *</label>
			            								<select name="" id="" class="form-control">
			            									<option></option>
			            								</select>
			            							</div> 
			            						</div>
			            					</div>
			            					<button class="btn btn-primary">Speichern</button>
	            						</div>
            						</div>
            						<div class="business-customer" style="display: none;">
            							<div class="form-panel">
	            							<h4>Salutation</h4>
			            					<div class="form-group group-inline my-2">
			            						<input type="radio" name="rd-gender" class="ml-2" checked="">Mr.
			            						<input type="radio" name="rd-gender" class="ml-2">Mrs.
			            					</div>
			            					<div class="form-group">
			            					    <label>First name</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Last name</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Telephone Number</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Mobile Number</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Fax Number</label>
			            					    <input type="text" class="form-control">
			            					</div>
			            					<div class="form-group">
			            					    <label>Your Email Address</label>
			            					    <input type="text" class="form-control">
			            					</div>
            							</div>
	            						<div class="form-panel">
	            							<h4>Linkgoing for business</h4>
			            					<div class="row">
			            						<div class="col-md-6">
			            							<div class="form-group">
			            								<label>Company Name *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            						<div class="col-md-6">
			            							<div class="form-group">
			            								<label>Industry *</label>
			            								<select name="" id="" class="form-control">
			            									<option></option>
			            								</select>
			            							</div> 
			            						</div>
			            					</div>

			            					<div class="row">
			            						<div class="col-md-6">
			            							<div class="form-group">
			            								<label>Phone *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            						<div class="col-md-6">
			            							<div class="form-group">
			            								<label>VAT Number *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            					</div>

			            					<div class="row">
			            						<div class="col-md-6">
			            							<div class="form-group">
			            								<label>Url *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            						<div class="col-md-6">
			            							<div class="form-group">
			            								<label>Position in the Company *</label>
			            								<input type="text" class="form-control">
			            							</div> 
			            						</div>
			            					</div>
			            					<button class="btn btn-primary">Speichern</button>
	            						</div>
            						</div>
	            				</form>
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
           $(".user-content input[type='radio']").change(function(){
           	  var radio = $(this).val();
           	  if(radio == 'rd-private'){
           	  	$(".private-customer").show(300);
           	  	$(".business-customer").hide(300);
           	  }
           	  if(radio == 'rd-business'){
           	  	$(".private-customer").hide(300);
           	  	$(".business-customer").show(300);
           	  }
           })
        });  // End of Document Ready
    </script>
</body>
</html>