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
    <section>
        <div class="db">
            <div class="container">
                <div class="row">
				<?php include("php_include/sidebar.php"); ?>

                    <div class="col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-md-4 db-sec-com">
                                <h2 class="db-tit">Plan details</h2>
                                <div class="db-pro-stat">
                                    <h6 class="tit-top-curv">Current plan</h6>
                                    <div class="db-plan-card">
                                        <img src="images/icon/plan.png" alt="">
                                    </div>
                                    <div class="db-plan-detil">
                                        <ul>
                                            <li>Plan name: <strong>Standard</strong></li>
                                            <li>Validity: <strong>6 Months</strong></li>
                                            <li>Valid till <strong>24 June 2024</strong></li>
                                            <li><a href="#" class="cta-3">Upgrade now</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 db-sec-com">
                                <h2 class="db-tit">All invoice</h2>
                                <div class="db-invoice">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Plan type</th>
                                            <th>Duration</th>
                                            <th>Cost</th>
                                            <th>Invoice</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Silver</td>
                                            <td>12 Months(May 2023 - June 2024)</td>
                                            <td>$500</td>
                                            <td><a href="#" class="cta-dark cta-sml" ><span>Download</span></a></td>
                                          </tr>
                                          <tr>
                                            <td>Gold</td>
                                            <td>6 Months(Aug 2021 - Jan 2022)</td>
                                            <td>$250</td>
                                            <td><a href="#" class="cta-dark cta-sml" ><span>Download</span></a></td>
                                          </tr>
                                          <tr>
                                            <td>Platinum</td>
                                            <td>6 Months(Jan 2021 - July 2021)</td>
                                            <td>$250</td>
                                            <td><a href="#" class="cta-dark cta-sml" ><span>Download</span></a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <div class="col-md-12 db-sec-com">
                                <div class="alert alert-warning db-plan-canc">
                                    <p><strong>Plan cancellation:</strong> <a href="#" data-bs-toggle="modal" data-bs-target="#plancancel">Click here</a> to cancell the current plan.</p>
                                </div>
                            </div>
                            <div class="col-md-12 db-sec-com">
                                <div class="alert alert-warning db-plan-canc db-plan-canc-app">
                                    <p>Your plan cancellation request has been successfully received by the admin. Once the admin approves your cancellation, the cost will be sent to you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
  <!-- INTEREST POPUP -->
    <div class="modal fade plncanl-pop" id="plancancel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title seninter-tit">Plan cancellation</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body seninter chosenini">
                    <div class="row">
                        <div class="col-md-6 lhs-poli">
                            <h5>Cancellation policy</h5>
                            <ul>
                                <li>Your refund amount calculated day basis</li>
                                <li>As per your plan, your perday cost:10$</li>
                                <li>After 3 months only you can able to join</li>
                                <li>Fair ipsum dummy content ipsum jenuane ai</li>
                                <li>Rairt ipsum dummy content ipsum jenuane ai</li>
                            </ul>
                        </div>
                        <div class="col-md-6 rhs-form">
                            <div class="form-login">
                                <form>
                                    <div class="form-group">
                                        <label class="lb">Reason for the cancellation: *</label>
                                        <select class="chosen-select">
                                            <option value="">I joint my pare</option>
                                            <option value="">Profile match not good</option>
                                            <option value="">Support not good</option>
                                            <option value="">My reason not in the list</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Message: *</label>
                                        <textarea placeholder="Enter your message" class="form-control" id="" cols="20" rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                      <th>Plan type</th>
                                      <th>Duration</th>
                                      <th>Cost paid</th>
                                      <th>Perday cost</th>
                                      <th>Plan active days</th>
                                      <th>Remaining days</th>
                                      <th>Cancellation charges</th>
                                      <th>Cost saved</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                  <tr>
                                    <td>Platinum</td>
                                    <td>365 days(12 months)</td>
                                    <td>$1000</td>
                                    <td>$2.73</td>
                                    <td>190 days</td>
                                    <td>175 days</td>
                                    <td>$100</td>
                                    <td>$377.75</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END INTEREST POPUP -->

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


<!-- Mirrored from rn53themes.net/themes/matrimo/user-plan.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2024 04:11:27 GMT -->
</html>