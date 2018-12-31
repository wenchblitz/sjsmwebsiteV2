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
    
    <!-- Get in Touch -->
    <div class="sb-widgets">
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