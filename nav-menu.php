<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top sidebarNavigation" data-sidebarClass="navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button id="nav-icon" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars" aria-hidden="true"></i>
                <!--<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>-->
            </button>
            
            <a id="sjsmLOGO" class="navbar-brand page-scroll" href="#page-top"></a>

            <!--<span class="navbar-brand">St. Joseph's School of Mactan</span>-->
        </div>
        
        <?php if (is_front_page()) : ?>

        <!-- Collect the nav links, forms, and other content for toggling -->        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden"><a href="#page-top"></a></li>                            
                <li><a class="page-scroll" href="#page-top"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a> </li>
                <li><a class="page-scroll" href="#offers"><i class="fa fa-gift" aria-hidden="true"></i>&nbsp;Offerings</a></li>
                <li><a class="page-scroll" href="#blog-updates"><i class="fa fa-rss" aria-hidden="true"></i>&nbsp;Blog</a></li>
                <li><a class="page-scroll" href="#upcoming-events"><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp;Events</a></li>
                <li><a class="page-scroll" href="#about"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;About</a></li>                
                <li><a class="page-scroll" href="#academics"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Academics</a></li>
                <li><a class="page-scroll" href="#admissions"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>&nbsp;Admissions</a></li>
                <li><a class="page-scroll" href="#galleries"><i class="far fa-image" aria-hidden="true"></i>&nbsp;Galleries</a></li>
                <li><a class="page-scroll" href="http://sjsm.edu.ph/career/"><i class="fas fa-briefcase"></i>&nbsp;Career</a></li>
                <li><a class="page-scroll" href="#contactus" id="callus"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Contact Us</a></li>                            
                <li><a id="goSearch" href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i><!--&nbsp;Search--></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->

        <?php else: ?>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'depth' => 5,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse inject-fontawesome fadeInDown',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                        )
                    );
            ?>
        <!-- /.navbar-collapse -->  
        <?php endif ?>

    </div>
    <!-- /.container-fluid --> 
</nav>