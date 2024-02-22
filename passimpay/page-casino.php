<?php
/*
Template Name:casino

*/


get_header(); ?>
     <!--Sub-Header Tabs Here-->
    <section class="main__tab__slide">
        <ul class="nav nav-tabs" id="myTabmain" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="main-tab8cas" data-bs-toggle="tab" data-bs-target="#casinot8" type="button" role="tab"  aria-selected="false">
                     <span class="icons"><i class="icon-game"></i></span>
                     <span>All Games</span>
                </button>
               </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="main-tabcasino" data-bs-toggle="tab" data-bs-target="#casinot1" type="button" role="tab"  aria-selected="true">
                <span class="icons"><i class="icon-top"></i></span>
                <span>Top</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="main-tab2cas" data-bs-toggle="tab" data-bs-target="#casinot2" type="button" role="tab"  aria-selected="false">
                <span class="icons"><i class="icon-new"></i></span>
                <span>New</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="main-tab3cas" data-bs-toggle="tab" data-bs-target="#casinot3" type="button" role="tab"  aria-selected="false">
                <span class="icons"><i class="icon-popular"></i></span>
                <span>Popular</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="main-tab4cas" data-bs-toggle="tab" data-bs-target="#casinot4" type="button" role="tab"  aria-selected="false">
                <span class="icons"><i class="icon-slots"></i></span>
                <span>Slots</span>
             </button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="main-tab5cas" data-bs-toggle="tab" data-bs-target="#casinot5" type="button" role="tab"  aria-selected="false">
                <span class="icons"><i class="icon-ttennis"></i></span>
                <span>Table Games</span>
             </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tab6cas" data-bs-toggle="tab" data-bs-target="#casinot6" type="button" role="tab"  aria-selected="false">
                    <span class="icons"><i class="icon-jackpot"></i></span>
                    <span>Jackpots</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="main-tabcass" data-bs-toggle="tab" data-bs-target="#casinot7" type="button" role="tab"  aria-selected="false">
                    <span class="icons"><i class="icon-live"></i></span>
                    <span>
                        Live Games
                    </span>
                </button>
              </li>
              <li class="nav-item">
                <div class="search-button">
                    <button class="nav-link" id="search">
                        <span class="icons"><i class="icon-search"></i></span>
                        <span>Search</span>
                    </button>
                    <div class="search-popup">
                      <div class="search-bg"></div>
                      <div class="search-form">
                        <form action="#">
                          <div class="form">
                            <input type="text" id="searchs" placeholder="Search Your Fovatires Game">
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
             </li>
          </ul>  
    </section>
     <!--Sub-Header Tabs Here-->
    

    <section class="main__body__area"> 
        <div class="container">
            <div class="row g-0">
                <div class="casino__tab__area">
                    <div class="tab-content" id="nav-tabCcasino">
                        <!--all games-->
                        <div class="tab-pane mt__30 fade text-white show active" id="casinot8" role="tabpanel" aria-labelledby="casinot1" tabindex="0">
                            <!--Top Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-top"></i></span>
                                <span>Top Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t2.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t4.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t3.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t5.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t6.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t7.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->

                            <!--New Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-new"></i></span>
                                <span>New Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n2.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/t3.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n4.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n5.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n6.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n7.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--New Games-->

                            <!--Popular Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-popular"></i></span>
                                <span>Popular Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/popu.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p1.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p2.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p3.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p4.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box__dobble">
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p5.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="casino__box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p6.jpg" alt="game">
                                            <div class="casino__overlay">
                                                <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Popular Games-->

                             <!--slots Games-->
                             <div class="common__head mb__30">
                                <span class="icons"><i class="icon-slots"></i></span>
                                <span>Slots</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/s12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--slots Games-->

                            <!--jackpots Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-jackpot"></i></span>
                                <span>Jackpots</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/j8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--jackpots Games-->

                            <!--Live Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-live"></i></span>
                                <span>Live Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l1.jpg" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l2.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l3.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l4.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l5.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l6.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l7.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l8.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Live Games-->

                             <!--All Games-->
                             <div class="common__head mb__30">
                                <span class="icons"><i class="icon-game"></i></span>
                                <span>All Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/a12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--All Games-->

                        </div>
                        <!--Top games-->
                        <div class="tab-pane fade mt__30 text-white" id="casinot1" role="tabpanel" aria-labelledby="casinot1" tabindex="0">
                             <!--Top Games-->
                             <div class="common__head mb__30">
                                <span class="icons"><i class="icon-top"></i></span>
                                <span>Top Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt15.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt16.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt17.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt18.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt19.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt20.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt21.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt22.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt23.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt24.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
                        </div>
                        <!--new games-->
                        <div class="tab-pane fade text-white mt__30" id="casinot2" role="tabpanel" aria-labelledby="casinot2" tabindex="0">
                            <!--New Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-twer"></i></span>
                                <span>New</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn13.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn15.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn16.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn17.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn18.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn19.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
                        </div>
                        <!--Popular games-->
                        <div class="tab-pane fade text-white mt__30" id="casinot3" role="tabpanel" aria-labelledby="casinot3" tabindex="0">
                            <!--New Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-popular"></i></span>
                                <span>Popular</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt20.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l4.png" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tt2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/n4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/p6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn15.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn16.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/nn17.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l4.png" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l6.png" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
                        </div>
                        <!--Slots games-->
                        <div class="tab-pane fade text-white mt__30" id="casinot4" role="tabpanel" aria-labelledby="casinot4" tabindex="0">
                            <!--Slots Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-slots"></i></span>
                                <span>Slots</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl13.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl15.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl16.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl17.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl18.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl19.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/sl12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
                        </div>
                        <!--Slots games-->
                        <div class="tab-pane fade text-white mt__30" id="casinot5" role="tabpanel" aria-labelledby="casinot5" tabindex="0">
                            <!--Slots Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-pmart"></i></span>
                                <span>Table Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg13.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg15.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg16.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg17.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg18.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg19.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/tg20.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
                        </div>
                        <!--Slots games-->
                        <div class="tab-pane fade text-white mt__30" id="casinot6" role="tabpanel" aria-labelledby="casinot6" tabindex="0">
                            <!--Slots Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-jackpot"></i></span>
                                <span>Jackpots</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk1.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk2.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk3.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk4.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk5.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk6.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk7.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk8.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk9.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk10.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk11.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk12.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk13.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk14.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk15.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk16.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk17.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk18.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/jk19.jpg" alt="game">
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
                        </div>
                        <!--Slots games-->
                        <div class="tab-pane fade text-white mt__30" id="casinot7" role="tabpanel" aria-labelledby="casinot7" tabindex="0">
                            <!--Slots Games-->
                            <div class="common__head mb__30">
                                <span class="icons"><i class="icon-live"></i></span>
                                <span>Live Games</span>
                            </div>
                            <div class="row g-4 pb-60">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l1.jpg" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l2.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l3.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l4.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l5.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l6.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l7.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/l8.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/lg1.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/lg2.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/lg3.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="casino__box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/lg4.png" alt="game">
                                        <a href="#0" class="live">
                                            Live
                                        </a>
                                        <div class="casino__overlay">
                                            <a href="https://www.youtube.com/watch?v=orf582WJV_c" class="play-btn">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/games/play.png" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Top Games-->
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