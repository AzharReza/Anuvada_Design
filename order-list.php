    <?php include "includes/head.php";?>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="body-child">
        <?php include "includes/navbar.php";?>
            <div class="content pb-0 order-list-content">
                <div class="row order-list-row">
                   <div class="col-sm-6">
                       <h4 class="box-title">Orders </h4>
                       <p>Here is your order list data</p>
                   </div>
                   <div class="offset-sm-2 col-sm-2">
                       <div class="input-group">
                          <div class="input-group-prepend">
                             <span class="input-group-text"><i class="fa fa-bolt"></i></span>
                          </div>
                          <select name="" class="form-control">
                            <option>All Status</option>
                          </select>
                       </div>
                   </div>
                   <div class="col-sm-2">
                      <div class="input-group">
                          <div class="input-group-prepend">
                             <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                          </div>
                          <select name="" class="form-control">
                            <option>Today</option>
                          </select>
                      </div>
                   </div>
                </div>
                

                <table class="table table-borderless table-order bg-white">
                   <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Description</th>
                        <th>Customer Name</th>
                        <th>Location</th>
                        <th>Amount</th>
                        <th colspan="2">Status Order</th>
                      </tr>
                   </thead>
                   <tbody>
                     <tr>
                      <td>#132093</td>
                      <td>Birth Certificate Registration</td>
                      <td>James Winsky</td>
                      <td>London</td>
                      <td>$12392</td>
                      <td><span class="text-warning">New Order</span></td>
                      <td class="td-dropdown"><button class="btn btn-dash" type="button">...</button>
                          <div class="dropdown-menu">
                             <a href="my-order.php">View Detail</a>
                             <a href="#">Download Invoice</a>
                             <a href="#">Cancel Order</a>
                          </div>
                      </td>
                     </tr>
                     <tr>
                      <td>#132093</td>
                      <td>Birth Certificate Registration</td>
                      <td>James Winsky</td>
                      <td>London</td>
                      <td>$12392</td>
                      <td><span class="text-primary">On Delivery</span></td>
                      <td><button class="btn btn-dash">...</button></td>
                     </tr>
                     <tr>
                      <td>#132093</td>
                      <td>Birth Certificate Registration</td>
                      <td>James Winsky</td>
                      <td>London</td>
                      <td>$12392</td>
                      <td><span class="text-success">Delivered</span></td>
                      <td><button class="btn btn-dash">...</button></td>
                     </tr>
                     <tr>
                      <td>#132093</td>
                      <td>Birth Certificate Registration</td>
                      <td>James Winsky</td>
                      <td>London</td>
                      <td>$12392</td>
                      <td><span class="text-danger">Returned</span></td>
                      <td><button class="btn btn-dash">...</button></td>
                     </tr>
                     <tr>
                      <td>#132093</td>
                      <td>Birth Certificate Registration</td>
                      <td>James Winsky</td>
                      <td>London</td>
                      <td>$12392</td>
                      <td><span class="text-warning">Pending</span></td>
                      <td><button class="btn btn-dash">...</button></td>
                     </tr>
                   </tbody>

                </table>

                <div class="row">
                   <div class="col-md-10 row mx-auto">
                       <div class="col-md-8">
                           <table class="table table-bordered bg-white">
                              <thead>
                                <tr>
                                  <th>Project</th>
                                  <th>Task</th>
                                  <th>Status</th>
                                  <th>Completion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                 <td>Interpretation</td>
                                 <td>1</td>
                                 <td><span class="text-success">Completed</span></td>
                                 <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-success" style="width:100%">100%</div>
                                    </div>
                                 </td>
                                </tr>
                                <tr>
                                 <td>Interpretation</td>
                                 <td>2</td>
                                 <td><span class="text-warning">Pending</span></td>
                                 <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-warning" style="width:50%">50%</div>
                                    </div>
                                 </td>
                                </tr>
                                <tr>
                                 <td>Interpretation</td>
                                 <td>3</td>
                                 <td><span class="text-danger">Delayed</span></td>
                                 <td>
                                    <div class="progress">
                                      <div class="progress-bar bg-danger" style="width:70%">70%</div>
                                    </div>
                                 </td>
                                </tr>
                              </tbody>
                           </table>
                       </div>
                       <div class="col-md-4">
                           <div class="order-type bg-white">
                               <div class="top-head p-2 d-flex align-items-center justify-content-between">
                                  <h5>Completed Order</h5>
                                  <p class="mb-0"><i class="fa fa-refresh pr-2"></i> <i class="fa fa-ellipsis-v"></i></p>
                               </div>
                               <table class="table table-borderless table-files">
                                   <tr>
                                      <td><img src="images/icon-01.png"  alt="illustrator-icon"> icon-layout.png</td>
                                      <td><img src="images/icon-03.png" alt=icons> default.psd</td>
                                   </tr>
                                   <tr>
                                      <td><img src="images/icon-02.png"  alt="illustrator-icon"> Timesheet.xls</td>
                                      <td><img src="images/icon-03.png" alt=icons> default.psd</td>
                                   </tr>
                                   <tr>
                                      <td><img src="images/icon-01.png"  alt="illustrator-icon"> icon-layout.png</td>
                                      <td><img src="images/icon-03.png" alt=icons> default.psd</td>
                                   </tr>
                               </table>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-10 d-flex justify-content-center bottom-pagination">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fa fa-angle-double-left"></i> Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next <i class="fa fa-angle-double-right"></i></a>
                        </li>
                      </ul>
                   </div>
                </div>

                <div class="clearfix"></div>
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
    <script>
        jQuery(document).ready(function ($) {
           $(".btn-toggle").click(function(){
               var current = $(this);
               $(".btn-toggle").not(current).removeClass("active");
               $(".popup-box .dropdown-menu").hide();
               if($(this).hasClass("active")){
                  $(this).removeClass("active");
                  $(this).next(".dropdown-menu").hide();
               }else{
                  $(this).addClass("active");
                  $(this).next(".dropdown-menu").show();
               }
            });
            $(".td-dropdown button").click(function(){
                 $(this).next(".dropdown-menu").toggle();
             });
        });  // End of Document Ready
    </script>
</body>
</html>
