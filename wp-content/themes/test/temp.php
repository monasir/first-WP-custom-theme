<?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'offset' => 1
                            );
                            $latest = new WP_Query($args);

                            if(have_posts()):
                                while(have_posts()): the_post();
                        ?>
                                    <div class="s-grid col-4">
                                        <div class="latest-posts">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275,200))?></a>
                                            
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;    
                            ?>



<?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                                'post__in' => [ 37, 41, 43, 45]
                            );
                            $latest = new WP_Query($args);
                            //var_dump( $wp_query );
                            //query_posts( '&posts_per_page=-1' );
                            //var_dump( $wp_query );
                            if($latest->have_posts()):
                                while($latest->have_posts()): $latest->the_post();
                        ?>
                                    <div class="p-0 col-4">
                                        <div class="latest-posts">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275,200))?></a>
                                            <h3><?php the_title()?></h3>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;    
                            ?>
                        