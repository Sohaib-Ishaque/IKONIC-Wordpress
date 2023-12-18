<?php get_header();?>
      <section class="home" id="home">
            <div class="swiper home-slider">
                  <div class="swiper-wrapper">
                  <?php 
                      $args = array( 'post_type' => 'slider', 'posts_per_page' => -1);
                      $the_query = new WP_Query( $args ); 
                      ?>
                      <?php 
                      if ( $the_query->have_posts() ) : 
                         while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                              <div class="swiper-slide">
                                    <div class="box" style="background: url(<?php echo get_field('bg_img'); ?>) no-repeat;">
                                          <div class="content"> <span><?php echo get_field('sub_title'); ?></span>
                                                <h3><?php echo get_field('title'); ?></h3>
                                                <p><?php echo get_field('description'); ?></p>
                                                <a href="<?php echo get_field('cta_url'); ?>" class="btn"><?php echo get_field('cta'); ?></a> 
                                          </div>
                                    </div>
                              </div>
                      <?php endwhile;
                      wp_reset_postdata(); ?>
                      <?php endif;?>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-pagination"></div>
            </div>
      </section>
      <section class="services">
            <h1 class="heading">Our Projects</h1>
            <div class="box-container">
            <?php 
                $args = array( 'post_type' => 'projects', 'posts_per_page' => 3);
                $the_query = new WP_Query( $args ); 
                ?>
                <?php 
                if ( $the_query->have_posts() ) : 
                   while ( $the_query->have_posts() ) : $the_query->the_post(); 
                              $post_id = get_the_ID();
                              $thumbnail_id = get_post_thumbnail_id($post_id);
                              if ($thumbnail_id) {
                                  $image_info = wp_get_attachment_image_src($thumbnail_id, 'full'); 
                                  $image_url = $image_info[0];
                              }
                        ?>
                        <div class="box">
                              <div class="img-holder"><img src="<?php echo $image_url; ?>"></div>
                              <div class="content">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php permalink_link(); ?>" class="btn">View Detail</a>                                 
                              </div>
                        </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <?php endif;?>
            </div>
      </section>
      <section class="cta">
            <div class="container">
                  <div class="info-cta">
                        <h1 class="heading">Give Me a Coffee</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea corrupti quod, sapiente voluptates dicta, a numquam, delectus amet possimus provident cum magni consequuntur excepturi! Illum veniam aperiam repellat eum enim.</p>
                        <?php 
                              $coffee = hs_give_me_coffee();
                              if ($coffee['success']) {
                                $coffee_data = $coffee['data'][0];
                                ?>
                                <div class="coffee-card">
                                  <img src="<?php echo $coffee_data['image']; ?>" alt="<?php echo $coffee_data['title']; ?>">
                                  <h3><?php echo $coffee_data['title']; ?></h3>
                                  <a href="<?php echo $coffee_data['link']; ?>" target="_blank">Buy now!</a>
                                </div>
                                <?php
                              } else {
                                echo '<p>Error: ' . $coffee['message'] . '</p>';
                              }
                        ?>

                  </div>
                  <div class="cta-btn">
                        <a href="<?php echo hs_give_me_coffee(); ?>" class="btn">Contact Us</a>
                  </div>
            </div>
      </section>
<?php get_footer(); ?>
