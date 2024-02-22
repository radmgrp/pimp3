<?php
/*
Template Name:accaunt-preferense

*/


get_header(); ?>
   <section class="dashboard__body mt__30 pb-60"> 
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                    <div class="dashboard__side__bar">
                         
                        <ul class="account__menu">
                             <?php get_template_part('template-parts/menu','left'); ?>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8">
                    <div class="dashboard__body__wrap">
                        <h3 class="account__head mb__30">
                            Contact Preferences
                        </h3>
                        <div class="contact__preference__wrap bgbox">
                            <div class="preference__items">
                                <div class="preference__left">
                                    <h5>
                                        Contact Preferences
                                    </h5>
                                    <h6>
                                        Rivalry Bonus Club
                                    </h6>
                                    <p>
                                        I want to get promos to earn free money and hear about cool new features
                                    </p>
                                </div>
                                <div class="preference__right">
                                    <div class="perfer__check">
                                        <input class="form-check-input" type="checkbox" id="fre1s">
                                        <label class="form-check-label" for="fre1s">
                                          SMS
                                        </label>
                                    </div>
                                    <div class="perfer__check">
                                        <input class="form-check-input" type="checkbox" id="fre2e">
                                        <label class="form-check-label" for="fre2e">
                                          Email
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="preference__items">
                                <div class="preference__left">
                                    <h6>
                                        Victory!
                                    </h6>
                                    <p>
                                        Tell me when my picks win so I can count my winnings and gloat.
                                    </p>
                                </div>
                                <div class="preference__right">
                                    <div class="perfer__check">
                                        <input class="form-check-input" type="checkbox" id="fre3e">
                                        <label class="form-check-label" for="fre3e">
                                          Email
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="preference__items">
                                <div class="preference__left">
                                    <h6>
                                        Regional Announcements
                                    </h6>
                                    <p>
                                        Notify me when SportOdds betting and other games become available in my region.
                                    </p>
                                </div>
                                <div class="preference__right">
                                    <div class="perfer__check">
                                        <input class="form-check-input" type="checkbox" id="fre4e">
                                        <label class="form-check-label" for="fre4e">
                                          Email
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="save__btn mt-4 d-flex justify-content-end">
                                <a href="#0" class="cmn--btn">
                                    <span>Save</span>
                                </a>
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