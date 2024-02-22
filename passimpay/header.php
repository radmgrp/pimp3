<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Auto_parts
 * @since  Auto_parts 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
 <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo/favicon.png">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=b4894c67-97fa-499c-86cc-30605c8b8a47" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/api.js" type="text/javascript"></script>

	<style>
	@media screen and (max-width: 991px){
.main-menu .cmn-grp {
   color:#FFF; 
 display:flex !important;   
}}
	
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 

?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		_e( 'Skip to content', 'twentyseventeen' );
		?>
	</a>



    <header class="header-section dashboard__header">
        <div class="container-fluid p-0">
            <div class="header-wrapper">
                <div class="menu__left__wrap">
                    <div class="logo-menu px-2">
                        <a href="/" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                   
                    <ul class="main-menu">
                        <li>
                            <a href="l/live">
                                <span>Live</span>
                            </a>
                        </li>
                        <li>
                            <a href="/sportsbetting">
                                <span>Sports Betting</span>
                            </a>
                        </li>
                        <li>
                            <a href="/casino">
                                <span>Casino</span>
                            </a>
                        </li>
                        <li>
                            <a href="#lucky">
                                <span>Lucky Drops</span>
                            </a>
                        </li>
                        <li>
                            <a href="/livecasino">
                                <span>Live Casino</span>
                            </a>
                        </li>
                        <li>
                            <a href="/promotions">
                                <span>Promotions</span>
                            </a>
                        </li>
                        <li class="cmn-grp">
                          
                    <div class="items d__text">
                        <span class="small">Your balance</span>
                        <h6><?php echo woo_wallet()->wallet->get_wallet_balance( 1) ?> </h6>
                    </div>
                    <div class="items d__cmn">
                        <a href="<?php the_permalink(48);?>" class="cmn--btn">
                            <span>Deposit</span>
                        </a>
                   
                    </div>
                        </li>
                    </ul>
                </div>
               
                <div class="dashboar__wrap">
                    <div class="items d__text">
                        <span class="small">Your balance</span>
                        <h6><?php echo woo_wallet()->wallet->get_wallet_balance( 1) ?> </h6>
                    </div>
                    <div class="items d__cmn">
                        <a href="<?php the_permalink(48);?>" class="cmn--btn">
                            <span>Deposit</span>
                        </a>
                    </div>
                    <div class="items dashboar__social">
                        <a href="#0" class="icons">
                            <i class="icon-gift"></i>
                            <span class="count">
                                2
                            </span>
                        </a>
                        <a href="#0" class="icons">
                            <i class="icon-message"></i>
                            <span class="count">
                                2
                            </span>
                        </a>
                        <div class="custom-dropdown">
                            <div class="custom-dropdown__user" data-set="custom-dropdown">
                                <a href="#0" class="icons">
                                    <i class="icon-user text-white"></i>
                                </a>
                            </div>
                            <div class="custom-dropdown__content">
                              <div class="custom-dropdown__body">
                                <ul class="custom-dropdown__list">
                                  <li>
                                    <a href="/dashboard" class="custom-dropdown__body-link">
                                      <span class="custom-dropdown__body-icon">
                                        <i class="fas fa-layer-group"></i>
                                      </span>
                                      <span class="custom-dropdown__body-text">
                                        Dashboard
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#0" class="custom-dropdown__body-link">
                                      <span class="custom-dropdown__body-icon">
                                        <i class="fas fa-cog"></i>
                                      </span>
                                      <span class="custom-dropdown__body-text">
                                        Settings
                                      </span>
                                    </a>
                                  </li>
                                  <li>
                                  
                                    <a href="<?php echo do_shortcode("[logout_link]");?>" class="custom-dropdown__body-link">
                                      <span class="custom-dropdown__body-icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                      </span>
                                      <span class="custom-dropdown__body-text">
                                        Logout
                                      </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="lang d-flex align-items-center px-2">
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
           
        </div>
    </header>
  