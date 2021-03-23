<?php get_header();?>
    
    <div class="content-area">
        <main>
            <section class="latest-posts-area">
                <div class="container">
                    <div class="row">
                        <div class="text-center m-4 col-12 latest-projects-title">
                            <h2 class="title-secondary">Latest Projects</h2>
                        </div>
                        <?php
                            
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                                'post__in' => [ 37, 41, 43, 45]
                            );
                            $latest = new WP_Query($args);
                            //echo $GLOBALS['wp_query']->request; 
                            ?>
                            </br>
                            <?php
                            //echo $latest->request;
                            
                            //var_dump( $wp_query );
                            //query_posts( '&posts_per_page=-1' );
                            //var_dump( $wp_query );
                            if($latest->have_posts()):
                                while($latest->have_posts()): $latest->the_post();
                                //var_dump($post);
                        ?>
                                    <div class="p-0 col-4">
                                        <div class="latest-posts">
                                            
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(array(275,200))?>    
                                             </a>
                                             <div class="overlay2">
                                                <div class="text"><?php the_title()?></div>
                                            </div>
                                        </div>
                                        <h3 class="latest-posts-grid-title"><?php the_title()?></h3>
                                    </div>
                                <?php endwhile;
                            endif;    
                            ?>
                        
                    </div>
                </div>
            </section>
            <section class="services">
            <div class="container">
                <div class="row">
                    <div class="text-center m-4 col-12 service-title">
                        <h2 class="title-secondary">Services</h2>
                    </div>
                    
                        <div class="col-6 left-spacing">
                            <ul class="list-services">
                                <li>CONSTRUCTION MANAGEMENT</li>
                                <li>GENERAL CONTRACTING</li>
                                <li>DESIGN-BUILD</li>
                                <li>OWNERS REPRESENTATIVE</li>
                            </ul>
                    </div>
                    <div class="col-6 pl-4">
                        <ul class="list-services float-right">
                            <li>PRECONSTRUCTION SERVICES</li>
                            <li>SUSTAINABLE DESIGN</li>
                            <li>PROGRAM MANAGEMENT</li>
                            <li>VIRTUAL DESIGN & CONSTRUCTION</li>
                        </ul>
                    </div>
                </div>
                </div>
            </section>
        </main>
    </div>

    

<?php get_footer();?>
 