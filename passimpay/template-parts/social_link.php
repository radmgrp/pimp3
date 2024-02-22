<?php
$metadata_contacts = SCF::gets(307); ?>
            <ul class="banner_soc-icons">
            
            <?php
            foreach($metadata_contacts["социальные ссылки"] as $val){
            
            ?>
              <li><a href="<?php echo $val["social_link"] ?>"><img src="<?php $img= wp_get_attachment_image_url($val["social_img"], 'medium', "", array( "class" =>"medium" ) ); echo $img; ?>" width=37 alt=""> </a></li>
           
            <?php } ?>
            </ul>