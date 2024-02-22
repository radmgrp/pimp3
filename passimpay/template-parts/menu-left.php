<?php
function ll($list){
 global $post;
    $post_slug = $post->post_name;
if($list==$post_slug){echo "active";}
}
?>

	<ul class="account__menu">
                            <li>
                                <a href="/dashboard" class="<?php ll("dashboard");?>">
                                    <span class="icons">
                                        <i class="icon-user"></i>
                                    </span>
                                    <span>
                                        Account Settings
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/contact-preferences" class="<?php ll("contact-preferences");?>">
                                    <span class="icons">
                                        <i class="icon-pcontact"></i>
                                    </span>
                                    <span>
                                       Contact Preferences
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/identity" class="<?php ll("identity");?>">
                                    <span class="icons">
                                        <i class="icon-details"></i>
                                    </span>
                                    <span>
                                       Identity Details
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/verification" class="<?php ll("verification");?>">
                                    <span class="icons">
                                        <i class="icon-verify"></i>
                                    </span>
                                    <span>
                                       Verify
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/casinobet" class="<?php ll("casinobet");?>">
                                    <span class="icons">
                                        <i class="icon-casino"></i>
                                    </span>
                                    <span>
                                       Casino bets
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/mypromo" class="<?php ll("mypromo");?>">
                                    <span class="icons">
                                        <i class="icon-promos"></i>
                                    </span>
                                    <span>
                                       My Promos
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/deposit" class="<?php ll("deposit");?>">
                                    <span class="icons">
                                        <i class="icon-deposit"></i>
                                    </span>
                                    <span>
                                       Deposit
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/withdraw" class="<?php ll("withdraw");?>">
                                    <span class="icons">
                                        <i class="icon-withdraw"></i>
                                    </span>
                                    <span>
                                       Withdraw
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/transaction" class="<?php ll("transaction");?>">
                                    <span class="icons">
                                        <i class="icon-history"></i>
                                    </span>
                                    <span>
                                       Transction History
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/notification" class="<?php ll("notification");?>">
                                    <span class="icons">
                                        <i class="icon-notifivation"></i>
                                    </span>
                                    <span>
                                       Notifications
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/bethistory" class="<?php ll("bethistory");?>">
                                    <span class="icons">
                                        <i class="icon-bhistory"></i>
                                    </span>
                                    <span>
                                       Bet History
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="/bonuses" class="<?php ll("bonuses");?>">
                                    <span class="icons">
                                        <i class="icon-bonus"></i>
                                    </span>
                                    <span>
                                       Bonuses
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo do_shortcode("[logout_link]");?>">
                                    <span class="icons">
                                        <i class="icon-logout"></i>
                                    </span>
                                    <span>
                                       Logout
                                    </span>
                                </a>
                            </li>
                        </ul>