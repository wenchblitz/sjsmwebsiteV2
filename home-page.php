<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package sjsmwebsiteV2
 *
 * Template Name: Home Page
 */
get_header(); ?>
                <!--## SECTIONS ##-->
                <section id="offers">
                    <div class="container">
                        <div class="row">
                            <h1>We Offer</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <!--<i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>  -->
                                        <i class="fas fa-dove fa-5x"></i>
                                        <h2>Christian Formation</h2>                                                                                     
                                        <p>This program is the core of the curriculum. It promotes and sustains the integral Christian formation of the learners to be God-loving, evangelizing and responsible members of society.</p>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <i class="far fa-handshake fa-5x" aria-hidden="true"></i>
                                        <h2>Outreach Program</h2>
                                        <p>Outreach Program is the concrete expression of the Christian Formation of the learners and the whole school community anchored in the Vision-Mission and Core Values of the institution.</p>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                                        <h2>Academic Excellence</h2>
                                        <p>To gradually form empowered individuals who have learned through a program that is rooted on sound educational principles and geared towards excellence.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="blog-updates">
                    <h1>Blog Updates</h1>

                    <!--featured post-->                   
                    <article id="featured-post" class="container">
                        <div class="row">

                        <?php query_posts('posts_per_page=1&cat=25');  
                            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                            <div class="feat-wrapper">

                                <div class="col-lg-8">                                
                                    <figure class="feat-image">
                                        <a href="<?php the_permalink(); ?> ">
                                            <?php if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail();
                                                } else { ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/img/st-clare-building-mobile.jpg" alt="<?php the_title(); ?>" class="img-responsive" />
                                            <?php } ?>
                                        </a>
                                    </figure>                               
                                </div>                    
                                
                                <div class="col-lg-4 feat-post-details">
                                    <h3 class="feat-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                        <div class="feat-meta"> 
                                            <ul>
                                                <li><?php the_time('F jS, Y') ?></li>
                                                <li>-</li>
                                                <li><?php the_author(); ?></li>
                                            </ul>                                    
                                        </div>
                                    <?php endif; ?>

                                    <div class="feat-content">
                                        <?php                                  
                                            $content = get_the_content();
                                            echo substr($content, 0, 400); //420
                                        ?>                                    
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="alert alert-warning">Continue reading...</a>
                                
                                </div><!--!feat-post-details-->

                            </div><!--!feat-wrapper-->
                            <?php endwhile; ?> <?php wp_reset_query(); ?>
                        </div><!--row-->
                    </article><!--end of featured post-->
                               
                    <div class="feat-separator"></div>
                    
                    <!--recent post-->                    
                    <article class="container index-recent-post">
                        <div class="row">

                            <!-- Display post Outside the Loop -->
                            <?php 
                                // Define the default query args
                                global $wp_query;
                                $defaults = $wp_query->query_vars;

                                // Exclude 'Featured' category in recent post
                                $args = array('cat'=>-25);

                                // Display atleast 3 recent posts
                                $posts = array('posts_per_page'=>3);

                                // merge the default with your custom args
                                $args = wp_parse_args($posts, $args, $defaults);

                                query_posts($args); 
                                
                                if ( have_posts() ) : ?>

                                <?php while ( have_posts() ) : the_post(); ?>
                                    
                                <div class="col-lg-4 col-md-4 col-sm-4">

                                    <article class="index-recent-post-wrapper">
                                        <figure class="post-image">
                                            <a href="<?php the_permalink(); ?> ">
                                            <?php if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail();
                                                } else { ?>
                                                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/st-clare-building-recent.jpg" alt="<?php the_title(); ?>" />
                                            <?php } ?>
                                            </a>    
                                        </figure>   

                                        <header class="post-details">
                                            <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
                                        </header>
                                                                        
                                        <div class="post-content">
                                            <?php if ( 'post' === get_post_type() ) : ?>
                                                <div class="meta">
                                                    <ul>
                                                        <li><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></li>
                                                        <li>-</li>
                                                        <li><?php the_time('F jS, Y') ?></li>
                                                        <li>-</li>
                                                        <li><?php the_author(); ?></li>
                                                    </ul>
                                                </div>	
                                            <?php endif; ?>

                                            <?php the_excerpt(); ?>
                                        </div><!-- .entry-content -->
                                    </article><!--end of index-recent-post-wrapper-->

                                </div><!--end of col-lg-4-->

                                <?php endwhile; ?>
                            <?php endif; ?><?php wp_reset_query(); ?>
                    </article>                    
                    <br>
                    <a href="<?php echo get_home_url(); ?>/blog/" class="alert alert-warning" role="alert">View all Post</a>
                </section>       
                
                <section id="upcoming-events">
                    <h1>News & Updates</h1>
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-8">
                                <h3><i class="far fa-calendar-alt"></i>&nbsp; Recent Events</h3>                                
                                <div class="recent-events">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-1.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-2.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-3.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-4.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-5.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-6.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-7.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-8.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-9.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-10.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-11.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-12.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-13.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-14.JPG" class="img-responsive">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/recent-events/recent-15.JPG" class="img-responsive">
                                </div>
                            </div>                                                        
                                                    
                            <div class="col-lg-4">                                
                                <h3><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp; Upcoming Events</h3>
                                <?php if ( is_active_sidebar( 'sidebar-events' ) ) : ?>
                                    <?php dynamic_sidebar( 'sidebar-events' ); ?>
                                <?php endif; ?>
                            </div>   
                                           
                        </div>
                    </div>
                </section>

                <section id="about">
                    <h1>About Us</h1>
                    <div class="container">
                        <ul class="list-about-us">
                            <?php
                                $args = array(
                                    'depth' => 1,
                                    'include' => 8,
                                    'title_li' => '',
                                );

                                wp_list_pages($args);
                                $args['child_of'] = $args['include'];
                                unset($args['include']);
                                wp_list_pages($args);
                            ?>
                        </ul>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="sjsm-buildings">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/st-francis-building.jpg" class="img-responsive" alt="">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/st-clare-building.jpg" class="img-responsive" alt="">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/mtvm-building.jpg" class="img-responsive" alt="">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/sjsm-mda.jpg" class="img-responsive" alt="">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/sfic-convent.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-info">
                                    <div class="mobile-info">
                                        <p>St. Joseph’s School of Mactan is an institution of learning, owned and administered by the Franciscan Sisters of the Immaculate Conception of the Holy Mother of God, Philippine South Province (SFIC-PSP) as a non-stock, non-profit corporation. It is an integral part of the SFIC Educational Network System in the Philippines and an instrumentality of the SFIC-PSP.&nbsp; <a href="http://sjsm.edu.ph/about-sjsm/">read more &rarr;</a></p>
                                    </div>
                                    <div class="desktop-info">
                                        <p>St. Joseph’s School of Mactan is an institution of learning, owned and administered by the Franciscan Sisters of the Immaculate Conception of the Holy Mother of God, Philippine South Province (SFIC-PSP) as a non-stock, non-profit corporation. It is an integral part of the SFIC Educational Network System in the Philippines and an instrumentality of the SFIC-PSP.</p>
                                        <p>As a Catholic School it is at the service of the Church and the Earth Community as it provides excellent programs and services to form the youth to become God-loving, evangelizing, and responsible members of an Earth Community of just and lasting peace.</p>
                                        <p>As a Philippine School, it situates itself within the prevailing socio-eco-political, cultural technological realities and relationships not only in the country but also within the Region and the world as a whole.&nbsp; <a href="http://sjsm.edu.ph/about-sjsm/">read more &rarr;</a></p>                                        
                                    </div>
                                    
                                </div>                                
                            </div>
                        </div>
                      
                    </div>
                </section>

                <section id="academics">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Academics</h1>                             
                                  
                                    <h3> GOALS AND OBJECTIVES OF THE BASIC EDUCATION DEPARTMENT</h3>

                                    <h4>GOALS</h4>
                                    <h5>1. Goals of K. Grades 1 to 12</h5>
                                    <ul>
                                        <li>a. To form students/pupils to be God-loving, evangelizing and responsible members society.</li>
                                        <li>b. To foster in them the values of simplicity, truth, justice, peace, and integrity of creation.</li>
                                        <li>c. To develop their moral, intellectual, social and emotional faculties through a balanced, integrated and dynamic curriculum.</li>
                                        <li>d. To promote in them active involvement in the building of God’s kingdom in the spirit of St. Francis and St. Clare.</li>
                                    </ul>
                                
                                <div class="clearfix"></div>
                                <a href="<?php echo get_home_url(); ?>/academics/basic-education/" class="alert alert-warning" role="alert">Read More</a>                        
                            </div>
                        </div>
                    </div>
                </section>

                <section id="admissions">
                    <!--<div class="admissions-bg"></div>-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Admissions</h1>
                                <h4>TESTING FEE:</h4> 
                                <ul class="no-list">
                                    <li>₱300.00 – ₱375.00 (For Nursery to Grade 1)</li>
                                    <li>₱300.00 (For Grade 2 - Grade 12)</li>
                                </ul>                                
                                
                                <h4>ADMISSION REQUIREMENTS</h4> 
                                <ul class="no-list">
                                    <li>Report Card</li>
                                    <li>Certificate of Good Moral Character</li>
                                    <li>Clear Photo Copy of Birth Certificate (NSO Authenticated)</li>
                                    <li> Clear Photo Copy of Baptismal Certificate</li>
                                    <li>First Communion Certificate (Grade 4 – Grade 11)</li>
                                    <li>4 copies 2×2 recent picture</li>
                                    <li>NCAE Result (Grade 11)</li>
                                </ul>

                                <div class="clearfix"></div>
                                <a href="<?php echo get_home_url(); ?>/admissions/" class="alert alert-warning" role="alert">More Requirements</a>&nbsp;&nbsp;
                                <a href="<?php echo get_home_url(); ?>/admissions/tuition-fees/" class="alert alert-success" role="alert">View Tuition Fees</a>
                                                               
                            </div>
                        </div>
                    </div>               
                </section>

                <section id="galleries">
                    <div class="container-fluid">
                        <div class="row">         
                            <!---->
                            <h1>Photo Galleries</h1>  
                            <!-- Isotope Controls -->                   
                            <div class="button-group filters-button-group">
                                <a class="button is-checked" data-filter="*">All</a>
                                <a class="button" data-filter=".outreach">Outreach</a>
                                <a class="button" data-filter=".retreat">Retreat</a>
                                <a class="button" data-filter=".holy-mass">Holy Mass</a>
                                <a class="button" href="<?php echo get_home_url(); ?>/photo-gallery/">View Galleries</a>
                            </div><!-- button-group -->                             
                            
                            <div class="grid">
                                <div class="element-item grid-item outreach" data-category="outreach">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/outreach-1.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item retreat" data-category="retreat">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/retreat-1.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item holy-mass" data-category="holy-mass">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/mass-1.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item outreach" data-category="outreach">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/outreach-2.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item holy-mass" data-category="holy-mass">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/mass-2.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item retreat" data-category="retreat">
                                     <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/retreat-2.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item holy-mass" data-category="holy-mass">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/mass-3.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item outreach" data-category="outreach">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/outreach-3.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item holy-mass" data-category="holy-mass">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/mass-4.JPG" alt="" class="img-responsive">
                                </div>

                                <div class="element-item grid-item retreat" data-category="retreat">
                                    <img src="<?php echo get_bloginfo('template_directory');?>/img/featured-galleries/retreat-3.JPG" alt="" class="img-responsive">
                                </div>                                                                
                            </div><!--Grid-->
                            <!---->                            

                        </div><!--row-->
                    <div><!--container-->
                </section>

                <section id="publishing-partners">
                    <!--<div class="publishing-bg"></div>-->
                    <div class="container">
                        <div class="row">
                            <!--###-->
                            <div class="col-lg-12">
                                <h1>Publishing Partners</h1>
                    
                                    <div class="container">
                                        <div class="row publishing-company">
                                        
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/PHOENIX.png" alt="Phoenix Publishing House" class="img-responsive"></figure>
                                            </div>     
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/Vibal.png" alt="Vibal Group" class="img-responsive"></figure>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/SoLINE.png" alt="SoLINE Publishing Company Inc," class="img-responsive"></figure>
                                            </div>                                                                                         
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/C&E.png" alt="C&E Publishing, Inc." class="img-responsive"></figure>
                                            </div>  
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/StBernadette.png" alt="St. Bernadette Publishing House Corporation" class="img-responsive"></figure>
                                            </div>                                               
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/TechFactorsInc2.png" alt="TechFactors Inc." class="img-responsive"></figure>
                                            </div>    
                                        
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                    
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/TheLibrary.png" alt="The Library Publishing House, Inc." class="img-responsive"></figure>
                                            </div>        
                            
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/BrilliantCreations.png" alt="Brilliant Creations Publishing, Inc" class="img-responsive"></figure>
                                            </div>                    
                                                              
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/RexBookstore.png" alt="Rex Bookstore Inc." class="img-responsive"></figure>
                                            </div>                    
                    
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/FnB.png" alt="FnB Educational, Inc." class="img-responsive"></figure>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-4">
                                                <figure><img src="<?php echo get_bloginfo('template_directory');?>/img/publishing/Sibs.png" alt="Sibs Publishing House" class="img-responsive"></figure>
                                            </div>                                                                                            
                                        
                                        </div>
                                    </div>  
                                                                        
                                </p>
                            </div>
                            <!--###-->
                        </div>
                    </div>               
                </section> 
<?php get_footer(); ?>