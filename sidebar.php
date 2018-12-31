<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sjsmwebsiteV2
 */

/*
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} */
?>

<aside id="sidebar" class="col-lg-3">   
    <!-- Upcoming Events -->
    <div class="sb-widget">
        <header class="sb-header">
            <h4><i class="fa fa-bullhorn"></i>&nbsp;Upcoming Events</h4>
        </header>
        <section class="sb-events">                             
            <?php if ( is_active_sidebar( 'sidebar-events' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-events' ); ?>
            <?php endif; ?>
        </section>
    </div>

    <!-- Recent Post -->
    <div class="sb-widget">
        <header class="sb-header">
            <h4><i class="fas fa-clipboard"></i>&nbsp; Recent Post</h4>
        </header>
        <section class="sb-content">                             
            <ul class="">
                <?php
                    //$recent_posts = wp_get_recent_posts();
                    //foreach( $recent_posts as $recent ){
                        //echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                    //}
                    get_archives('postbypost', '5');
                ?>
            </ul>
        </section>
    </div>

    <!-- Categories -->
    <div class="sb-widget">
        <header class="sb-header">
            <h4><i class="far fa-folder-open"></i>&nbsp; Categories</h4>
        </header>
        <section class="sb-content">                             
            <ul>
                <?php wp_list_cats('exclude=25'); ?>
            </ul>
        </section>
    </div>    

    <!-- Archives -->
    <div class="sb-widget">
        <header class="sb-header">
            <h4><i class="fas fa-file-archive"></i>&nbsp; Archives</h4>
        </header>
        <section class="sb-content">                             
            <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
            </select>  
        </section>
    </div>  

    <!-- Get in Touch -->
    <div class="sb-widget">
        <header class="sb-header">
            <h4><i class="fas fa-info"></i>&nbsp; Get in Touch</h4>
        </header>
        <section class="sb-content">
            <div>
                <i class="far fa-envelope"></i>&nbsp;&nbsp;sjsofmactan@gmail.com<br>  
                <i class="far fa-map"></i>&nbsp;&nbsp;Mactan Airport Rd., LLC, 6015<br>
                <i class="fa fa-phone"></i>&nbsp;&nbsp;340-5939<br>
                <i class="fas fa-fax"></i>&nbsp;&nbsp;(Fax) 341-2399<br>
                <i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;(+63) 922-402-4230<br>
            </div>                                    
        </section>
    </div>
</aside>


    <!--
    <div class="sb-widget">
        <header class="sb-header">
            <h4><i class="fas fa-tags"></i>&nbsp; Tags</h4>
        </header>
        <section class="sb-content">                             
            al;sjfdaslfj KJLSKJDFLJSLKDFJ ;lj fas;lkdfj dsal;kfjlkfjaksldj f
        </section>
    </div>
    -->

<!-- #region SIDEBAR -->

    <!--FB Page-->
    <!--
    <div class="sb-widget">
        <header class="sb-header">
            <h4 class="fb-page"><i class="fab fa-facebook-square"></i> acebook Page</h4>
        </header>
        <section class="sb-content">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fsjsofmactan%2F&tabs=timeline%2C%20events&width=340&height=447&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="100%" height="447" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>                                    
        </section>
    </div>                            
    -->
    
<!--
<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
--><!-- #secondary -->
