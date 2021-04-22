    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "includes/navbar.php";?>
        <div class="content pb-0">

            <div class="services-section">
            	<div class="top-head">
            		<h5 class="color-red">Categories</h5>
            		<button type="button" class="btn icon"  data-toggle="modal" data-target="#serviceModal">
            			<i class="fa fa-plus"></i>
            		</button>

            		<!-- Services Modal -->
					<div class="modal serviceModal" id="serviceModal">
					  <div class="modal-dialog modal-lg modal-dialog-centered">
					    <div class="modal-content">

					      <!-- Modal Header -->
					      <div class="modal-header">
					        <h5 class="modal-title">Add Services List</h5>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>

					      <!-- Modal body -->
					      <div class="modal-body">
					      	<form action="#">
					      		<div class="row">
						        	<div class="col-md-3 image-column">
						        		<label for="uploadProduct" class="labelUpload">
						        			<img src="images/image.png" alt="upload-image">
						        		</label>
						        		<a href="#" class="product-link">Add Product Image</a>
						        		<input type="file" id="uploadProduct">
						        	</div>
						        	<div class="col-md-9 form-column">
						        		<div class="form-group row">
						        			<label for="" class="col-sm-3">Product Name</label>
						        			<input type="text" class="col-sm-9 form-control" placeholder="Product Name">
						        		</div>
						        		<div class="form-group row">
						        			<label for="" class="col-sm-3">Product Price</label>
						        			<input type="text" class="form-control col-sm-9" placeholder="Product Price">
						        		</div>
						        		<div class="form-group row">
						        			<label for="" class="col-sm-3">Product Category</label>
						        			<select name="" id="" class="form-control col-sm-9" placeholder="Product Category">
						        				<option value="">Category</option>
						        				<option value="">Category 1</option>
						        				<option value="">Category 2</option>
						        			</select>
						        		</div>
						        		<div class="form-group row">
						        			<label for="" class="col-sm-3">Product Details</label>
						        			<textarea name="" id="" class="col-sm-9 form-control" rows="5" placeholder="Product Details"></textarea>
						        		</div>
						        	</div>
						        </div>
						        <div class="form-footer mt-2">
						        	<button type="button" class="btn btn-danger btn-bottom">Menu Upload</button>
						        </div>
					      	</form>
					      </div>

					      <!-- Modal footer -->
					      <!-- <div class="modal-footer">
					        
					      </div>
 -->
					    </div>
					  </div>
					</div>
            	</div>
               
                <!-- Service Grid Start -->
            	<div class="outer-box">
            	   <div class="service-grid row">
            	   	  <div class="col-lg-6 col-xl-4">
            	   	  	   <div class="grid-item">
            	   	  	   	   <div class="row">
            	   	  	   	   	  <div class="col-12 column-right">
	        	   	  	   	    		<button class="button-grid btn mr-2">
			            				  <i class="fa fa-th-list"></i>
			            			    </button>
				            			<div class="serv-right">
				            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
				            			</div>
				            		</div>
            	   	  	   	   </div>
		            	   	    <div class="row">
		            	   	    	<div class="col-4">
				            			<div class="column-first">
				            				<div class="grey-circle"></div>
				            			</div>
				            		</div>
				            		<div class="col-8 column-left">
				            			<h5>Legal</h5>
				            			<p>A small river named Dunden flows place.A small river named Dunden flows place.A small river named Dunden flows place.A small river named Dunden flows place.</p>
				            			<h5 class="color-red">$25.00</h5>
				            		</div>
		            	   	    </div>
			            	</div>
            	   	  </div>

            	   	  <div class="col-lg-6 col-xl-4">
            	   	  	   <div class="grid-item">
            	   	  	   	    <div class="row">
            	   	  	   	    	<div class="col-12 column-right">
			            	   	    	<button class="button-grid btn mr-2">
			            				  <i class="fa fa-th-list"></i>
			            			    </button>
				            			<div class="serv-right">
				            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
				            			</div>
				            		</div>
            	   	  	   	    </div>
            	   	  	   	    <div class="row">
            	   	  	   	    	<div class="col-4">
				            			<div class="column-first">
				            				<div class="grey-circle"></div>
				            			</div>
				            		</div>
				            		<div class="col-8 column-left">
				            			<h5>Finance</h5>
				            			<p>A small river named Dunden flows place</p>
				            			<h5 class="color-red">$25.00</h5>
				            		</div>
            	   	  	   	    </div>
			            	</div>
            	   	  </div>

            	   	  <div class="col-lg-6 col-xl-4">
            	   	  	   <div class="grid-item">
            	   	  	   	   <div class="row">
			            	   	    <div class="col-12 column-right">
				            			<div class="serv-right">
				            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
				            			</div>
				            		</div>
				            	</div>
				            	<div class="row">
				            		<div class="col-4">
				            			<div class="column-first">
				            				<div class="grey-circle"></div>
				            			</div>
				            		</div>
				            		<div class="col-8 column-left">
				            			<h5>Legal</h5>
				            			<p>A small river named Dunden flows place</p>
				            			<h5 class="color-red">$25.00</h5>
				            		</div>
				            	</div>
            	   	  	   </div>
            	   	  </div>
            	   </div>
            	   
            	   <!-- Service Grid End -->

                   <!-- Service List Start -->
            	   <div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Legal</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list list-active row">
	            		<div class="col-8 column-left">
	            			<h5>Finance</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<button class="button-grid btn mr-2">
	            				  <i class="fa fa-th-large"></i>
	            			    </button>
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Marketing</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Finance</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Interpretation</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Legal</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Legal</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="service-list row">
	            		<div class="col-8 column-left">
	            			<h5>Legal</h5>
	            			<p>A small river named Dunden flows by their place and supplies</p>
	            		</div>
	            		<div class="col-4 column-right">
	            			<div class="serv-right">
	            				<h5 class="color-red">$25.00</h5>
	            				<h5 class="icon-list"><i class="fa fa-ellipsis-v"></i></h5>
	            			</div>
	            		</div>
	            	</div>	
	            	<!-- Service List End -->
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

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
       jQuery(document).ready(function($){
       	 $(".button-grid").click(function(){
       	 	  if($(this).find("i").hasClass("fa-th-large")){
       	 	  	$(".outer-box .service-grid").css("display","flex");
	       	    $(".outer-box>.service-list").css("display","none");
       	 	  }
       	 	  else{
       	 	  	$(".outer-box .service-grid").css("display","none");
	       	    $(".outer-box>.service-list").css("display","flex");
       	 	  }
	       });

       	   $(".service-list.list-active").click(function(){
       	 	  if($(this).find("i").hasClass("fa-th-large")){
       	 	  	$(".outer-box .service-grid").css("display","flex");
	       	    $(".outer-box>.service-list").css("display","none");
       	 	  }
       	    });
       });
       
    </script>
</body>
</html>
