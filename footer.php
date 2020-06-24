<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<!-- Call To Action Section -->
<?php 
    if("$timerAgency[footer_a_contact_on_off]" == 1){
        get_template_part('/temp_part/call_to_action');
    }else{
        echo '';
    }
?>

            <!-- Footer Section -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright"><?php echo $timerAgency['footer_copyright']; ?></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <?php
                                if(is_array($timerAgency['footer_social_menu'])){
                                    foreach($timerAgency['footer_social_menu'] as $single_social){
                            ?>
                                <li>
                                    <a href="<?php echo esc_url($single_social['url']); ?>" class="Facebook">
                                        <i class="ion-social-<?php echo $single_social['title']; ?>"></i>
                                    </a>
                                </li>
                            <?php
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

        <?php wp_footer();?>
 	</body>
</html>