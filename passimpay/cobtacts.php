<?php
/*
Template Name:  Контакты

*/


get_header(); ?>
<?php
$tmp=get_template_directory_uri()."/assets/img/";
$token=<<<EOD
eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1bmlxdWVfbmFtZSI6WyJVU0VSX0ZPUl9TSVRFIiwiVVNFUl9GT1JfU0lURSJdLCJqdGkiOiJjMTgwZmYzMTM2Y2I0ZTZmYTczNmVkZDdiNGM0MDUxYiIsIm5iZiI6MTcwMDE0MTk3NywiZXhwIjoyMDE1NTAxOTc3LCJpYXQiOjE3MDAxNDE5NzcsImlzcyI6IldvcmtmbG93VGVjaG5vbG9neSJ9.dRMvgA1pmewj7EgnCE614R_Lqo_wj_EmBxF9Ir7zj6U
EOD;
function get_filter_auto($url,$token){
    $ch = curl_init($url);
    $headers = [];
    $headers[] = 'Content-Type:application/json';
    $headers[] = "Authorization: Bearer ".$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    $result = curl_exec($ch);

  return  json_decode($result, true);
    }

?>
         <section class="section_cart">
            <div class="container"> 
  <h1 class="h1"><?php the_title(); ?></h1>
              <div class="cart"> 
                <div class="cart_slider">                
                  <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;height:250px" class="mySwiper"
                  thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
                
                  
                  <?php $metadata = SCF::get( 'слайдер' );      foreach($metadata as $val) {
      
$img= wp_get_attachment_image_url($val["sl_img"], 'large', "", array( "class" =>"medium" ) ); 
?>
   <swiper-slide>
                    <img src="<?php echo $img; ?>" />
                  </swiper-slide>
<? } ?>
             
             
             
                </swiper-container>
              
                <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                  watch-slides-progress="true">
                  
              <?php   foreach($metadata as $val) {
      
$img= wp_get_attachment_image_url($val["sl_img"], 'small', "", array( "class" =>"medium" ) ); 
?>
   <swiper-slide>
                    <img src="<?php echo $img; ?>" />
                  </swiper-slide>
<? } ?>
              
                
                </swiper-container>
                </div>
                <div class="cart_opts">
                  <div class="cart_opts-left">
                    <div class="cart_opts-title">характеристики</div>
         <?php $metadata = SCF::gets(get_the_ID());?>       
                    
                  <div class="cart_opts-left-row"> <div>Число дверей</div> <div> <?php echo $metadata["door_num"];?></div> </div>
                  <div class="cart_opts-left-row"> <div>Мест для багажа</div> <div> <?php echo $metadata["cargo_num"];?></div> </div>
                  <div class="cart_opts-left-row"> <div>Кондиционер</div> <div> <?php echo $metadata["kondicioner"];?></div> </div>
  <div class="cart_opts-left-row"> <div>Типы топлива</div> <div class="cart_opts-red"> <?php echo $metadata["fuel_type"];?></div> </div>
   <div class="cart_opts-left-row"> <div>Количество пассажиров</div> <div> <?php echo $metadata["passanger_num"];?></div> </div>
   <div class="cart_opts-left-row"> <div>Подушек безопасности</div> <div> <?php echo $metadata["airbag_num"];?></div> </div>
    <div class="cart_opts-left-row"> <div>Аудиосистема</div> <div> <?php echo $metadata["audio"];?></div> </div>
      <div class="cart_opts-left-row"> <div>Коробка передач</div> <div> <?php echo $metadata["transmission"];?></div> </div>
  
                  </div> 
                  <div class="cart_opts-right">
                    <div class="cart_opts-right-wrapper"> 
                    <div class="cart_opts-right-title">Стоимость аренды в сутки</div>
						
				<?php
                 
	$auto_id=$metadata["auto_id"];			
$url_tarrif="http://46.8.19.99:9400/data_api/tariff_list?car_id=".$auto_id;
$res=get_filter_auto($url_tarrif,$token);
$res=$res["cars"][0]["tariffs"];
						
