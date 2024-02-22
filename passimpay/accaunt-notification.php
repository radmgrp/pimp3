<?php
/*
Template Name:notification

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
                            Notifications
                        </h3>
                        <div class="notification__wrap">
                            <h4>
                                Notifications
                            </h4>
                            <div class="notification__items">
                                <div class="left">
                                    <h5>
                                        Announcements
                                    </h5>
                                    <p>
                                        Occasional announcements of new features
                                    </p>
                                </div>
                                <div class="right form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="downs" checked>
                                </div>
                            </div>
                            <div class="notification__items">
                                <div class="left">
                                    <h5>
                                        Feedback requests
                                    </h5>
                                    <p>
                                        Occasional requests for feedback
                                    </p>
                                </div>
                                <div class="right form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="downs1" checked>
                                </div>
                            </div>
                            <div class="notification__items">
                                <div class="left">
                                    <h5>
                                        Billing and account
                                    </h5>
                                    <p>
                                        Transactional emails and account notifications
                                    </p>
                                </div>
                                <div class="right">
                                    <a href="#0">
                                        Legally obligated
                                    </a>
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