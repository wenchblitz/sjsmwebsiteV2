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
 * Template Name: St. Francis of Assisi
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
                        
                        <center><a href="http://sjsm.edu.ph/wp-content/uploads/2015/07/St.Francis.jpg" class="img-upload"><img src="http://sjsm.edu.ph/wp-content/uploads/2015/07/St.Francis.jpg" alt="St. Francis of Assissi" width="225" height="379"  class="img-responsive"></a></center><br>
                        <p>
                            St. Francis was born Giovanni Francesco di Bernardone in the year 1182 in the town of Assisi in Italy. Brought up in great wealth and luxury, Francis lived a carefree life, drinking and praying with his rich friends.
                            One day, Francis became seriously ill. He prayed hard and asked God for guidance. He made a strong determination to renounce his old way of living to live a life dedicated to the service of humanity and nature which he saw as a manifestation of God.

                            As soon as Francis got well, he told his parents about his plan. They were disappointed. Francis gave up his old ways and began to serve the greater good of all beings. He distributed clothes, goods and money to the poor. His father was very angry at his son, and turned him out of the house.

                            Francis lived like a beggar. His old friends teased him, and even pelted him with stones and mud. He bore all of these things with patience and began a life of simplicity wearing simple clothing and eating simple food.
                            Living in a cave in the mountains of Assisi, Francis spent his time in prayer and meditation. Some kind people gave him food, but very often he had nothing to eat at all. Francis was very humble and loved all of God’s creatures. He loved birds, animals, plants, trees and nature itself. He loved the oppressed and the outcasts. He treated the birds, the beasts and all beings as brothers and sisters.
                            Francis went from village to village preaching the love of God. He invited people to join him in his life of service.

                            The gospel of kindness and love of Francis soon spread all over Europe and earned for him the name of St. Francis. People called him “The Little Poor Man of Assisi”.
                            St. Francis died in 1228. His followers built a beautiful church on the hill of Assisi, the hill he so dearly loved. The influence of St. Francis lives on until this day.
                        </p><br>

                        <h2>Peace and all Good</h2>
                        <center><a href="http://sjsm.edu.ph/wp-content/uploads/2015/07/PeaceAndAllGood.jpg" class="img-upload"><img src="http://sjsm.edu.ph/wp-content/uploads/2015/07/PeaceAndAllGood.jpg" alt="PeaceAndAllGood" width="234" height="310" class="img-responsive"></a></center><br>
                        <p>
                            Peace and all Good was a greeting used by St. Francis. It is a greeting, blessing, and a hope for the world. There was in the town of Gubbio near Assisi, a very fierce wolf who, due to hunger, ravaged the town and its people, killing them, and filling them with fear and anger.
                            The townspeople set out to kill the wolf, but they were unsuccessful. Because they were very afraid, the people rarely dared to go outside.
                            Out of compassion for the people, Francis decided to go out to find the wolf. Francis eventually found him. He made the sign of the cross, instructed the wolf to come to him. He said, “Brother Wolf, you have done much harm, and all the people have become your enemies. I would like to make peace between you and the people.”
                            Francis led the wolf into town. Surrounded by the worried citizens, he made an agreement between them and the wolf. He explained that the wolf had terrorized the people because he was hungry. He told the people to feed the wolf regularly and the wolf would no longer prey upon them or their flocks.
                            From that day on, the wolf and the people kept the agreement which St. Francis made. The wolf hurt no one, and no one hurt him. All the people received him courteously, feeding him with great pleasure, and no dog barked at him as he went about. After two years the wolf died of old age. The people of Gubbio mourned his loss greatly, because whenever he went through the town, the wolf’s peaceful kindness and patience reminded them of the virtues and the holiness of St. Francis who reminded them of God.
                            Francis was known – before then and since – as brother to all beasts of the field, as friend to all fowl, as companion to all creatures. In his direct, non- violent action in reconciling the 
                            town of Gubbio with the wolf that had attacked the town out of hunger and desperation, he becomes for us a model of peace and all good.
                        </p><br>

                        <h2>The Cross of San Damiano</h2>
                        <center><a href="http://sjsm.edu.ph/wp-content/uploads/2015/07/San-Damiano-Cross.png" class="img-upload"><img src="http://sjsm.edu.ph/wp-content/uploads/2015/07/San-Damiano-Cross.png" alt="San-Damiano-Cross" width="212" height="392" class="img-responsive" ></a></center><br>                        
                        <p>
                            The San Damiano Cross is a reproduction of the one St. Francis was praying before when he received the commission from the Lord to rebuild the Church.
                            One day, while passing the rundown church known as San Damiano, Francis heard an internal voice from his spirit telling him to go in and pray. He entered and knelt before the cross in contemplation. While gazing at the cross, Francis saw the lips of Jesus move and he heard the words “Francis, go repair my house which as you see is falling into ruin.”
                            At first Francis misunderstood and proceeded to repair only the San Damiano Chapel. Eventually, his acts of poverty, humility and charity brought about repairs to the entire Catholic Church.
                            The San Damiano Cross has symbolized the mission to bring renewal to the Church.
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