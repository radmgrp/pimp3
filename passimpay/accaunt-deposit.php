<?php
/*
Template Name:accaunt-deposit

*/


get_header(); ?>
    <section class="dashboard__body mt__30 pb-60"> 
        <div class="container">
            <div class="row g-4">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                    <div class="dashboard__side__bar">
                        <ul class="account__menu">
                            <?php if ( has_nav_menu( 'left' ) ) : ?>
                             <?php get_template_part( 'template-parts/menu', 'left' ); ?>
                            <?php endif; ?>
                           
                           
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8">
                    <div class="dashboard__body__wrap">
                        <h3 class="account__head mb__30">
                            Deposit
                        </h3>
                        <div class="payment__cart__check">
                            <div class="row g-4">
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="payment__cart__items">
                                        <input class="form-check-input" type="radio" id="deposit1" name="cripto_name" value="10">
                                        <label class="form-check-label" for="deposit1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/btc.svg" alt="btc">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="payment__cart__items">
                                        <input class="form-check-input" type="radio" id="deposit2" name="cripto_name" checked value="71">
                                        <label class="form-check-label" for="deposit2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/usdt.svg" alt="usdt">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="payment__cart__items">
                                        <input class="form-check-input" type="radio" id="deposit3" name="cripto_name" value="30">
                                        <label class="form-check-label" for="deposit3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/eterium.svg" alt="etherium">
                                        </label>
                                    </div>
                                </div>
                            
                            </div>
                          <div class="pasimpay-usdt-message">Minimum deposit amount $10</div>
                        </div>
                        <div class="deposit__complate">
                            <h3>
                                Complete Your Deposit
                            </h3>
                            <div class="deposit__wallet">
                                <div class="deopsit__wallet__items">
                                    <p>
                                        Deposit to Wallet
                                    </p>
                                    <div class="usd__chacnge">
                                        <span>USD</span>
                                        <div class="icons" id="profile-picture">
                                            <i class="fas fa-pen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="deopsit__wallet__items">
                                    <p>
                                        Payment Provider
                                    </p>
                                    <div class="usd__chacnge">
                                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/usdt.svg" alt="vissa"></span>
                                        <div class="icons" id="profile-picture2">
                                            <i class="fas fa-pen"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="promo__code">
                                <span class="promo">
                                    Promo Code
                                </span>
                                <a href="#0">
                                    <span>Enter Code</span>
                                    <span><i class="fas fa-plus"></i></span>
                                </a>
                            </div>
                            <a href="#0" class="visa__card">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/usdt.svg" alt="visa">
                            </a>
                            <ul class="quick-value">
                                <li data-id="10"><h5 class="">10$</h5></li>
                                <li data-id="20"><h5 class="active">20$</h5></li>
                                <li data-id="30"><h5 class="">30$</h5></li>
                                <li data-id="40"><h5>40$</h5></li>
                                
                                <li data-id="custom"><h5>Custom</h5></li>
                                 
                            </ul>
                            <form action="" method="post">
                                <div class="single-input mb__20">
                                    <input type="number" id="dAmount" min="10" name="pass_val" placeholder="Enter Amount" value="20" autocomplete="off">
                                </div>
                                <div class="single-input">
                             <input type="text" id="email" placeholder="Email" disabled> 
                                </div>
                                <input type="hidden" id="cripto_id" name="cripto_id" value="71">
                                <div class="total__amount">
                                    <div class="items">
                                        <span>Amount Fee</span>
                                        <span>$20</span>
                                    </div>
                                    <div class="items">
                                        <span>Total</span>
                                        <span  class="items2">$20</span>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn--btn">
                                        <span>Deposit</span>
                                    </button>
                                </div>
                            </form>
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
<script>

$("input[name='cripto_name']").change(function(){
   $("#cripto_id").val($(this).val());
 if($(this).val()==71){$(".pasimpay-usdt-message").show();}else{$(".pasimpay-usdt-message").hide();}
   var img=$(this).siblings("label").find("img").attr("src");
   $(".usd__chacnge img").attr("src",img);
   $("a.visa__card").find("img").attr("src",img);
})

$(".quick-value li").click(function(){
    
    
   $(".quick-value li h5").removeClass("active");
    $(this).find("h5").addClass("active");
    var dd=$(this).attr("data-id");
    
    if(dd!="custom"){
        $(".items .items2").html("$"+dd);
    $("#dAmount").val(dd);
    }
})
$("#dAmount").mousedown(function(){
    var dd=$(".quick-value .active").closest("li").attr("data-id");
   if(dd!="custom"){  return false;
   }
})

 $("#dAmount").keydown(function(e){
var code = e.keyCode || e.which;
 if(code == 190 || code == 188){
 return false;
 }
 })
   $("#dAmount").change(function(){
       $val=$(this).val();
      
       if($val<10){$(this).val(10);  
   }
   $(".items .items2").html("$"+$(this).val());
})
</script>
<style>
.pasimpay-usdt-message{

  text-align:center;  
   color:#FFF; 
   padding-top:15px;
}
.usd__chacnge img{
height:17px;
}
a.visa__card img{
height:31px;    
    
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<?php
get_footer();