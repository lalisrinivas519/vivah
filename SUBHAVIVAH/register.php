<!doctype html>
<html lang="en">
<head>
<title>Register</title>
   <?php include("php_include/head.php")?>
   </head>
   <body>
      <!-- PRELOADER -->
      <?php include("php_include/preloader.php")?>
      <div class="pop-bg"></div>
      <!-- END PRELOADER -->
      <?php include("php_include/header.php")?>
      <!-- REGISTER -->
      <section>
         <div class="login">
            <div class="container">
               <div class="row">
                  <div class="inn">
                     <div class="lhs">
                        <div class="tit">
                           <h2>Connect <b>With <br> your Soulmate Swiftly</b> and Seamlessly.</h2>
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
                              <h1>Register Here</h1>
                           </div>
                           <div class="form-login">
                              <form method="POST" action="register_process.php">
                                 <div class="form-group">
                                    <label class="lb">User ID:</label>
                                    <input type="text" class="form-control" id="userid"
                                       placeholder="Enter User ID" name="userid">
                                 </div>
								 <div class="form-group">
                                    <label class="lb">User Name:</label>
                                    <input type="text" class="form-control" id="name"
                                       placeholder="Enter User Name" name="name">
                                 </div>
                                 <div class="form-group">
                                    <label class="lb">Mobile:</label>
                                    <input type="number" class="form-control" id="phone"
                                       placeholder="Enter Mobile number" name="mobile">
                                 </div>
                                 <div class="form-group">
                                    <label class="lb">Email:</label>
                                    <input type="email" class="form-control" id="email"
                                       placeholder="Enter email" name="email">
                                 </div>
                                 <div class="form-group">
                                    <label class="lb"> Password:</label>
                                    <input type="password" class="form-control" id="pwd"
                                       placeholder="Enter password" name="password">
                                 </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                 <hr>
                                 <p>Already a member ? <a href="login.php" style="color:red;">Login Here</a></p>
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