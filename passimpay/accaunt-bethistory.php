<?php
/*
Template Name:bethistory

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
                            Bet History
                        </h3>
                        <div class="cainoform__wrap">
                            <div class="row g-4">
                                <div class="col-xl-6">
                                    <div class="casino__date">
                                        <h4 class="f__title">
                                            From
                                        </h4>
                                        <div class="calender-bar">
                                            <input type="text" class="datepicker" placeholder="2024-2-2">
                                            <i class="icon-calender"></i>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="casino__date">
                                        <h4 class="f__title">
                                            Until
                                        </h4>
                                        <div class="calender-bar">
                                            <input type="text" class="datepicker" placeholder="2024-2-2">
                                            <i class="icon-calender"></i>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="casinoform__tabe bethistory__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Game</th>
                                        <th>Team</th>
                                        <th>Payment Methods</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Ratio</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Football</td>
                                        <td>
                                            <span>Prachuap FC</span>
                                             <span>Lampun Warrior FC</span>
                                        </td>
                                        <td>Bank / CC</td>
                                        <td>5,591 USD</td>
                                        <td class="cancel">Cancel</td>
                                        <td>8.55</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Tennis</td>
                                        <td>
                                            <span>Cristina Bucsa ESP</span>
                                             <span>Pedro Sousa POR</span>
                                        </td>
                                        <td>Credit Card</td>
                                        <td>5,591 USD</td>
                                        <td class="pending">Prnding</td>
                                        <td>2.70</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Basketball</td>
                                        <td>
                                            <span>Tokyo United BC</span>
                                             <span>Rizing Fukuoka</span>
                                        </td>
                                        <td>Bank / CC</td>
                                        <td>5,591 USD</td>
                                        <td class="cancel">Cancel</td>
                                        <td>8.50</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Volleyball</td>
                                        <td>
                                            <span>Tokyo Great Bears</span>
                                             <span>JT Thunders</span>
                                        </td>
                                        <td>Bank</td>
                                        <td>5,591 USD</td>
                                        <td class="complate">Complete</td>
                                        <td>7.05</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Cricket</td>
                                        <td>
                                            <span>Pakistan</span>
                                             <span>England</span>
                                        </td>
                                        <td>Credit Card</td>
                                        <td>5,591 USD</td>
                                        <td class="cancel">Cancel</td>
                                        <td>3.05</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Football</td>
                                        <td>
                                            <span>England</span>
                                            <span>USA</span>
                                        </td>
                                        <td>Bank / CC</td>
                                        <td>5,591 USD</td>
                                        <td class="pending">Prnding</td>
                                        <td>3.20</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Tennis</td>
                                        <td>
                                            <span>Victoria Kan RUS</span>
                                            <span>Denisa Hindova CZE</span>
                                        </td>
                                        <td>Bank</td>
                                        <td>5,591 USD</td>
                                        <td class="complate">Complete</td>
                                        <td>2.40</td>
                                        <td class="bold">...</td>
                                    </tr>
                                    <tr>
                                        <td>Basketball</td>
                                        <td>
                                            <span>Saitama Broncos</span>
                                            <span>Kagawa Five Arrows</span>
                                        </td>
                                        <td>Bank / CC</td>
                                        <td>5,591 USD</td>
                                        <td class="complate">Complete</td>
                                        <td>1.95</td>
                                        <td class="bold">...</td>
                                    </tr>
                                </tbody>
                            </table>
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