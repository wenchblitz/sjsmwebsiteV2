<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sjsmwebsiteV2
 */

/*
 * Template Name: Saint Joseph
 */

get_header();
?>

<!-- PHP / Normal Page -->            
<div id="page-bg" class="container-fluid">               
    <div class="container">
        <div class="row">
           
            <main id="page" class="col-lg-9">
                <div class="page-content">
                <!-- ### -->

                    <section class="page">
                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header><!-- .entry-header -->                

                        <center><a href="http://sjsm.edu.ph/wp-content/uploads/2015/07/St.Joseph.jpg" class="img-upload"><img src="http://sjsm.edu.ph/wp-content/uploads/2015/07/St.Joseph.jpg" alt="St.Joseph" width="228" height="295"  class="img-responsive"></a></center><br>
                        <p>
                            Everything we know about the husband of Mary and the foster father of Jesus comes from the Scripture. Joseph was a carpenter, a working man (Mathew 13: 55). Despite his humble work and means, Joseph came from a royal family. He was called “son of David” because he was a descendant of David, the greatest king of Israel (Luke 2:24).
                            Joseph was a compassionate, caring man. When he discovered that Mary was pregnant after they had been betrothed, he knew that the child was not his. He planned to divorce Mary according to the law but he was concerned for her safety. He knew that women accused of adultery could be stoned to death, so he decided to divorce her quietly and not to expose her to shame or cruelty (Mathew 1:19-25)
                            Joseph was an obedient man of faith. When the angel came to Joseph in a dream and told him the truth about the child Mary was carrying, Joseph immediately and without question or concern for gossip, took Mary as his wife. (Mathew 2:13) Joseph loves Jesus. When Jesus stayed in the temple Joseph, together with Mary, searched with great anxiety for three days for him (Luke 2:48). Joseph treated Jesus as his own son for over and over the people of Nazareth say of Jesus, “Is this not the son of Joseph?” (Luke 4:22)
                            There is much we wish to know about Joseph – where and when he was born, how he spent his days, when and how he died. But Scripture has left us with the most important knowledge of who he was – “a righteous man “(Mathew 1:18)
                        </p><br>

                        <h2>Prayer to St. Joseph</h2>
                        <center><a href="http://sjsm.edu.ph/wp-content/uploads/2015/07/PrayerToSaintJoseph.jpg" class="img-upload"><img src="http://sjsm.edu.ph/wp-content/uploads/2015/07/PrayerToSaintJoseph.jpg" alt="PrayerToSaintJoseph" width="253" height="290"  class="img-responsive"></a></center><br>
                        <p>
                            O glorious St. Joseph, foster father of Jesus, the Incarnate Word and spouse of the Immaculate Virgin Mary, obtain for me a pure, humble and charitable heart and perfect resignation to the Divine will.
                            Be my guide, father and model through life, that being entirely devoted to the service of Jesus and the Church, I may live and die for them alone. Amen.
                        </p>
                    </section>

                <!-- ### -->
                </div>
            </main><!-- #endRegion BLOG-->
			
			<?php get_template_part('page-sidebar') ?>
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>