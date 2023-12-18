<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */

global $post;
get_header();
?>

<div class="pxp-content">
    <?php while (have_posts()) : the_post();
        $post_id    = get_the_ID();
        $post_date  = get_the_date();
        $categories = get_the_category();
        $author     = get_the_author();
        $taxonomy = 'project type';
        $terms = get_the_terms($post_id, $taxonomy);
        $post_hero = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'pxp-full'); ?>

	      <section id="about" class="courses_head">
	            <h2><?php echo get_the_title(); ?></h2>
	      </section>
	      <section id="course_details">
            <div class="left_section">
                <?php if ($post_hero !== false) { ?>
                  	<div class="post_img">
                        <img src="<?php echo esc_url($post_hero[0]); ?>" >
                  </div>
                <?php } ?>
                  <div class="course_info">
                        <div class="course_name">
                              <p><?php the_content(); ?></p>
                        </div>
                  </div>
            </div>
            <div class="right_section">
                  <h2>Deatils: </h2> 
                  <div class="include">
                        <i class="fas fa-calendar-alt"></i>
                        <p><?php echo $post_date;?></p>
                  </div>    
                  <div class="include">
                        <i class="fas fa-user-edit"></i>
                        <p><?php echo $author;?></p>
                  </div>  
                  <div class="include">
                        <i class="fas fa-tags"></i>
                        <?php 
                            if ($terms) {
                                echo '<p>';
                                foreach ($terms as $term) {
                                    echo $term->name;
                                }
                                echo '</p>';
                            }
                       ?>
                  </div>  
            </div>
	      </section>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>