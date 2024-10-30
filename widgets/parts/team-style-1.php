



<figure class="mc-item mc-item--fadeIn codexfadeIn">
    <img class="mc-item__image" src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_name); ?>">
    <figcaption class="mc-item__caption codexContentBox">
        <div>
            <h3> <?php echo esc_html($team_name); ?> </h3>
            <p> <?php echo esc_html($team_designation); ?> </p>
            <div class="social_icon">

                <?php foreach($team_socials as $social){
                ?>
                <a href="<?php echo esc_url($social['team_social_link']['url']); ?>"><i class="<?php echo esc_attr($social['team_social_icon']['value']);  ?>"></i></a>
                        

                <?php

                }
                
                ?>
               
            </div>
        </div>
    </figcaption>
</figure>