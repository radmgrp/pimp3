<?php
/*
Template Name:bonusses

*/


get_header(); ?>
     <section class="dashboard__body mt__30 pb-60"> 
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                    <div class="dashboard__side__bar">
                        <ul class="account__menu">
                             
                             <?php get_template_part( 'template-parts/menu', 'left' ); ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8">
                    <div class="dashboard__body__wrap">
                        <h3 class="account__head mb__30">
                            Bonuses
                        </h3>
                    </div>
                    <div class="bonuses__wrap">
                        <h4 class="bonus">
                            Sports bets
                        </h4>
                        <div class="row mb-4 g-4">
                            <div class="col-xxl-6 col-xl-6 col-lg-12">
                                <div class="promomy__items bonus__last__items">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/bonus1.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            2022 Winter bonus 3
                                        </h4>
                                        <span class="smalltext">
                                            Use code at deposit
                                        </span>
                                        <a href="#0" class="cmn--btn">
                                           <span>
                                                WELCOME100
                                           </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-12">
                                <div class="promomy__items bonus__last__items">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/bonus2.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Betting Welcome 
                                            Bonus
                                        </h4>
                                        <a href="#0" class="cmn--btn">
                                           <span>
                                                WELCOME100
                                           </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="bonus">
                            Sports bets
                        </h4>
                        <div class="row g-4">
                            <div class="col-xxl-6 col-xl-6 col-lg-12">
                                <div class="promomy__items bonus__last__items">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/bonus3.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Christmas Bonus
                                        </h4>
                                        <span class="smalltext">
                                            Use code at deposit
                                        </span>
                                        <a href="#0" class="cmn--btn">
                                           <span>
                                                WELCOME100
                                           </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-12">
                                <div class="promomy__items bonus__last__items">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/bonus4.jpg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h4>
                                            Welcome Casino 
                                            Bonus   
                                        </h4>
                                        <a href="#0" class="cmn--btn">
                                           <span>
                                                WELCOME100
                                           </span>
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