foreach($res as $val){ ?>
 <div class="cart_opts-right-row"> <div><?php echo $val["min"]."-".$val["max"]." суток"; ?></div> <div> <?php echo $val["cost"]."руб"; ?></div> </div>	
	
<?php }	?>					
						
						
							
						
                  
                  </div>
                  </div> 
                </div> 
                </div>
            </div>
          </section>
          <section class="cart_form">
            <div class="container">   
              <div class="book_form_row">  
                <div class="book_form_col"> место подачи <select  id="book_form-from"><option data-id="0"></option>
                <?php

 $url="http://46.8.19.99:9400/data_api/place_list";
$select=get_filter_auto($url,$token);
$pp=$_GET["from"];
$str="";
    foreach($select["places"] as $value){
    $cc="";
    if($pp==$value["place_id"]){ $cc="selected"; }
    $str.="<option data-id='".$value["place_id"]."' ".$cc." >".$value["title"]."</option>";
    }
    echo $str;
    ?> 
                
                </select></div>
				  <div class="book_form_col"> место возврата<select id="book_form-to"><option data-id="0"></option><?php $pp=$_GET["to"];
$str="";
    foreach($select["places"] as $value){
    $cc="";
    if($pp==$value["place_id"]){ $cc="selected"; }
    $str.="<option data-id='".$value["place_id"]."' ".$cc." >".$value["title"]."</option>";
    }
    echo $str;
    ?> 
            </select> </div>
				  
				  
				  
                <div class="book_form_col"> с <input type="text" id="book_form-date1"> </div>
                <div class="book_form_col"> по <input type="tex" id="book_form-date2"> </div> 
                     
                
              </div> 
        </div>
      </section>
<?php
      $url_tarrif="http://46.8.19.99:9400/data_api/service_list";
$res_service=get_filter_auto($url_tarrif,$token);         


  echo $res_service["services"][5]["cost"];
  ?>

          <section class="section_insurance">
            <div class="container"> 
              <div class="insurance_wrapper">
              <div class="insurance_left">
                <div class="insurance_left-title">Расширенное страхование</div>
                <div class="insurance_left-opt">Гарантия безопасности</div>
                <div class="insurance_left-opt">Повреждения автомобиля</div>
                <div class="insurance_left-opt">Кража автомобиля</div>
                <div class="insurance_left-opt">Потеря или кража автомобильных ключей</div>
              </div>
              <div class="insurance_right"><div class="insurance_right=title">Гарантия защиты</div><div class="insurance_check-wrapper"><input type="checkbox" id="insurance"><label for="insurance">+<?php   echo $res_service["services"][2]["cost"];  ?> руб. в день</label></div></div>
            </div>
    </div>
          </section>

          <section class="section_cartopts">
            <div class="container cartopts_container"> 
              <div class="cartopts_container"> 
              <div class="insurance_left-title">Дополнительные услуги</div>
              </div></div>

              <div class="cartopts_wrapper">
                <div class="container cartopts_container">
                  <div class="cartopts_container">
					  <?php
					
				foreach($res_service["services"] as $res){ if($res["service_id"]!=5){ ?>
				 <div class="cartopts_row"> <div class="cartopts_col cartopts_col1"><input type="checkbox" id="checkbox<?php echo $res["service_id"]; ?>" value="<?php echo $res["service_id"]; ?>"> <label for="checkbox<?php echo $res["service_id"]; ?>"><div class="cartopts_label1"><?php echo $res["title"] ?></div><div>Детское сиденье</div></label></div><div class="cartopts_col cartopts_col2"><div class="cartopts_col2-right"><?php echo $res["cost"] ?> руб. <?php if($res["service_type_id"]==2){ ?>в день<?php } ?></div></div> </div> 
            	
					<?php
																					}
				}  
					  
					  
					  
					  ?>
					  
					  
                  
                </div>  
            
                     
    </div>
          </section>
          
         
