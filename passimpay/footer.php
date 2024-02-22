<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>


     
    <footer class="footer__section pt-60">
        <div class="container">
            <div class="footer__top pb-60">
                <div class="row g-5">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <a href="#0" class="footer-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/footerlogo.png" alt="f-logo">
                                </a>
                            </div>
                            <div class="content-area">
                                <p>
                                    Lorem ipsum dolor sit of the cart amet, consectetur adipiscing elit. I talk out of the moon.
                                </p>
                                <h6>
                                    Follow Us
                                </h6>
                                <ul class="social">
                                    <li>
                                        <a href="#0" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="icon">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="icon">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="widget__items">
                            <div class="footer-head">
                            <h3 class="title">
                                Company
                            </h3>
                            </div>
                            <div class="content-area">
                            <ul class="quick-link">
                                <li>
                                    <a href="index.html">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/rightarrow.png" alt="angle"> Home
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0)">
                                    <img src="assets/img/footer/rightarrow.png" alt="angle"> Slots
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/rightarrow.png" alt="angle"> Tournament
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/rightarrow.png" alt="angle"> Jackpots
                                    </a>
                                </li>
                                <li>
                                    <a href="livecasino.html">
                                    <img src="assets/img/footer/rightarrow.png" alt="angle"> Live Games
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                    Support
                                </h3>
                            </div>
                            <div class="content-area">
                            <ul class="quick-link">
                                <li>
                                    <a href="#0">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/rightarrow.png" alt="angle"> Faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                    <img src="assets/img/footer/rightarrow.png" alt="angle"> Support
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-6 col-sm-9 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="widget__items">
                            <div class="footer-head">
                                <h3 class="title">
                                        Subscribe Our Newslatter
                                </h3>
                            </div>
                            
                            <p>
                                Proin mauris ligula, pretium eu est ut, imperdiet imperdiet massa. Nullam sodales ut orci vehicula aliquam. Suspendisse.
                            </p>
                            <div class="content-area">
                                <form action="#0">
                                    <input type="text" placeholder="Enter Your Email address">
                                    <button class="cmn--btn" type="submit">
                                        <span>Subscribe</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="text-white">
                        Copyright &copy; 2024, <a href="index.html" class="text--base">SportOdds</a> - All Right Reserved
                </p>
                <ul class="bottom__ling">
                    <li>
                        <a href="javascript:void(0)" class="text-white">
                            Affiliate program
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-white">
                            Terms & conditions
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-white">
                            Bonus terms & conditions
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer> 
<script>
$(".custom-dropdown__user").click(function(){
    
$(".custom-dropdown__content").toggleClass("is-open");
    
})
$(".header-bar").click(function(){
    
$(this).toggleClass("active");
 $(".main-menu").toggleClass("active");   
})
</script>

<?php wp_footer(); ?>



<?php

if(isset($_POST["pass_val"])){
$platform_id = 721; // Platform ID
$apikey = '0c9589-818682-9c70cb-a99b81-d7d898'; // Secret key
$url = 'https://api.passimpay.io/createorder';

$order_id = mt_rand(10,100) .$_POST["pass_val"];

//$amount = '100.00'; 
$amount=$_POST["pass_val"];
$amount=number_format($amount, 2, '.', '');
//$currencies = '10,71,20,'; // List the currency ID separated by commas. Not required
$currencies=$_POST["cripto_id"];

$payload = http_build_query(['platform_id' => $platform_id, 'order_id' => $order_id, 'amount' => $amount, 'currencies' => $currencies]);
$hash = hash_hmac('sha256', $payload, $apikey);

$data = [
'platform_id' => $platform_id,
'order_id' => $order_id,
'amount' => $amount,
'currencies' => $currencies,
'hash' => $hash
];

$post_data = http_build_query($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$result = curl_exec($curl);
curl_close( $curl );

$result = json_decode($result, true);
echo $result['url'];
// Response options
// In case of success
if (isset($result['result']) && $result['result'] == 1)
{
$url = $result['url'];

 global $wpdb;
 $wpdb->insert(
    'wp_passimpay_orders',
    array(
        'order_id' => $order_id,
        'status' => 'wait',
    )
);

echo "<script>document.location.href = '".$url."'</script>";
}
// In case of an error
else
{ 
$error = $result['message']; // Error text
}












}
?>

</body>
</html>