    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0">
                <h4 class="box-title">Get A Quote</h4>
                <section class="quote-content bg-white mt-3">
                	<div class="row">
                		<div class="col-md-6">
                			<form class="quote-form pt-3">
                				<div class="row">
                					<div class="form-group col-md-6">
                						<label>First Name*</label>
                						<input type="text" class="form-control">
                					</div>
                					<div class="form-group col-md-6">
                						<label>Last Name*</label>
                						<input type="text" class="form-control">
                					</div>
                					<div class="form-group col-md-6">
                						<label>Email*</label>
                						<input type="text" class="form-control">
                					</div>
                					<div class="form-group col-md-6">
                						<label>Phone Number*</label>
                						<input type="text" class="form-control">
                					</div>
                					<div class="form-group col-md-6">
                						<label>Country of Residance*</label>
                						<input type="text" class="form-control">
                					</div>
                					<div class="form-group col-md-6">
                						<label>Referral*</label>
                						<input type="text" class="form-control">
                					</div>
                					<div class="form-group col-md-12">
                						<label>Message*</label>
                						<textarea class="form-control"></textarea>
                					</div>
                				</div>
                			</form>
                		</div>
                		<div class="col-md-6">
                			<form action="#" class="quote-formTwo">
                				<div class="row">
                					<div class="form-group col-md-12">
	                					<label>Required Services</label>
	                					<select class="form-control">
	                						<option>Select</option>
	                					</select>
	                				</div>
	                				<div class="form-group col-md-6">
                                       <label for="file1" class="form-control fileLabel">
                                       	  <span>Upload File</span>
                                       	  <i class="fa fa-plus"></i>
                                       	  <input type="file" id="file1">
                                       </label>
	                				</div>
	                				<div class="form-group col-md-6">
                                       <label for="file2" class="form-control fileLabel">
                                       	  <span>Upload File</span>
                                       	  <i class="fa fa-plus"></i>
                                       	  <input type="file" id="file2">
                                       </label>
	                				</div>
	                				<div class="form-group col-md-6">
                                       <label for="file3" class="form-control fileLabel">
                                       	  <span>Upload File</span>
                                       	  <i class="fa fa-plus"></i>
                                       	  <input type="file" id="file3">
                                       </label>
	                				</div>
	                				<div class="form-group col-md-6">
                                       <label for="file4" class="form-control fileLabel">
                                       	  <span>Upload File</span>
                                       	  <i class="fa fa-plus"></i>
                                       	  <input type="file" id="file4">
                                       </label>
	                				</div>
	                				<div class="form-group col-md-6">
                                       <label for="file5" class="form-control fileLabel">
                                       	  <span>Upload File</span>
                                       	  <i class="fa fa-plus"></i>
                                       	  <input type="file" id="file5">
                                       </label>
	                				</div>
	                				<div class="form-group col-md-6">
                                       <label for="file6" class="form-control fileLabel">
                                       	  <span>Upload File</span>
                                       	  <i class="fa fa-plus"></i>
                                       	  <input type="file" id="file6">
                                       </label>
	                				</div>
	                				<div class="form-group col-md-12">
	                					<div class="d-flex align-items-center">
	                						<div class="input-selector mr-2">
	                							<input type="checkbox" class="checkbox-inline">
	                						</div>
	                						<div class="input-text">
	                							<label class="mb-0">I agree to the terms & conditions</label>
	                							<a href="#" class="terms-link">View Terms of Use</a>
	                						</div>
	                					</div>
	                				</div>
	                				<div class="form-group col-md-12">
	                					<div class="button-group">
	                						<button class="btn btn-back">Back</button>
	                						<button class="btn btn-submit">Submit</button>
	                					</div>
	                				</div>
                				</div>
                			</form>
                		</div>
                	</div>
                </section>
            </div> <!-- content ends here -->
        </div>   <!-- right panel ends here -->
    </div>


    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $("[type=file]").on("change", function(){
			  // Name of file and placeholder
			  var file = this.files[0].name;
			  var dflt = $(this).closest('label').find('span').text();
			  if($(this).val()!=""){
			     $(this).closest('label').find('span').text(file);
			  } else {
			    $(this).closest('label').find('span').text(dflt);
			  }
			});
        });  // End of Document Ready
    </script>
</body>
</html>