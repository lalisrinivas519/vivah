<!doctype html>
<html lang="en">
  <head>
<title>Login</title>
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
                           <h2>Now <b>Find <br> your life partner</b> Easy and fast.</h2>
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
                              <h1>Login Here </h1>
                           </div>
                           <div class="form-login">
                              <form method="POST" action="login_process.php">
                                 <div class="form-group">
                                    <label class="lb">User ID:</label>
                                    <input type="text" class="form-control" id="userid"
                                       placeholder="Enter User ID" name="userid">
                                 </div>
                                 <div class="form-group">
                                    <label class="lb">Password:</label>
                                    <input type="password" class="form-control" id="pwd"
                                       placeholder="Enter password" name="password">
                                 </div>
                                 <div class="form-group form-check">
                                    <p><a href="forgot_password.php" style="color:red;">Forgot Password?</a></p>
                                 </div>
                                 <button type="submit" name="submit"class="btn btn-primary">Submit</button>
                                 <hr>
                                 <p>Not a member? <a href="register.php" style="color:green;">Register now</a></p>
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