<div class="col-md-4 col-lg-3" style="display: none;">
    <div class="db-nav">
        <div class="db-nav-pro"><img src="images/profiles/12.jpg" class="img-fluid" alt=""></div>
        <div class="db-nav-list">
            <ul>
                <li class="smenu-pare">
                    <a href="#" class="act" id="dashboard-toggle"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
                    <div class="smenu-single" style="display: none;">
                        <ul>
                            <li><a href="dashboard-overview.html">Overview</a></li>
                            <li><a href="dashboard-statistics.html">Statistics</a></li>
                            <li><a href="dashboard-settings.html">Settings</a></li>
                            <li><a href="dashboard-reports.html">Reports</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="profile.php"><i class="fa fa-male" aria-hidden="true"></i>Profile</a></li>
                <li><a href="matches.php"><i class="fa fa-handshake-o" aria-hidden="true"></i>Matches</a></li>
                <li><a href="interest.php"><i class="fa fa-commenting-o" aria-hidden="true"></i>Interest</a></li>
                <li><a href="chat_list.php"><i class="fa fa-money" aria-hidden="true"></i>Chat</a></li>
                <li><a href="my_plan.php"><i class="fa fa-cog" aria-hidden="true"></i>My Plan</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
            </ul>
        </div>
    </div>
</div>
<style>
@media (min-width: 992px) {
    .col-md-4.col-lg-3 {
        display: block !important;
    }
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#dashboard-toggle').on('click', function(e) {
        e.preventDefault(); // Prevent default anchor click behavior
        $(this).siblings('.smenu-single').toggle(); // Toggle the submenu
    });
});
</script>