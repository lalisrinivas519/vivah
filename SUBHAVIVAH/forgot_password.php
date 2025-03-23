<!doctype html>
<html lang="en">
   <head>
<title>Forgot Password</title>
   <?php include("php_include/head.php")?>
   </head>
   <body>
      <!-- PRELOADER -->
      <?php include("php_include/preloader.php")?>
      <div class="pop-bg"></div>
      <!-- END PRELOADER -->
      <?php include("php_include/header.php")?>
      <!-- LOGIN -->
      <section>
         <div class="login">
            <div class="container">
               <div class="row">
                  <div class="inn">
                     <div class="lhs">
                        <div class="tit">
                           <h2>Find <b>your <br> perfect partner with</b> ease and speed.</h2>
                        </div>
                        <div class="im">
                           <img src="images/login-couple.png" alt="">
                        </div>
                        <div class="log-bg">&nbsp;</div>
                     </div>
                     <div class="rhs">
                        <div>
                           <div class="form-tit">
                              <h4>Start for free</h4>
                              <h1>Forgot Password?  </h1>
                           </div>
                           <div class="form-login">
                              <form method="POST" action="forgot_process.php">
                                 <div class="form-group">
                                    <label class="lb">User ID:</label>
                                    <input type="text" class="form-control" id="userid"
                                       placeholder="Enter User ID" name="userid">
                                 </div>
                                 <div class="form-group">
                                    <label class="lb">New Password:</label>
                                    <input type="password" class="form-control" id="new"
                                       placeholder="Enter password" name="new">
                                 </div>
                                 <div class="form-group">
                                    <label class="lb">Confirm Password:</label>
                                    <input type="password" class="form-control" id="confirm"
                                       placeholder="Enter confirm password" name="confirm">
                                 </div>
                                 <button type="submit" name="submit"class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="wed-hom-footer">
         <div class="container">
            <div class="row foot-supp">
               <h2><span>Free support:</span> +92 (8800) 68 - 8960 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                  info@example.com
               </h2>
            </div>
         </div>
      </section>
      <!-- END -->
      <!-- FOOTER -->
      <!-- END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/select-opt.js"></script>
      <script src="js/slick.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>