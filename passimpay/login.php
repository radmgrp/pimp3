<?php
/*
Template Name:login

*/


get_header(); ?>
  <section class="dashboard__body mt-5 mb-5"> 
        <div class="container">
            <div class="register__modal">
                <div class="modal-content-custom">
                    <div class="modal-body-custom">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-6">
                                <div class="modal__left">
                                    <img src="assets/img/modal/modal.png" alt="modal">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="modal__right">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                         <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-selected="true">Sign In</button>
                                        </li>
                                         <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-selected="false">Sign Up</button>
                                        </li>
                                       
                                       
                                    </ul>
                                    <div class="tab-content " id="myTabContent2">
                                        <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                            <div class="form__tabs__wrap">
                                                <div class="focus__icon">
                                                    <p>
                                                        or registration via social media accounts
                                                    </p>
                                                    <div class="social__head">
                                                        <ul class="social">
                                                            <li>
                                                                <a href="#0">
                                                                    <i class="fa-brands fa-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#0">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#0">
                                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                             <form class="woocommerce-form woocommerce-form-login login" method="post">

                                                    <div class="form__grp">
                                                        <label for="emailsign">Email</label>
                                                        
                                                        	<input type="text" placeholder="Email Your" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">			</p>
		
                                                    </div>
                                                    <div class="form__grp">
                                                        <label for="toggle-password3">Password</label>
                                                           <input  placeholder="Your Password" class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
		
                                                        <span id="#toggle-password3" class="fa fa-fw fa-eye field-icon toggle-password3"></span>
                                                    </div> 
                                                    	<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="3623228e95"><input type="hidden" name="_wp_http_referer" value="/login/">		
                                                    <div class="login__signup">
                                                        <div class="form-check">
                                                          
                                                            <input class="form-check-input woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> 
                                                            <label class="form-check-label" for="rememberme">
                                                                Remember me
                                                            </label>
                                                        </div>  
                                                        <a href="#0">
                                                            Forgot Password
                                                        </a>
                                                    </div>  
                                                    <div class="create__btn">
                           <button type="submit" style="color: var(--white);" class="cmn--btn woocommerce-button button woocommerce-form-login__submit" name="login" value="Войти"><span>Sign Up</span></button>
			</p> 
                                                    </div>
                                                    <p>
                                                        Do you have an account? <a href="#0">Registration</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="contact2" role="tabpanel">
                                            <div class="form__tabs__wrap">
                                                <div class="focus__icon">
                                                    <p>
                                                        or registration via social media accounts
                                                    </p>
                                                    <div class="social__head">
                                                        <ul class="social">
                                                            <li>
                                                                <a href="#0">
                                                                    <i class="fa-brands fa-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#0">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#0">
                                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <form action="#0">
                                                    <div class="form__grp">
                                                        <label for="email34">Email</label>
                                                        <input type="email" id="email34" placeholder="Email Your">
                                                    </div>
                                                    <div class="form__grp">
                                                        <label for="toggle-password10">Password</label>
                                                        <input id="toggle-password10" type="password" placeholder="Your Password">
                                                        <span id="#toggle-password10" class="fa fa-fw fa-eye field-icon toggle-password10"></span>
                                                    </div> 
                                                    <div class="form__grp">
                                                        <label for="toggle-password9">Confrim</label>
                                                        <input id="toggle-password9" type="password" placeholder="Password">
                                                        <span id="#toggle-password9" class="fa fa-fw fa-eye field-icon toggle-password9"></span>
                                                    </div> 
                                                    <div class="create__btn">
                                                        <a href="#0" class="cmn--btn">
                                                            <span>Sign Up</span>
                                                        </a>
                                                    </div>
                                                    <p>
                                                        Do you have an account? <a href="#0">Login</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
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