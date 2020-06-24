<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center"><?php echo $timerAgency['teamMembers_title']; ?></h2>
            
            <?php
                
                $tm_query = new WP_Query(array(
                    'post_type' => 'teamMembers',
                    'posts_per_page' => -1,
                    'order' => 'DSC'
                ));
                
                if($tm_query -> have_posts()){
                    while($tm_query -> have_posts()) : $tm_query -> the_post();

                    $designation = get_post_meta(get_the_ID(), 'teamMembers_designation', true);
                    $facebook = get_post_meta(get_the_ID(), 'teamMembers_facebook', true);
                    $instagram = get_post_meta(get_the_ID(), 'teamMembers_instagram', true);
                    $twitter = get_post_meta(get_the_ID(), 'teamMembers_twitter', true);
                    $linkedin = get_post_meta(get_the_ID(), 'teamMembers_linkedin', true);
                    $googleplus = get_post_meta(get_the_ID(), 'teamMembers_googleplus', true);
                    $wow_delay = get_post_meta(get_the_ID(), 'teamMembers_data_wow_delay', true);
            ?>
            
            <div class="col-md-3 col-sm-6">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="<?php echo $wow_delay; ?>300ms">
                    <div class="team-img">
                        <?php the_post_thumbnail('custom-post-image', array('class' => 'img-responsive'));?>
                    </div>
                    <h3 class="team_name"><?php the_title();?></h3>
                    <p class="team_designation">
                        <?php
                            if(is_array($designation)){
                                foreach($designation as $single_designation){
                                    echo $single_designation .', ';
                                }
                            }
                        ?>
                        CEO, Project Manager
                    </p>
                    <p class="team_text"><?php the_content(); ?></p>
                    <p class="social-icons">
                        <?php
                            if(is_array($timerAgency['teamMembers_social'])){
                                foreach($timerAgency['teamMembers_social'] as $single_social){
                                
                        ?>
                        
                        <a href="<?php
                            switch($single_social['title']){
                                case 'facebook' :
                                    echo esc_url($facebook .'facebook.com');
                                    break;
                                
                                case 'instagram' :
                                    echo esc_url($instagram .'instagram.com');
                                    break;
                                
                                case 'twitter' :
                                    echo esc_url($twitter .'twitter.com');
                                    break;
                                
                                case 'linkedin' :
                                    echo esc_url($linkedin .'linkedin.com');
                                    break;
                                
                                case 'googleplus' :
                                    echo esc_url($googleplus .'plus.google.com');
                                    break;
                                
                                default:
                                    echo esc_url('#');
                            }
                        ?>" class="<?php if($single_social['title'] == 'facebook'){echo 'facebook';} ?>" target="_blank"><i class="ion-social-<?php echo $single_social['title']; ?>-outline"></i></a>
                        
                        <?php
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>

            <?php
                    endwhile;
                }
            ?>
        </div>
    </div>
</section>