<?php
/*
Template Name:dashboard

*/


get_header(); ?>
   <section class="dashboard__body mt__30 pb-60"> 
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                    <div class="dashboard__side__bar">
                        <ul class="account__menu">
                            <?php if ( has_nav_menu( 'left' ) ) : ?>
                             <?php get_template_part( 'template-parts/menu', 'left' ); ?>
                            <?php endif; ?>
                           
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8">
                    <div class="dashboard__body__wrap">
                        <h3 class="account__head mb__30">
                            Account Settings
                        </h3>
                        <div class="row g-4">
                            <div class="col-xl-4">
                                <div class="user__box">
                                    <div class="img__change">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/profile.png" alt="profile">
                                        <div class="icons" id="profile-picture">
                                            <i class="fas fa-pen"></i>
                                        </div>
                                    </div>
                                    <div class="user__content">
                                        <h5 class="usertext__one">strdxc321</h5>
                                        <h6 class="usertext__two">UUID:</h6>
                                        <a href="#0" class="link">
                                            ffbe99f2-7f4b-11ed-9e24-3ee8038fe302
                                        </a>
                                    </div>
                                    <div class="reset__wrap">
                                        <a href="#0" class="reset">
                                            Reset Password
                                        </a>
                                        <a href="#0" class="change">
                                            Change Gamertag
                                        </a>
                                    </div>
                                    <div class="user__dated">
                                        <span class="date">Joined December 19th, 2022</span>
                                        <a href="#0" class="lastlogin">
                                            Last Login on
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="account__body">
                                    <div class="account__strength__box mb__30">
                                        <div class="strength__box">
                                            <div class="circle__box">
                                                <div class="circle">
                                                    <div class="box">
                                                        <h3 class="text">
                                                            70%
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>
                                                Account Strength
                                            </h5>
                                        </div>
                                        <div class="strength__content">
                                            <div class="items">
                                                <input class="form-check-input" type="checkbox" id="stre1c" checked>
                                                <label class="form-check-label" for="stre1c">
                                                    Create account
                                                </label>
                                            </div>
                                            <div class="items">
                                                <input class="form-check-input" type="checkbox" id="stre2" checked>
                                                <label class="form-check-label" for="stre2">
                                                    Complete Account
                                                </label>
                                            </div>
                                            <div class="items">
                                                <input class="form-check-input" type="checkbox" id="stre3" checked>
                                                <label class="form-check-label" for="stre3">
                                                    Verify Identity
                                                </label>
                                            </div>
                                            <div class="items">
                                               <span class="icons">
                                                <i class="icon-deposit"></i>
                                               </span>
                                               <span>
                                                Made a Deposit
                                               </span>
                                            </div>
                                            <div class="items">
                                                <span class="icons">
                                                <i class="icon-user"></i>
                                                </span>
                                                <span>
                                                Upload Avatar
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account__email mb__30">
                                        <h5>
                                            Account Emails
                                        </h5>
                                        <span class="subtitle">
                                            Primary Emails
                                        </span>
                                        <div class="form__wrap">
                                            <form action="#">
                                                <input type="text" placeholder="fixad56534@paxven.com">
                                                <i class="icon-lock"></i>
                                            </form>
                                            <div class="check__items">
                                                <input class="form-check-input" type="checkbox" id="stre1" checked>
                                                <label class="form-check-label" for="stre1">
                                                   Verified
                                                </label>
                                            </div>
                                        </div>
                                        <a href="#0" class="add__email">
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/plus.png" alt="icon"></span>
                                            <span>
                                                Add email
                                            </span>
                                        </a>
                                    </div>
                                    <div class="account__email enroll__box mb__30">
                                        <h5>
                                            Multi_factor Authentication
                                        </h5>
                                        <p>
                                            Add an Extra Layer of security to your SportOdds account when logging in with Email/Passsword. A verrification code will be sent to your email each time you loin to secrely protect your account.
                                        </p>
                                        <a href="#0" class="cmn--btn">
                                            <span>Enroll</span>
                                        </a>
                                    </div>
                                    <div class="account__email language__box mb__30">
                                        <h5>
                                            Language
                                        </h5>
                                        <span class="slanguage">Select Language</span>
                                        <div class="language__wrap">
                                            <select name="#" id="#id">
                                                <option value="1">
                                                    English
                                                </option>
                                                <option value="2">
                                                    Turki
                                                </option>
                                                <option value="3">
                                                    Spanish
                                                </option>
                                            </select>
                                            <a href="#0" class="cmn--btn">
                                                <span>Save</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="account__email social__box mb__30">
                                        <h5>
                                            Social Accounts
                                        </h5>
                                        <span class="slanguage">Connect your accounts for faster login.</span>
                                        <div class="social__wrap">
                                           <div class="social__left">
                                                <a href="#0">
                                                    <span>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/goggle.png" alt="icon">
                                                    </span>
                                                    <span>
                                                        Connect Google
                                                    </span>
                                                </a>
                                                <a href="#0">
                                                    <span>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/steam.png" alt="icon">
                                                    </span>
                                                    <span>
                                                        Connect steam
                                                    </span>
                                                </a>
                                                <a href="#0">
                                                    <span>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/twitter.png" alt="icon">
                                                    </span>
                                                    <span>
                                                        Connect Twitter
                                                    </span>
                                                </a>
                                           </div>
                                           <div class="social__left">
                                            <a href="#0">
                                                <span>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/facebook.png" alt="icon">
                                                </span>
                                                <span>
                                                    Connect facebook
                                                </span>
                                            </a>
                                            <a href="#0">
                                                <span>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/twitch.png" alt="icon">
                                                </span>
                                                <span>
                                                    Connect twitch
                                                </span>
                                            </a>
                                            <a href="#0">
                                                <span>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/vkonta.png" alt="icon">
                                                </span>
                                                <span>
                                                    Connect vkontakte
                                                </span>
                                            </a>
                                       </div>
                                        </div>
                                    </div>
                                    <div class="account__email enroll__box">
                                        <h5>
                                            Archive Account
                                        </h5>
                                        <p>
                                            Want to temporarily close your account?
                                        </p>
                                        <a href="#0" class="cmn--btn">
                                            <span>Archive Account</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer Bottom Menu-->
        <ul class="footer__menu d-lg-none">
            <li>
                <a href="sportsbetting.html" class="d-grid justify-content-center">
                   <span><i class="fas fa-table-tennis"></i></span>
                    <span class="texta">Sports</span>
                </a>
            </li>
            <li>
                <a href="#0" class="d-grid justify-content-center" data-bs-toggle="modal" data-bs-target="#eventsp">
                   <span><i class="fa-solid fa-gift"></i></span>
                    <span class="texta">Events</span>
                </a>
            </li>
            <li class="header-bartwo d-lg-none">
                <span class="bars"><i class="fas fa-bars"></i></span>
                <span class="cros"> <i class="fa-solid fa-xmark"></i></span>
            </li> 
            <li>
                <a href="#0" class="d-grid justify-content-center" data-bs-toggle="modal" data-bs-target="#betsp">
                   <span> <i class="fas fa-ticket-alt"></i></span>
                    <span class="texta">My Bet</span>
                </a>
            </li>
            <li>
                <a href="dashboard.html" class="d-grid justify-content-center">
                   <span> <i class="far fa-user-circle"></i></span>
                    <span class="texta"> Account</span>
                </a>
            </li>
        </ul>
        <!--footer Bottom Menu-->
    </section>

<?php
get_footer();