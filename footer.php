<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sjsmwebsiteV2
 */

?>
               	<section id="contactus" class="hideme">
                    <!--Get In Touch-->
                    <div class="container">
                        <div class="row">
                            <h1>Get In Touch</h1>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                               <!--<i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>-->
                               <i class="far fa-map fa-3x" aria-hidden="true"></i>
                               <p class="contact-info">Mactan Airport Rd., LLC, 6015</p> 
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" phone">
                                <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                                <p class="contact-info">340-5939 / (Fax) 341-2399</p>  
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" phone-2">
                                <i class="fas fa-mobile-alt fa-3x"></i>
                                <p class="contact-info">(+63) 922-402-4230</p> 
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <i class="far fa-envelope fa-3x" aria-hidden="true"></i>
                                <p class="contact-info">sjsofmactan@gmail.com</p>                                 
                            </div>   
                        </div>                        
                    </div><!--container-->
                </section> 
                            
                <section id="location" class="hideme">
                    <h1 class="hideme">Our Location</h1>                   
                    <div id="map"></div>
                </section>
                <!--## END OF SECTIONS ##-->                
            </main>

            <!--## FOOTER ##-->
            <footer>
                <section id="footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-2 col-md-2 hide-hotlinks">
                                <h4><i class="fab fa-hotjar"></i>&nbsp;&nbsp; Hot Links</h4>
                                <ul>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>">Home</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/blog/">Blog</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/about-sjsm/">About</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/administrative-council/">Admin Council</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/school-hymn/">School Hymn</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/school-seal/">School Seal</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/patron-saints/">Patron Saints</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/academics/">Academics</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/admissions/">Admissions</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/admissions/tuition-fees/">Tuition Fees</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/photo-gallery/">Galleries</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/sjsms-historical-sketch/">History</a></li>
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/career">Career</a></li>                                    
                                    <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/sitemap/">Sitemap</a></li>
                                </ul>
                            </div><!--col-lg-4-->

                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <h4><i class="fas fa-rss"></i>&nbsp;&nbsp; Popular Post</h4>                                                               
                                <div class="container-fluid">
                                    <div class="row">

                                    	<!-- display post Outside the Loop -->
                                        <?php 
                                        // Define the default query args
                                        global $wp_query;
                                        $defaults = $wp_query->query_vars;

                                        // Exclude 'Featured' category in recent post
                                        $args = array('cat'=>-25);

                                        // Display atleast 3 recent posts
                                        $posts = array('posts_per_page'=>4);

                                        // merge the default with your custom args
                                        $args = wp_parse_args($posts, $args, $defaults);

                                        query_posts($args); ?>
										<?php if ( have_posts() ) : ?>
										    <?php while ( have_posts() ) : the_post(); ?>

                                                <div class="footer-post-wrapper">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 footer-post-image">
                                                        <figure>
                                                        <a href="<?php the_permalink(); ?> ">
                                                            <?php if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail();
                                                                } else { ?>
                                                                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/st-clare-building.jpg" alt="<?php the_title(); ?>" />
                                                            <?php } ?>
                                                        </a>
                                                        </figure>
                                                    </div>

                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 footer-post">
                                                        <header>
                                                            <h5><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h5>
                                                        </header>
                                                        <section>
                                                            <?php the_excerpt(); ?>
                                                            <h6><em><?php the_time('F jS, Y') ?></em></h6>   
                                                        </section>                                                
                                                    </div>
                                                </div>

										    <?php endwhile; ?>
										<?php endif; ?>

                                    </div><!--row-->
                                </div><!--container-->                                              
                            </div><!--col-lg-4-->

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                                <div class="container-fluid">
                                    <div class="row">
                                        <h4><i class="far fa-thumbs-up"></i>&nbsp;&nbsp; Like Us on Facebook</h4>
                                        <div class="fb-page" data-href="https://www.facebook.com/sjsofmactan/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sjsofmactan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sjsofmactan/">St. Joseph&#039;s School of Mactan</a></blockquote></div>
                                    </div>
                                </div>                                  
                            </div><!--col-lg-4--> 

                        </div>
                    </div>                                      
                </section>

                <section id="copyright">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                © SJSM 2018. All Rights Reserved.
                            </div>                    
    
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <!--<h4><i class="fas fa-plug"></i>&nbsp;&nbsp; Follow Us</h4>-->
                                <ul class="copyright-social-media">
                                    <li><a href="https://www.facebook.com/sjsofmactan" target="_blank"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-youtube fa-2x" aria-hidden="true"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                                </ul>                                                      
                            </div> 

                        </div>                        
                    </div>
                </section>
            </footer>
            <!--## END OF FOOTER ##-->

        <!--### STOP your codes HERE ###-->

        <!-- request JS in sequence-->
        <!--<script>jQuery.noConflict();</script>-->
        <script src="<?php echo get_bloginfo('template_directory');?>/js/lib/LAB.min.js"></script>
        <script>            
            $LAB.setOptions({AlwaysPreserveOrder:true})              
                .script('https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js')               
                .script('https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')
                .script('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js')   
                .script('https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js')           
                .script('https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js')                                
                .script('https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js')
                .script('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js')                
                .script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js')
                .script('https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/sidebarNavigation.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/navigation.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/lib/fadeInScroll.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/lib/jquery.parallax.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/lib/jquery.isotope.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/lib/fontsmoothie.js') 
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/sjsmScript.mobile.js')
                .script('http://sjsm.edu.ph/wp-content/themes/sjsmwebsiteV2/js/sjsmScript.js'); 
        </script>

        <!-- Google Maps -->
        <script src="<?php echo get_bloginfo('template_directory');?>/js/GoogleMap.js"></script>       
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF4M-z_u8B1vKSmR_hP_PnWUr7uoBh3b0&callback=initMap"></script>
        <?php wp_footer(); ?>           
    </body>
</html>