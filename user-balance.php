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
            					<div class="user-balance">
                                    <div class="balance-header">
                                        <h5>Balance: <span class="text-warning">0</span> Credits</h5>
                                        <button class="btn btn-primary mt-2">Buy More Credits</button>
                                    </div>
                                    <div class="balance-body">
                                        <h5>Add Words to your account </h5>
                                        <table class="table table-striped mt-2">
                                            <tr>
                                                <th>Amount</th>
                                                <th>Price</th>
                                                <th>Cost Per Word</th>
                                                <th>Payment Method</th>
                                            </tr>
                                            <tr>
                                                <td>1000 General Words</td>
                                                <td>$84.45</td>
                                                <td>$84.45</td>
                                                <td>
                                                    <img src="images/master-card.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/express.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/visa-card.jpg" width="30px" height="20px" alt="master-card">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1000 General Words</td>
                                                <td>$84.45</td>
                                                <td>$84.45</td>
                                                <td>
                                                    <img src="images/master-card.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/express.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/visa-card.jpg" width="30px" height="20px" alt="master-card">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1000 General Words</td>
                                                <td>$84.45</td>
                                                <td>$84.45</td>
                                                <td>
                                                    <img src="images/master-card.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/express.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/visa-card.jpg" width="30px" height="20px" alt="master-card">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1000 General Words</td>
                                                <td>$84.45</td>
                                                <td>$84.45</td>
                                                <td>
                                                    <img src="images/master-card.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/express.jpg" width="30px" height="20px" alt="master-card">
                                                    <img src="images/visa-card.jpg" width="30px" height="20px" alt="master-card">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="balance-footer">
                                        <h5>My Tools</h5>
                                        <div class="card mt-3">
                                            <div class="card-header">
                                                <h4>Voucher</h4>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="text-primary mb-2">Redeem Voucher</h5>
                                                <div class="form-group">
                                                    <label>Enter your voucher code here</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <button class="btn btn-warning">Apply</button>
                                            </div>
                                        </div>
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
    <script>
        jQuery(document).ready(function ($) {
           
        });  // End of Document Ready
    </script>
</body>
</html>