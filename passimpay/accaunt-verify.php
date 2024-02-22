<?php
/*
Template Name:accaunt-identity

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
                            Identity Details
                        </h3>
                        <div class="identity__details bgbox">
                            <h5 class="identity__title">
                                About You
                            </h5>
                            <div class="identity__left mb-5">
                                <form action="#">
                                    <div class="row g-2 mb-3">
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="name">First Name (Given Name)</label>
                                                <input type="text" id="name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="name2">Last Name (Surname / Family Name)</label>
                                                <input type="text" id="name2" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <label for="dob">Date Of Birth</label>
                                           <div class="row g-2">
                                            <div class="col-lg-4">
                                                <div class="form__box">
                                                <input type="text" id="dob" placeholder="XX">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__box">
                                                    <input type="text" placeholder="XX">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form__box">
                                                <input type="text" placeholder="XXXX">
                                                </div>
                                            </div>
                                           </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="dob">Phone Number</label>
                                            <div class="row g-2">
                                                <div class="col-lg-4">
                                                    <div class="form__box">
                                                        <input type="text" placeholder="+962">
                                                        </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form__box">
                                                        <input type="number" placeholder="XXXXXXXX">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h5 class="identity__title">
                                Address
                            </h5>
                            <div class="identity__left mb-3">
                                <form action="#">
                                    <div class="row g-3">
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="add1">Address</label>
                                                <input type="text" id="add1" placeholder="XXXXX">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="add2">Apt, Suite, etc</label>
                                                <input type="text" id="add2" placeholder="XXXXX">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="add3">City / Region</label>
                                                <input type="text" id="add3" placeholder="XXXXX">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="add4">Country</label>
                                                <input type="text" id="add4" placeholder="United Kingdom">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="add5">State / Province</label>
                                                <input type="text" id="add5" placeholder="XXXXX">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form__box">
                                                <label for="add6">Postal Code</label>
                                                <input type="text" id="add6" placeholder="XXXX">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="authorize__wrap">
                                <input class="form-check-input" type="checkbox" value="" id="aut1" checked>
                                <label class="form-check-label" for="aut1">
                                    I authorize SportOdds to collect and transmit my personal information for identity verification or <span>similar uses as defined</span> in order to confirm my ability to use the website.
                                </label>
                            </div>
                            <div class="save__btn mt-3 d-flex">
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