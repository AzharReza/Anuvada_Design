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
                	<div class="lang-popup">
                		<!-- Button to Open the Modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#langModal">
						  Open modal
						</button>

						<!-- The Modal -->
						<div class="modal" id="langModal">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">

						      <!-- Modal Header -->
						      <div class="modal-header">
						      	 <button type="button" class="close" data-dismiss="modal">&times;</button>
						      	<div class="d-flex align-items-center justify-content-between">
						      		<h4 class="modal-title">Choose Source Language</h4>
						      		<div class="inline-button">
						      			<button class="btn btn-warning">CLEAR</button>
						      			<button class="btn btn-success">APPLY</button>
						      		</div>
						      	</div>
						        
						       
						      </div>

						      <!-- Modal body -->
						      <div class="modal-body">
						         <div class="top-lang">
						         	<h4 class="text-info">MY TOP 12 LANGUAGE</h4>
						         	<div class="lang-outer">
						         		<div class="lang-item">
						         			<img src="" alt="">
						         		</div>
						         	</div>
						         </div>
						      </div>

						      <!-- Modal footer -->
						      <div class="modal-footer">
						        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						      </div>

						    </div>
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
    
    </body>
</html>