<?php
  


$url_cost="http://46.8.19.99:9400/data_api/bid_cost?car_id=".$auto_id."&begin=24.12.2023&end=27.12.2023&begin_place_id=3&end_place_id=4&services=[5]"; 
$res=get_filter_auto($url_cost,$token);

?>
          <section class="section_book">
            <div class="container"> 
              <div class="book_vrapper">
                <div class="book_content">
<div class="book_content-wrapper">
                  <div class="book_content-row"><div class="book_content-col">Стоимость аренды</div><div class="book_content-line"></div><div class="book_content-col"><?php echo $res["cost"]?></div></div>

                  <div class="book_content-res">
                    <div class="book_content-row"><div class="book_content-col"><b>1</b></div><div class="book_content-col">4</div></div>
                    <div class="book_content-row"><div class="book_content-col">Залог</div><div class="book_content-col"><?php echo $res["deposit"]?></div></div>
                  </div> </div> 
                  <div class="book_res-button-vrappeer"><button class="book_res-button">Забронировать</button></div> 
                <div class="book_res-policy">Нажимаю на кнопку Забронировать, вы соглашаетесь с условиями аренды, подачи и возврата автомобиля</div>          
                </div> 
           
                </div>
            </div>
          </section>  
          
          
          <section class="section_content">
            <div class="container"> 
              <div class="content_title"> <?php echo $metadata["cart_title1"];?>  </div>
              <div class="content"><?php echo $metadata["cart_text1"];?> 
            </div>
    </div>
          </section>
          <div class="book_opts">  
            <div class="container"> 
              <div class="book_opts_items"> 
                <div class="book_opts_item"> <img src="<?php echo $tmp;?>book_opt1.svg" alt="" width="65"><div>Комфортабельные условия</div></div> 
                <div class="book_opts_item"> <img src="<?php echo $tmp;?>book_opt2.svg" alt="" width="65"><div>Чистые и убранные салоны</div></div> 
                <div class="book_opts_item"><img src="<?php echo $tmp;?>book_opt3.svg" alt="" width="65"><div>Техподдержка всегда на связи</div></div> 
                <div class="book_opts_item"><img src="<?php echo $tmp;?>book_opt4.svg" alt="" width="65"><div>Удобная оплата онлайн или офлайн</div></div> 
              </div>

            </div>
          </div>

    <section class="section_content">
            <div class="container"> 
              <div class="content_title">  <?php echo $metadata["cart_title2"];?>  </div>
              <div class="content">
             <?php echo $metadata["cart_text2"];?>  
            </div>
    </div>
          </section>




      



