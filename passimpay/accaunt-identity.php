<?php
/*
Template Name:accaunt-verify

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
                            Verification
                        </h3>
                        <div class="verification__wrap">
                            <div class="row g-4">
                                <div class="col-xxl-6 col-xl-6 col-lg-12">
                                    <div class="verification__box">
                                        <h4 class="veri__title">
                                            ID card
                                        </h4>
                                        <div class="attach__wrap">
                                            <select name="veri" id="verification1">
                                                <option value="1">
                                                    Choose document type
                                                </option>
                                                <option value="2">
                                                    Categories One
                                                </option>
                                                <option value="3">
                                                    Categories One
                                                </option>
                                                <option value="4">
                                                    Categories One
                                                </option>
                                            </select>
                                            <a href="#0" class="cmn--btn">
                                                <span>Attach</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-12">
                                    <div class="verification__box">
                                        <h4 class="veri__title">
                                            ID card
                                        </h4>
                                        <div class="attach__wrap">
                                            <select name="veri" id="verification2">
                                                <option value="1">
                                                    Choose document type
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                            </select>
                                            <a href="#0" class="cmn--btn">
                                                <span>Attach</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-12">
                                    <div class="verification__box">
                                        <h4 class="veri__title">
                                            ID card
                                        </h4>
                                        <div class="attach__wrap">
                                            <select name="veri" id="verification3">
                                                <option value="1">
                                                    Choose document type
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                            </select>
                                            <a href="#0" class="cmn--btn">
                                                <span>Attach</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-12">
                                    <div class="verification__box">
                                        <h4 class="veri__title">
                                            ID card
                                        </h4>
                                        <div class="attach__wrap">
                                            <select name="veri" id="verification4">
                                                <option value="1">
                                                    Choose document type
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                                <option value="1">
                                                    Categories One
                                                </option>
                                            </select>
                                            <a href="#0" class="cmn--btn">
                                                <span>Attach</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom__text pt-120">
                            <h4>
                                Additional information
                            </h4>
                            <p>
                                The verification procedure usually takes up to 48 hours from the moment of successful download and receiving of client’s data. However, we always try to process information as soon as possible. As soon as an account is verified, you will receive an email notification. You can also contact customer support (online chat or by phone) to clarify this information.
                            </p>
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