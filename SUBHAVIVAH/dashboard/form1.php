<!doctype html>
<html lang="en">
<?php include("php_include/head.php"); ?>
<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="plod">
            <span class="lod1"><img src="images/loder/1.png" alt="" loading="lazy"></span>
            <span class="lod2"><img src="images/loder/2.png" alt="" loading="lazy"></span>
            <span class="lod3"><img src="images/loder/3.png" alt="" loading="lazy"></span>
        </div>
    </div>
    <div class="pop-bg"></div>
    <!-- END PRELOADER -->

    <!-- SEARCH -->
    <div class="pop-search">
        <span class="ser-clo">+</span>
        <div class="inn">
            <form>
                <input type="text" placeholder="Search here...">
            </form>
            <div class="rel-sear">
                <h4>Top searches:</h4>
                <a href="all-profiles.html">Browse all profiles</a>
                <a href="all-profiles.html">Mens profile</a>
                <a href="all-profiles.html">Female profile</a>
                <a href="all-profiles.html">New profiles</a>
            </div>
        </div>
    </div>
    <!-- END PRELOADER -->
<?php include("php_include/header.php"); ?>

    <!-- LOGIN -->
   <!-- REGISTER -->
    <section>
        <div class="login pro-edit-update">
            <div class="container">
                <div class="row">
                    <div class="inn">
                        <div class="rhs">
                                <div class="form-login">
								<form method="POST">
                                        <!--PROFILE BIO-->
                                        <div class="edit-pro">
                                            <div class="form-tit">
                                                <h4>Personal Information</h4>
                                            </div>
											<div class="form-group">
                                                <label class="lb">Date of Birth:</label>
                                                <input type="date" class="form-control" id="dob"
                                                    placeholder="Enter Date of Birth" name="dob" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Age:</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Age" 
                                                    name="Age" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Height:</label>
                                                <input type="text" class="form-control" id="height"
                                                    placeholder="Enter Height" name="height" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="lb">Mother Tongue:</label>
                                                <input type="text" class="form-control" id="mother_tongue"
                                                    placeholder="Enter Mother Tongue" name="mother_tongue" required>
                                            </div>
											<div class="form-group">
                                                <label class="lb">Hobbies and Interst:</label>
                                                <textarea type="text" class="form-control" id="hobbies"
                                                    placeholder="Enter Your Hobbies and Interst " name="hobbies"></textarea>
                                            </div>
                                        <button type="submit" class="btn btn-primary" style="width: 20%; text-align: left; float: right;">
											<a href="form2.php" style="color:white;">Next</a>
										</button>
										</div>
                                        <!--END PROFILE BIO-->


                                    </form>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- END -->

    <!-- FOOTER -->
    <?php include("php_include/footer.php"); ?>
	<!-- END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/select-opt.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/custom.js"></script>
    <script>
         //COMMON SLIDER
    $('.slider').slick({
        infinite: false,
        slidesToShow: 5,
        arrows: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: false
            }
        }]

    });

    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

var xValues = "0";
    var yValues = "50";

    new Chart("Chart_leads", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "#f1bb51",
                borderColor: "#fae9c8",
                data: yValues
            }]
        },
        options: {
            responsive: true,
            legend: {display: false},
            scales: {
                yAxes: [{ticks: {min: 0, max: 100}}]
            }
        }
    });
    </script>
</body>


</html>