<section class="section">
            <div class="container"> 
             <div class="content_title">Похожие предложения</div> 
            
             <div class="book_cat">  
				 
				 
			<?php
				 
			$params = array(
	'post_type' => 'avto', 
	'numberposts' => 206, 
	'orderby' => 'date',
	'order' => 'DESC', 
    'post_status' => array('publish'),
	'suppress_filters' => true 
    );
    $auto_ids=$metadata["auto_simple"];
    $posts = get_posts($params);
   
  if ( !empty( $posts ) ) {
  foreach( $posts as $post ) :
    setup_postdata( $post );  
	
 
	  $id=get_the_ID();
  $hh=in_array($id, $auto_ids); 


if($hh!= NULL){
$metadata = SCF::gets(get_the_ID());
 ?>
     <div class="book_cat_item">
        <img src="img/car.jpg" alt="">   
        <div class="book_cat_item_mark"><?php the_title() ?></div>
         <div class="book_cat_item_opts"> 
           <div class="opt opt1"> 1 </div>
           <div class="opt opt2"> 2 </div>
           <div class="opt opt3"> 3 </div>
           <div class="opt opt4"> 4 </div>  
       </div>
       <div class="book_cat_item-cost"><div class="left">BMW</div><div class="right">95 S <span>сутки</span></div></div>
       <div class="book_cat_item-status">
        <div class="st st1">свободна</div>
        <div class="st st2"><?php if(function_exists('the_views')) { the_views(); } ?></div>
        <div class="st st3"><?php echo $metadata["reyting"];?></div>
      </div>
      <a class="book_cat_item_button" href="<?php the_permalink() ?>">Выбрать</a>
       </div>
     
   
    
    <?php 

 
}
endforeach;
wp_reset_postdata();
    
}


	 
				 
				 ?>	 
				 
				 
				 
            


            </div>
          </div>
            </section>
             <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
       <style>
      swiper-container {
      width: 100%;
      height: 250px;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

 

    swiper-container {
      width: 100%;
      height: 300px;
      
    }

    swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper {
      height: 80%;
      width: 100%;
    }

    .mySwiper2 {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper2 swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper2 .swiper-slide-thumb-active {
      opacity: 1;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>  
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<?php 
$car_id=$metadata["auto_id"]; 
$url="http://46.8.19.99:9400/data_api/car_period_list?car_id=".$car_id."&begin=14.11.2023&end=24.09.2024&include_reserves=true&include_idles=true";
$select=get_filter_auto($url,$token); ?>

  <script>
  $( function() {
   function ajax_cart(){
	 var car_id=<?php echo $metadata["auto_id"]; ?>;
    var date1=$("#book_form-date1").val();
    var date2=$("#book_form-date2").val();
    var from=$("#book_form-from option:selected").attr("data-id");
    var to=$("#book_form-to option:selected").attr("data-id");
    var service="";
    if($("#insurance").is(":checked")){service+=5;}
    $(".cartopts_row").each(function(){
    var inp=$(this).find("input[type='checkbox']");
    if(inp.is(":checked")){
    if(service!=""){service+=","+inp.val();}else{service+=inp.val();}
    }
    
    })
    console.log(service);
  if(from!=0 && to!=0 && date1!="" && date2!=""){
    $.post( "/ajax",{from:from,to:to,date1:date1,date2:date2,car:car_id,service:service},
	function( data ) {
      $(".book_content-wrapper").html(data);
      });   
  }
	   
   }
   
	$(".book_form_row input,.book_form_row select,.cartopts_row input,#insurance").change(function(){
		
		ajax_cart();
		
		
		
	})
	  
	  
	  
	  
	  
	<?php 
$ii='';
	  $jj=0;
foreach($select["car_periods"] as $val) { 
	if($jj!=0){$ii.=",";}
	$ii.="['".$val["begin"]."','".$val["end"]."']"; 
	$jj++;
}
	  echo "var dates=[".$ii."];"
?>  
	  

var todaydate = new Date(),
	duedate = "01.27.2016",
	duedate = new Date(duedate);	  
    var dateFormat = "dd.mm.yy",
      from = $( "#book_form-date1" )
        .datepicker({
			local:"ru",
		dateFormat: dateFormat,
			defaultDate: "",
          changeMonth: true,
          numberOfMonths: 1,
         beforeShowDay: function(date) {
			 var ii=0;
			 for(var tt=0;tt<dates.length;tt++){
				 var d1=new Date(dates[tt][0]);
				 var d2=new Date(dates[tt][1]);
				 if(date>=d1 && date<=d2){ii++;}
			 }
			if(ii>0){ return[(1)]; }else{return[(0)]; }
		
  	}
	 
				
				   
	
			
			
            
         
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#book_form-date2" ).datepicker({
        defaultDate: "",
		dateFormat: dateFormat,
        changeMonth: true,
		changeYear: true,
        numberOfMonths: 1,
		   beforeShowDay: function(date) {
			 var ii=0;
			 for(var tt=0;tt<dates.length;tt++){
				 var d1=new Date(dates[tt][0]);
				 var d2=new Date(dates[tt][1]);
				 if(date>=d1 && date<=d2){ii++;}
			 }
			if(ii>0){ return[(1)]; }else{return[(0)]; }
		
  	}
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
	
  } );
  </script>
<?php
get_footer();