<!-- HEADER & MENU -->
    <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <!-- LOGO -->
                    <div class="logo">
                        
                        <a href="index.html" class="logo-brand"><img src="images/logo-b.png" alt="" loading="lazy"
                                class="ic-logo"></a>
                    </div>

                     <!-- USER PROFILE -->
                    <div class="al">
                        <div class="head-pro">
                            <img src="images/profiles/1.jpg" alt="" loading="lazy">
                            <b>Advisor</b><br>
                            <h4>Ashley emyy</h4>
                            <span class="fclick"></span>
                        </div>
                    </div>

                    <!--MOBILE MENU-->
                    <div class="mob-menu">
                        <div class="mob-me-ic">
                            <span class="mobile-exprt" data-mob="dashbord">
                                <img src="images/profiles/1.jpg" alt="">
                            </span>
                            <span class="mobile-menu" data-mob="mobile">
                                <img src="images/icon/menu.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <!--END MOBILE MENU-->
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER & MENU -->

    <!-- MOBILE MENU POPUP -->
    <div class="mob-me-all mobile_menu">
    <div class="mob-me-clo"><img src="images/icon/close.svg" alt=""></div>
    <div class="mv-bus">
        <h4><i class="fa fa-globe" aria-hidden="true"></i> EXPLORE CATEGORY</h4>
        <ul style="list-style-type: none; padding: 0; margin: 0;">
            <li><a href="index.php" class="act" style="text-decoration: none; color: black;"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <li style="position: relative;">
                <a style="text-decoration: none; color: black; display: block; padding: 10px;">
                    <i class="fa fa-male" aria-hidden="true"></i> Profile
                </a>
                <ul style="display: none; position: absolute; background-color: white; box-shadow: 0px 8px 16px rgba(0,0,0,0.2); z-index: 1; padding: 0; margin: 0;">
                    <li style="display: block;">
                        <a href="edit_profile.php" style="padding: 12px 16px; text-decoration: none; color: black; display: block;">Edit Profile</a>
                    </li>
                    <li style="display: block;">
                        <a href="profile_settings.php" style="padding: 12px 16px; text-decoration: none; color: black; display: block;">Profile Settings</a>
                    </li>
                </ul>
            </li>
            <li><a href="matches.php" style="text-decoration: none; color: black;"><i class="fa fa-handshake-o" aria-hidden="true"></i> Matches</a></li>
            <li><a href="interest.php" style="text-decoration: none; color: black;"><i class="fa fa-money" aria-hidden="true"></i> Interest</a></li>
            <li><a href="chat_list.php" style="text-decoration: none; color: black;"><i class="fa fa-commenting-o" aria-hidden="true"></i> Chat</a></li>
            <li><a href="chat_reply.php" style="text-decoration: none; color: black;"><i class="fa fa-commenting-o" aria-hidden="true"></i> Chat Reply</a></li>
            <li><a href="my_plan.php" style="text-decoration: none; color: black;"><i class="fa fa-cog" aria-hidden="true"></i> My Plan</a></li>
            <li><a href="logout.php" style="text-decoration: none; color: black;"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
        </ul>
    </div>
</div>

<script>
    const profileLi = document.querySelector('.mv-bus ul li:nth-child(2)');
    const dropdown = profileLi.querySelector('ul');

    profileLi.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent event from bubbling up
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', () => {
        dropdown.style.display = 'none'; // Hide dropdown when clicking outside
    });
</script>

    <!-- END MOBILE MENU POPUP -->

    <!-- MOBILE USER PROFILE MENU POPUP -->
    <div class="mob-me-all dashbord_menu">
        <div class="mob-me-clo"><img src="images/icon/close.svg" alt=""></div>
        <div class="mv-bus">
            <div class="head-pro">
                <img src="images/profiles/1.jpg" alt="" loading="lazy">
                <b>user profile</b><br>
                <h4>Ashley emyy</h4>
            </div>
            <ul>
                <li><a href="login.html">Login</a></li>
                <li><a href="sign-up.html">Sign-up</a></li>
                <li><a href="plans.html">Pricing plans</a></li>
                <li><a href="all-profiles.html">Browse profiles</a></li>
            </ul>
        </div>
    </div>
	
	
	
	
     <div class="hom-top">
        <div class="container">
            <div class="row">
                <div class="hom-nav">
                    <!-- LOGO -->
                    <div class="logo">
                        <span class="menu desk-menu">
                            <i></i><i></i><i></i>
                        </span>
                        <a href="index.html" class="logo-brand"><img src="images/logo-b.png" alt="" loading="lazy"
                                class="ic-logo"></a>
                    </div>

                    <!-- EXPLORE MENU -->
                    <div class="bl">
                        <ul>
                            <li class="smenu-pare">
                                <span class=""></span>
                                <div class="smenu-open smenu-single">
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </li>
                         </ul>
                    </div>

                    <!-- USER PROFILE -->
                    <div class="al">
                        <div class="head-pro">
                            <img src="images/profiles/1.jpg" alt="" loading="lazy">
							<ul>
                            <li class="smenu-pare">
                                <span class="smenu">User Id</span>
                                <div class="smenu-open smenu-single">
                                    <ul>
                                        <li><a href="all-profiles.html">All profiles</a></li>
                                        <li><a href="profile-details.html">Profile details</a></li>
                                        <li><a href="wedding.html">Wedding</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-detail.html">Blog detail</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="photo-gallery.html">Photo gallery</a></li>
                                        <li><a href="photo-gallery-1.html">Photo gallery 1</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="sign-up.html">Sign-up</a></li>
                                        <li><a href="plans.html">Pricing plans</a></li>
                                    </ul>
                                </div>
                            </li>
                         </ul>
                        </div>
                    </div>

                    <!--MOBILE MENU-->
                    <div class="mob-menu">
                        <div class="mob-me-ic">
                            <span class="mobile-exprt" data-mob="dashbord">
                                <img src="images/icon/users.svg" alt="">
                            </span>
                            <span class="mobile-menu" data-mob="mobile">
                                <img src="images/icon/menu.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <!--END MOBILE MENU-->
                </div>
            </div>
        </div>
